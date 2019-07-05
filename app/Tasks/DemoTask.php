<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2019/6/20
 * Time: 10:51
 */

namespace App\Tasks;
use Swoft\Task\Bean\Annotation\Task;
/**
 * Demo Task
 */
class DemoTask
{


    /**
     * @TaskMapping(name="test")
     * @param int    $num
     */
    public function test(int $num)
    {
        echo '终端：每' . $num . '秒输出一次，哦耶~' . PHP_EOL;
    }
}