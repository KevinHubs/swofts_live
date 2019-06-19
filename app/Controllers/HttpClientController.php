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

use App\Lib\TestInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Rpc\Client\Bean\Annotation\Reference;


/**
 * @Controller(prefix="/httpClient")  //定义前缀
 */
class HttpClientController
{
    /**
     * @Reference(name="test",version="1.0.1") //引用
     * @var  TestInterface   //接口
     */
     private  $testService;
    
    /**
     * @RequestMapping(route="/call")
     */
    public function call():array
    {
        $data=$this->testService->getUser('1111');
        return $data;
    }

}