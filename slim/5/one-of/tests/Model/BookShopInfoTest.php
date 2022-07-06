<?php

/**
 * OneOf
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * OneOf
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\BookShopInfo;

/**
 * BookShopInfoTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\BookShopInfo
 */
class BookShopInfoTest extends TestCase
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
     * Test "BookShopInfo"
     */
    public function testBookShopInfo()
    {
        $testBookShopInfo = new BookShopInfo();
        $namespacedClassname = BookShopInfo::getModelsNamespace() . '\\BookShopInfo';
        $this->assertSame('\\' . BookShopInfo::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "BookShopInfo" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {
        $this->markTestIncomplete(
            'Test of "tags" property in "BookShopInfo" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "genres"
     */
    public function testPropertyGenres()
    {
        $this->markTestIncomplete(
            'Test of "genres" property in "BookShopInfo" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = BookShopInfo::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}
