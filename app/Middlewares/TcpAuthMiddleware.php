<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Middlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\Auth\Constants\AuthConstants;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Message\Middleware\MiddlewareInterface;
use Swoft\App;
use Swoft\Auth\Exception\AuthException;
use Swoft\Auth\Helper\ErrorCode;
use Swoft\Auth\Mapping\AuthorizationParserInterface;
use Swoft\Rpc\Server\Middleware\PackerMiddleware;

/**
 * @Bean()
 * @uses      ActionTestMiddleware
 * @version   2017年11月16日
 * @author    huangzhhui <huangzhwork@gmail.com>
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class TcpAuthMiddleware implements MiddlewareInterface
{

    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private  $redis;

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $server = $request->getAttribute(PackerMiddleware::ATTRIBUTE_SERVER);
        $data = $request->getAttribute(PackerMiddleware::ATTRIBUTE_DATA);
        $fd = $request->getAttribute(PackerMiddleware::ATTRIBUTE_FD);

        //TODO 默认组件如果没有携带头信息 Authorization: Bearer 是不会验证
        //header携带头信息 Authorization: Bearer xxxxxxxxxxxxxx
        $parser = App::getBean(AuthorizationParserInterface::class);

        try{
            if(!$this->redis->exists('liva_info'.$fd))
            {
                if (preg_match(/*'/\([.*?]\)/'*/'/\[.*?]/', $data, $match) )
                {
                    //这里存在一定的问题 会执行多次匹配导致会出现很多Notice  Undefined offset: 1
                    $token = chop(explode("=", $match[0])[1],']');
                    //写入redis 集合
                    $this->redis->sAdd('live_info_'.$fd,'auth');
                    //手动添加头信息
                    $request = $request->withAddedHeader(AuthConstants::HEADER_KEY, 'Bearer '.$token);
                    var_dump($request);
                    if(strstr($data,'FLV')){
                      //视频头信息
                      $this->redis->sAdd('live_info_'.$fd,$data);
                      $this->redis->SMEMBERS('live_info_'.$fd);
                     // auth中间件
                    }
                }else {
                    throw new \Exception('请正确的携带token');
                }
                $request = $parser->parse($request); //验证token
            }

        }catch (\Exception $e){

            var_dump('tcp认证抛出:'.$e->getMessage(),$e->getFile(),$e->getLine(),$e->getCode());
            $server->close($fd);
        }

        $response = $handler->handle($request);
        return $response;
    }
}