<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Listener;

use Swoft\App;
use Swoft\Bean\Annotation\Listener;
use Swoft\Event\EventHandlerInterface;
use Swoft\Event\EventInterface;
use Swoft\Tcp\Server\Event\TcpServerEvent;
use Swoft\Bean\Annotation\Inject;
use Swoft\WebSocket\Server\Event\WsEvent;

/**
 * Event after Tcp request
 * @Listener(TcpServerEvent::RECEIVE)  //消息事件
 */
class ReceiveListener implements EventHandlerInterface
{

    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private  $redis;

    /**
     * @param EventInterface $event
     */


    public function handle(EventInterface $event)
    {

          //触发事件
        $params=$event->getParams();
        $fd=$params[0];
        $data=$params[1];
        $server=$params[2];
        $redis=$params[3];

        //判断当前的fd,在redis当中有没有保存视频头

        //不存在信息,保存视频头信息到redis当中
//        if(!$redis->get('live_info_'.$fd)){
//            //判断是否是头信息,第一次保存
//            if(strstr($params[1],'FLV')){
//                //视频头信息
//                var_dump($redis->set('live_info_'.$fd,$data));
//                var_dump($redis->get('live_info_'.$fd));
//                //auth中间件
//
//            }
//        }
        //$settings = App::getAppProperties()->get('live'); //获取配置信息
        //需要获取到rediWsEvents当中,房间里面的fd

        //TODO  修改redis数据获取，注意前缀，注意序列化
        var_dump("触发receive");
        $live=$redis->SMEMBERS('redis_live_'.$fd);

        foreach ($live as $value){
            $value=unserialize($value);
            //判断是否是有效客户端，如果失效，触发清除
            if(!$server->exist($value)) {
                  App::trigger(WsEvent::ON_CLOSE,null,' ',$value);
                  continue;
            }
            if($redis->SISMEMBER('redis_connection_'.$value,'header')){
                $server->push($value,$data,WEBSOCKET_OPCODE_BINARY); //二进制
            }else{
                //视频头信息
                $header=unserialize($redis->SISMEMBER('redis_live_info_'.$fd));
                //当前客户端已经发送，设置已经发送
                $redis->sAdd('redis_connection_'.$value,'header');
                $server->push($value,$header.$data,WEBSOCKET_OPCODE_BINARY); //二进制
            }
            //如果当前客户端是第一次连接就发送
        }


        //srs流媒体


    }
}
