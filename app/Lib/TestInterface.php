<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of demo service
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetLive($server,$fd,$data)
 */
interface TestInterface
{

    /**
     * @param string $id
     *
     * @return array
     */
    public function getUser(string $id);
    public function getLive($server,$fd,$data);

}