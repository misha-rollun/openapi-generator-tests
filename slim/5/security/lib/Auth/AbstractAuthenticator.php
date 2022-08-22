<?php

/**
 * Security
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * Security
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Auth;

use Psr\Http\Message\ServerRequestInterface;
use Dyorg\TokenAuthentication;
use Dyorg\TokenAuthentication\TokenSearch;
use Dyorg\TokenAuthentication\Exceptions\UnauthorizedExceptionInterface;

/**
 * AbstractAuthenticator Class Doc Comment
 *
 * @package OpenAPIServer\Auth
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractAuthenticator
{
    /**
     * @var string[]|null List of required scopes
     */
    protected $requiredScope;

    /**
     * Verify if token is valid on database
     * If token isn't valid, expired or has insufficient scope must throw an UnauthorizedExceptionInterface
     *
     * @param string $token Api Key
     *
     * @return array User object or associative array
     * @throws UnauthorizedExceptionInterface on invalid token
     */
    abstract protected function getUserByToken(string $token);

    /**
     * Authenticator constructor
     *
     * @param string[]|null $requiredScope List of required scopes
     */
    public function __construct($requiredScope = null)
    {
        $this->requiredScope = $requiredScope;
    }

    /**
     * Makes the api key validation of your application
     *
     * Just an example of implementation. Override this method to fit your needs
     *
     * @param ServerRequestInterface $request     HTTP request
     * @param TokenSearch            $tokenSearch Middleware instance which contains api key in token
     *
     * @return bool Must return either true or false
     * @throws UnauthorizedExceptionInterface when cannot parse token
     */
    public function __invoke(ServerRequestInterface &$request, TokenSearch $tokenSearch)
    {
       /**
        * Try find authorization token via header, parameters, cookie or attribute
        * If token not found, return response with status 401 (unauthorized)
        */
        $token = $tokenSearch->getToken($request);

        /**
         * Verify if token is valid on database
         * If token isn't valid, expired or has insufficient scope must throw an UnauthorizedExceptionInterface
         */
        $user = $this->getUserByToken($token);

        /**
         * Set authenticated user at attributes
         */
        $request = $request->withAttribute('authenticated_user', $user);

        return true;
    }
}
