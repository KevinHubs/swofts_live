<?php

namespace Swoft\Tcp\Server\Bootstrap\Listeners;

use Swoft\App;
use Swoft\Bean\Annotation\SwooleListener;
use Swoft\Bootstrap\Listeners\Interfaces\CloseInterface;
use Swoft\Bootstrap\Listeners\Interfaces\ConnectInterface;
use Swoft\Bootstrap\Listeners\Interfaces\ReceiveInterface;
use Swoole\Server;
use Swoft\Bootstrap\SwooleEvent;

/**
 *
 * @SwooleListener({
 *     SwooleEvent::ON_RECEIVE,
 *     SwooleEvent::ON_CONNECT,
 *     SwooleEvent::ON_CLOSE
 * },
 *     type=SwooleEvent::TYPE_PORT
 * )
 */
class TcpEventListener implements ReceiveInterface,ConnectInterface,CloseInterface
{
    /**
     * 请求每次启动一个协程来处理
     *
     * @param Server $server
     * @param int    $fd
     * @param int    $fromId
     * @param string $data
     */
    public function onReceive(Server $server, int $fd, int $fromId, string $data)
    {
        /** @var \Swoft\Rpc\Server\ServiceDispatcher $dispatcher */
        $dispatcher = App::getBean('ServiceDispatcher');
        $dispatcher->dispatch($server, $fd, $fromId, $data);
    }

    /**
     * 连接成功后回调函数
     *
     * @param Server $server
     * @param int    $fd
     * @param int    $from_id
     *
     */
    public function onConnect(Server $server, int $fd, int $from_id)
    {
        var_dump('connnect------');
    }

    /**
     * 连接断开成功后回调函数
     *
     * @param Server $server
     * @param int    $fd
     * @param int    $reactorId
     *
     */
    public function onClose(Server $server, int $fd, int $reactorId)
    {
        App::trigger( \Swoft\Tcp\Server\Event\TcpServerEvent::CLOSE,null,$fd);
        var_dump('close------');

    }
}