<?php

namespace Swoft\Tcp\Server;

use Swoft\App;
use Swoft\Contract\DispatcherInterface;
use Swoft\Core\RequestHandler;
use Swoft\Event\AppEvent;
use Swoft\Helper\ResponseHelper;
use Swoft\Tcp\Server\Event\TcpServerEvent;
use Swoft\Tcp\Server\Middleware\HandlerAdapterMiddleware;
use Swoft\Rpc\Server\Middleware\PackerMiddleware;
use Swoft\Tcp\Server\Middleware\RouterMiddleware;
use Swoft\Tcp\Server\Middleware\UserMiddleware;
use Swoft\Tcp\Server\Middleware\ValidatorMiddleware;
use Swoft\Rpc\Server\Router\HandlerAdapter;
use Swoft\Rpc\Server\Rpc\Request;
use Swoft\Tcp\Server\Tcp\TcpServer;
use Swoole\Server;
use Swoft\Bean\Annotation\Inject;

/**
 * Service dispatcher
 */
class ServiceDispatcher implements DispatcherInterface
{
    /**
     * Service middlewares
     *
     * @var array
     */
    private $middlewares = [];
    /**
     * @var array
     */
    private  $type=['image/x-tgaimage/x-tga','audio/mpeg','audio/x-hx-aac-adts','video/x-flv','application/octet-stream','image/x-tga','application/zlib','application/x-dosexec','audio/x-mp4a-latm','application/x-tex-tfm'];
    /**
     * The default of handler adapter
     *
     * @var string
     */
    private $handlerAdapter = HandlerAdapterMiddleware::class;

    /**
     * @param array ...$params
     * @throws \Swoft\Rpc\Exception\RpcException
     * @throws \InvalidArgumentException
     */
    public function dispatch(...$params)
    {
        /**
         * @var Server $server
         * @var int    $fd
         * @var int    $fromid
         * @var string $data
         */
        list($server, $fd, $fromid, $data) = $params;
        try {

            $serviceRequest = $this->getRequest($server, $fd, $fromid,$data);
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            if(in_array($finfo->buffer($data),$this->type)){
                 $middlewares = $this->requestTcpMiddleware(); //引用tcpMiddle
            }else{
                 //request middlewares
                 $middlewares = $this->requestMiddleware();
            }

            $requestHandler = new RequestHandler($middlewares, $this->handlerAdapter);
            /* @var \Swoft\Rpc\Server\Rpc\Response $response */
            $response = $requestHandler->handle($serviceRequest);
            $data = $response->getAttribute(HandlerAdapter::ATTRIBUTE);
        } catch (\Throwable $t) {
            $message = sprintf('%s %s %s', $t->getMessage(), $t->getFile(), $t->getLine());
            echo $message;
            $data = ResponseHelper::formatData('', $message, $t->getCode());
            $data = service_packer()->pack($data);
        } finally {
            // Release system resources
            App::trigger(AppEvent::RESOURCE_RELEASE);
            $server->send($fd, $data);
        }




    }

    /**
     * Request middleware
     *
     * @return array
     */
    public function requestMiddleware(): array
    {
        return array_merge($this->preMiddleware(), $this->middlewares, $this->afterMiddleware());
    }

    /**
     * Request middleware
     *
     * @return array
     */
    public function requestTcpMiddleware(): array
    {
        return array_merge($this->preTcpMiddleware(), $this->middlewares, $this->afterMiddleware());
    }

    /**
     * Pre middleware
     *
     * @return array
     */
    public function preTcpMiddleware(): array
    {
        return [
            APP::getAppProperties()['auth']['tcpServerDispatcher']['middlewares'][0],
            \Swoft\Tcp\Server\Middleware\PackerMiddleware::class,
            RouterMiddleware::class,
        ];
    }



    /**
     * Pre middleware
     *
     * @return array
     */
    public function preMiddleware(): array
    {
        return [
            PackerMiddleware::class,
            RouterMiddleware::class,
        ];
    }

    /**
     * After middleware
     *
     * @return array
     */
    public function afterMiddleware(): array
    {
        return [
            ValidatorMiddleware::class,
            UserMiddleware::class,
        ];
    }

    /**
     * @param \Swoole\Server $server
     * @param int            $fd
     * @param int            $fromid
     * @param string         $data
     * @return Request
     */
    private function getRequest(Server $server, int $fd, int $fromid,string $data): Request
    {
        $serviceRequest = new Request('get', '/');

        return $serviceRequest->withAttribute(PackerMiddleware::ATTRIBUTE_SERVER, $server)
                              ->withAttribute(PackerMiddleware::ATTRIBUTE_FD, $fd)
                              ->withAttribute(PackerMiddleware::ATTRIBUTE_FROMID, $fromid)
                              ->withAttribute(PackerMiddleware::ATTRIBUTE_DATA, $data);

    }
    
    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
