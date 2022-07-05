<?php

/**
 * Resource
 *
 * PHP version 7.1
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\Interfaces\ModelInterface;

/**
 * Resource
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class Resource implements ModelInterface
{
    private const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "id" : {
      "type" : "string"
    }
  }
}
SCHEMA;

    /** @var string $id */
    private $id;

    /**
     * Returns model schema.
     *
     * @param bool $assoc When TRUE, returned objects will be converted into associative arrays. Default FALSE.
     *
     * @return array
     */
    public static function getOpenApiSchema($assoc = false)
    {
        return json_decode(static::MODEL_SCHEMA, $assoc);
    }
}
