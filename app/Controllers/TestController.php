<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use App\Lib\DemoInterface;
use App\Lib\TestInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
/**
 * Class TestController
 * @Controller(prefix="/test")
 * @package App\Controllers
 */
class TestController{

    /**
     * @Reference(name="test",version="1.0.1")
     * @var TestInterface
     */
    private $testService;

    /**
     * @RequestMapping(route="/call")
     * @return array
     */
    public function call()
    {
        $version  = $this->testService->getTest('11');
        return [
            'version'  => $version,
        ];
    }

}
