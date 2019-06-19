<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 23:27
 */

namespace App\Component\Auth;

use App\Models\Dao\LiveDao;
use Swoft\Auth\Bean\AuthResult;
use Swoft\Auth\Mapping\AccountTypeInterface;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;

/**
 * Class AnchorAccount
 * @package App\Component\Auth
 * @Bean()
 */
class AnchorAccount implements  AccountTypeInterface
{
    /**
     * @Inject()
     * @var LiveDao
     */
    protected  $dao;
    const LOGIN_DATA_USERNAME='username';
    const LOGIN_DATA_PASSWORD='password';

    public  function login(array $data):AuthResult
    {

         //TODO  自行完善
         //验证当前的密码是否正确
          $userName=$data[self::LOGIN_DATA_USERNAME];
          $password=$data[self::LOGIN_DATA_PASSWORD];
          $user=$this->dao->findUsername($userName);
          $res = new AuthResult();
          if($user  && $this->dao->verify($password)){
            //附加数据

            $res->setExtendedData(['id'=>111]);
            $res->setIdentity(123); //验证主题sub
          }
          return $res;
    }
    //验证token
    public function authenticate(string $identity):bool {
        return  $this->dao->issetUserById($identity);
    }
}