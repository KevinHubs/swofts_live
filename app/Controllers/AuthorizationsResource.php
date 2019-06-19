<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2018/11/15
 * Time: 3:04 PM
 */

namespace App\Controllers;

use Swoft\App;
use Swoft\Auth\Constants\AuthConstants;
use Swoft\Http\Message\Server\Request;
use App\Componet\Auth\Service\AuthManage;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Auth\Mapping\AuthManagerInterface;

/**
 * @Controller(prefix="/oauth")
 */
class AuthorizationsResource
{
    public $token;
    /**
     * @RequestMapping(route="token", method={RequestMethod::GET})
     */
    public function oauth(Request $request) : array
    {
//        $this->token = new AuthManagerService();
//        return $this->token->generateSession('kevin','123456');
        $identity = $request->getAttribute(AuthConstants::BASIC_USER_NAME) ?? '';
        $credential = $request->getAttribute(AuthConstants::BASIC_PASSWORD) ?? '';
        if(!$identity || !$credential){
            return [
                "code" => 400,
                "message" => "Identity and Credential are required."
            ];
        }
        /** @var AuthManagerService $manager */
        $manager = App::getBean(AuthManagerInterface::class);
        /** @var AuthSession $session */
        $session = $manager->adminBasicLogin($identity, $credential);
        $data = [
            'token' => $session->getToken(),
            'expire' => $session->getExpirationTime()
        ];
        return $data;
    }
}