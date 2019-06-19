<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Middlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\App;
use Swoft\Auth\Constants\AuthConstants;
use Swoft\Auth\Exception\AuthException;
use Swoft\Auth\Helper\ErrorCode;
use Swoft\Auth\Parser\AuthorizationHeaderParser;
use Swoft\Bean\Annotation\Bean;
use Swoft\Http\Message\Middleware\MiddlewareInterface;
use Swoft\Auth\Mapping\AuthorizationParserInterface;
/**
 * @Bean()
 */
class LiveMiddleware implements MiddlewareInterface
{
    /**
     * @param \Psr\Http\Message\ServerRequestInterface     $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        $parser = App::getBean(AuthorizationParserInterface::class);
        if (!$parser instanceof  AuthorizationParserInterface)
        {
            throw new AuthException(ErrorCode::POST_DATA_NOT_PROVIDED,'AuthorizationParser should implement Swoft\Auth\Mapping\AuthorizationParserInterface');
        }
        //TODO 获取token
        $data = json_decode($request->raw(),true);
        var_dump($data);
        $token = explode("=",explode("?",$data['tcUrl'])[1])[1];
        if ($token)
        {
            $request = $request->withAddedHeader(AuthConstants::HEADER_KEY,'Bearer '.$token);
        }
        $response = $handler->handle($request);
        return $response;
    }
}