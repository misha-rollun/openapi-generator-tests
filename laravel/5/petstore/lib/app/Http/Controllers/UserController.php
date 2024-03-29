<?php

/**
 * Swagger Petstore - OpenAPI 3.0
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation createUser
     *
     * Create user.
     *
     *
     * @return Http response
     */
    public function createUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $user = $input['user'];


        return response('How about implementing createUser as a post method ?');
    }
    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array.
     *
     *
     * @return Http response
     */
    public function createUsersWithListInput()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $user = $input['user'];


        return response('How about implementing createUsersWithListInput as a post method ?');
    }
    /**
     * Operation loginUser
     *
     * Logs user into the system.
     *
     *
     * @return Http response
     */
    public function loginUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $username = $input['username'];

        $password = $input['password'];


        return response('How about implementing loginUser as a get method ?');
    }
    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session.
     *
     *
     * @return Http response
     */
    public function logoutUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing logoutUser as a get method ?');
    }
    /**
     * Operation deleteUser
     *
     * Delete user.
     *
     * @param string $username The name that needs to be deleted (required)
     *
     * @return Http response
     */
    public function deleteUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteUser as a delete method ?');
    }
    /**
     * Operation getUserByName
     *
     * Get user by user name.
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     *
     * @return Http response
     */
    public function getUserByName($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getUserByName as a get method ?');
    }
    /**
     * Operation updateUser
     *
     * Update user.
     *
     * @param string $username name that need to be deleted (required)
     *
     * @return Http response
     */
    public function updateUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateUser as a put method ?');
    }
}
