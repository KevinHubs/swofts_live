<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 23:23
 */

namespace App\Component\Auth;
use Swoft\Auth\AuthManager;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\Bean\Annotation\Bean;
use Swoft\Redis\Redis;
use Swoft\App;
/**
 * Class AuthManage
 * @package App\Component\Auth
 * @Bean()
 */
class AuthManage extends AuthManager implements AuthManagerInterface
{

    /**
     * @var string
     */
    protected $cacheClass = Redis::class;
    /**
     * @var bool 开启缓存
     */
    protected $cacheEnable = true;

    /**
     * @param string $username
     * @param string $password
     * @return \Swoft\Auth\Bean\AuthSession
     */
    public function adminLogin(string $username,string $password){
        //验证密码是否正确
         return $this->login(AnchorAccount::class,[
            AnchorAccount::LOGIN_DATA_USERNAME=>$username,
            AnchorAccount::LOGIN_DATA_PASSWORD=>$password
        ]);

    }

}