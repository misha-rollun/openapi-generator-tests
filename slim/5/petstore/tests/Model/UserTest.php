<?php

/**
 * Swagger Petstore - OpenAPI 3.0
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\User;

/**
 * UserTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\User
 */
class UserTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "User"
     */
    public function testUser()
    {
        $testUser = new User();
        $namespacedClassname = User::getModelsNamespace() . '\\User';
        $this->assertSame('\\' . User::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        $this->markTestIncomplete(
            'Test of "id" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "username"
     */
    public function testPropertyUsername()
    {
        $this->markTestIncomplete(
            'Test of "username" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "firstName"
     */
    public function testPropertyFirstName()
    {
        $this->markTestIncomplete(
            'Test of "firstName" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "lastName"
     */
    public function testPropertyLastName()
    {
        $this->markTestIncomplete(
            'Test of "lastName" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
        $this->markTestIncomplete(
            'Test of "email" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "password"
     */
    public function testPropertyPassword()
    {
        $this->markTestIncomplete(
            'Test of "password" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "phone"
     */
    public function testPropertyPhone()
    {
        $this->markTestIncomplete(
            'Test of "phone" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "userStatus"
     */
    public function testPropertyUserStatus()
    {
        $this->markTestIncomplete(
            'Test of "userStatus" property in "User" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = User::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}