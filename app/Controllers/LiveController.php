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

use App\Component\Process\Process;
use App\Middlewares\LiveMiddleware;
use Swoft\App;use Swoft\Auth\Constants\AuthConstants;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\Http\Message\Bean\Annotation\Middleware;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Rpc\Server\Rpc\RpcServer;
use Swoft\Tcp\Server\Tcp\TcpServer;
use Swoft\Auth\Mapping\AuthorizationParserInterface;
use Swoole\Mysql\Exception;
use Swoft\Task\Task;
/**
 * Class LiveController
 * @Controller(prefix="live")
 * @package App\Controllers
 */
class LiveController{
    /**
     * this is a example action. access uri path: live
     * @RequestMapping(route="lives", method=RequestMethod::POST)
     * @return array
     */
    public function index(Request $request)
    {
//        $username = $request->getAttribute(AuthConstants::BASIC_USER_NAME) ?? '';
        $username = $request->input('username');
//        $password = $request->getAttribute(AuthConstants::BASIC_PASSWORD) ?? '';
        $password = $request->input('password');
        //生成token
        if(!$username || !$password){
            return [
                "code"=>ErrorCode::POST_DATA_NOT_PROVIDED,
                "message"=>"Basic Auth:{username,password}"
            ];
        }

        //从容器当中获取，自定义的manage对象
        $manager = App::getBean(AuthManagerInterface::class);
        /** @var AuthSession $session  自定义的方法*/
        $session = $manager->adminLogin($username,$password);
        $data = [
            'token'=>$session->getToken(),
            'expire'=>$session->getExpirationTime()
        ];
        return $data;
    }
    /**
     * this is a example action. access uri path: live
     * @RequestMapping(route="live", method=RequestMethod::GET)
     * @return array
     */
    public function live()
    {
        return view('live/index');

    }

    /**
     * @RequestMapping(route="connect", method=RequestMethod::POST)
     */
    public function connect()
    {
        return '{"code":0}';
    }
    /**
     * this is a example action. access uri path: live
     * @RequestMapping(route="publish")
     * @Middleware(class=LiveMiddleware::class)
     * @return array
     */
    public function publish(Request $request)
    {
        //TODO token不存在或者token验证失败都都要停止主播的推流
        try{
            var_dump("进入publish try程序段");
            $parser = App::getBean(AuthorizationParserInterface::class);
            $parser->parse($request);
            $token = $request->getHeaderLine(AuthConstants::HEADER_KEY);
            // 协程投递
            $result  = Task::co([
                ['name'=>'demoTask','method'=> 'test','params'=>[2],'type'=>Task::TYPE_CO]
            ]);
            var_dump($result);
//            var_dump($result);
            //创建子进程，进行ffmpeg进行转码
            //ProcessBuilder::create('customProcess')->start();
            //$process = new Process($token);
        }catch (\Exception $e)
        {
            var_dump("Live控制器抛出异常信息：".$e->getMessage(),$e->getFile(),$e->getLine(),$e->getCode());
            return '{"code":3}';
        }

        return '{"code":0}';
    }
}
