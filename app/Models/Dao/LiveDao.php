<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/28
 * Time: 21:12
 */

namespace App\Models\Dao;
use Swoft\Bean\Annotation\Bean;

/**
 * Class LiveDao
 * @Bean()
 * @package App\Models\Dao
 */
class LiveDao
{

    public  function  findUsername(String $userName):bool{
            if($userName=='success') return true;
            return false;
    }
    public  function  verify(String $password):bool{
        if($password=='error') return true;
        return false;
    }
    //验证token
    public  function  issetUserById(string $identity):bool{
        if($identity=='123') return true;
        return false;
    }
}