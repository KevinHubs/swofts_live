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

use Swoft\Bean\Annotation\Listener;
use Swoft\Event\EventHandlerInterface;
use Swoft\Event\EventInterface;
use Swoft\WebSocket\Server\Event\WsEvent;
use Swoft\Bean\Annotation\Inject;

/**
 * Event after Tcp request
 * @Listener(WsEvent::ON_MESSAGE)  //消息事件
 */
class MessageListener implements EventHandlerInterface
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

        //合法性验证
        //触发事件
        $params=$event->getParams();
        var_dump('wsEvent::ON_MESSAGE----------');
        var_dump($params);
        $frame=$params[1];
        $data=json_decode($frame->data,true); //客户端传过来的fd,区分不同的视频流
        /*当前客户端fd所对应的视频流fd
          connection_fd=>服务端fd
                         是否发送视频头
        */
        $this->redis->sAdd('connection_'.$frame->fd,$data['server_fd']);
        //当前获取哪条视频流当中的数据,保存视频流对应客户端
        $this->redis->sAdd('live_'.$data['server_fd'],$frame->fd);

    }
}
