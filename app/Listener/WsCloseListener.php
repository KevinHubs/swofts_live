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
 * @Listener(WsEvent::ON_CLOSE)  //关闭事件
 */

class WsCloseListener implements EventHandlerInterface
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

        $fd=$params[1]; //当前的fd,关联的是哪个视频流
        //$this->redis->sRem('live_1',$fd);

        //1.得到当前客户端所连接的视频流的fd
        $connection_info=$this->redis->SMEMBERS('connection_'.$fd);
        var_dump($connection_info);
        $server_fd=$connection_info[1];  //当前客户端连接===>服务端的fd

        //当前这个视频流对应客户端fd,清除了集合当中的一个元素
        var_dump($this->redis->sRem('live_'.$server_fd,$fd));
        //删除是否发送视频头信息(是否第一次连接),单个客户端的连接信息
        var_dump($this->redis->delete('connection_'.$fd));




        

    }
}
