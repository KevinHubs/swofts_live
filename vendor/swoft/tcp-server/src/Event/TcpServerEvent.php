<?php

namespace Swoft\Tcp\Server\Event;

/**
 * TCP Server event defines
 */
class TcpServerEvent
{
    /**
     * rpc request
     */
    const RECEIVE = 'receive';
    const CLOSE = 'close';
}