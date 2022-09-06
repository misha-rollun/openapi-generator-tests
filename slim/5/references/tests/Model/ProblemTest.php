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
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\Problem;

/**
 * ProblemTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\Problem
 */
class ProblemTest extends TestCase
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
     * Test "Problem"
     */
    public function testProblem()
    {
        $testProblem = new Problem();
        $namespacedClassname = Problem::getModelsNamespace() . '\\Problem';
        $this->assertSame('\\' . Problem::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        $this->markTestIncomplete(
            'Test of "type" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "href"
     */
    public function testPropertyHref()
    {
        $this->markTestIncomplete(
            'Test of "href" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
        $this->markTestIncomplete(
            'Test of "title" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->markTestIncomplete(
            'Test of "status" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "detail"
     */
    public function testPropertyDetail()
    {
        $this->markTestIncomplete(
            'Test of "detail" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "instance"
     */
    public function testPropertyInstance()
    {
        $this->markTestIncomplete(
            'Test of "instance" property in "Problem" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = Problem::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}