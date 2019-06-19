<?php

namespace Swoft\Tcp\Server\Event\Listeners;

use Swoft\App;
use Swoft\Core\RequestContext;
use Swoft\Bean\Annotation\Listener;
use Swoft\Event\EventInterface;
use Swoft\Event\EventHandlerInterface;
use Swoft\Tcp\Server\Event\TcpServerEvent;

/**
 * Event after Tcp request
 * @Listener(TcpServerEvent::RECEIVE)
 */
class ReceiveListener implements EventHandlerInterface
{
    /**
     * @param EventInterface $event
     */
    public function handle(EventInterface $event)
    {
        //App::getLogger()->appendNoticeLog();
        //RequestContext::destroy();
    }
}
