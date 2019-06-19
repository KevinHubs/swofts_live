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
use Swoft\Tcp\Server\Event\TcpServerEvent;
use Swoft\Bean\Annotation\Inject;

/**
 * Event after Tcp request
 * @Listener(TcpServerEvent::CLOSE)
 */
class CloseListener implements EventHandlerInterface
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

        $params=$event->getParams();
        if($this->redis->get('live_info_'.$params[0])){
            $this->redis->delete('live_info_'.$params[0]);
        }

    }

}
