<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Services;

use App\Lib\DemoInterface;
use App\Lib\TestInterface;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;

/**
 * Demo servcie
 *
 *
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetLive($server,$fd,$data)
 *
 * @Service(version="1.0.2")  //定义版本
 */
class LiveService implements TestInterface
{

    public function getUser(string $id)
    {
        return [$id];
    }

    public function getLive($server,$fd,$data)
    {
        return [];
    }


}