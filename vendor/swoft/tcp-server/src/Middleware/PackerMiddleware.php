<?php

namespace Swoft\Tcp\Server\Middleware;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\App;
use Swoft\Bean\Annotation\Bean;
use Swoft\Http\Message\Middleware\MiddlewareInterface;
use Swoft\Tcp\Server\Event\TcpServerEvent;
use Swoft\Rpc\Server\Router\HandlerAdapter;

/**
 * service packer
 *
 * @Bean()
 * @uses      PackerMiddleware
 * @version   2017年11月26日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class PackerMiddleware implements MiddlewareInterface
{


    public  $redis;
    public  function  __construct()
    {
        $this->redis=new \Redis();
        $this->redis->connect('127.0.0.1',6379);
    }
    /**
     * the server param of service
     */
    const ATTRIBUTE_SERVER = 'serviceRequestServer';

    /**
     * the fd param of service
     */
    const ATTRIBUTE_FD = 'serviceRequestFd';

    /**
     * the fromid param of service
     */
    const ATTRIBUTE_FROMID = 'serviceRequestFromid';

    /**
     * the data param of service
     */
    const ATTRIBUTE_DATA = 'serviceRequestData';

    /**
     * packer middleware
     *
     * @param \Psr\Http\Message\ServerRequestInterface     $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $packer = service_packer();
        $data   = $request->getAttribute(self::ATTRIBUTE_DATA);
        $server = $request->getAttribute(self::ATTRIBUTE_SERVER);
        $fd     = $request->getAttribute(self::ATTRIBUTE_FD);

        //获取直播服务配置,确定直播服务当前的接口
        $settings = App::getAppProperties()->get('live');

        //触发receive事件
        App::trigger( \Swoft\Tcp\Server\Event\TcpServerEvent::RECEIVE,null,$fd,$data,$server,$this->redis);



        $server=$request->getAttribute(\Swoft\Rpc\Server\Middleware\PackerMiddleware::ATTRIBUTE_SERVER);
        $data=[
             'interface' => $settings['interface'],
             'version' => $settings['version'],
             'method' =>$settings['method'],
             'params' => [$server,$fd,$data]
        ];
        $request = $request->withAttribute(self::ATTRIBUTE_DATA,$data);
        /* @var \Swoft\Rpc\Server\Rpc\Response $response */
        $response      = $handler->handle($request);
        $serviceResult = $response->getAttribute(HandlerAdapter::ATTRIBUTE);
        $serviceResult = $packer->pack($serviceResult);
        return $response->withAttribute(HandlerAdapter::ATTRIBUTE, $serviceResult);
    }
}
