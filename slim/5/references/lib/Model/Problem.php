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
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\BaseModel;

/**
 * Problem
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class Problem extends BaseModel
{
    /**
     * @var string Models namespace.
     * Can be required for data deserialization when model contains referenced schemas.
     */
    protected const MODELS_NAMESPACE = '\OpenAPIServer\Model';

    /**
     * @var string Constant with OAS schema of current class.
     * Should be overwritten by inherited class.
     */
    protected const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "type" : {
      "type" : "string",
      "description" : "An absolute URI that identifies the problem type",
      "format" : "uri",
      "default" : "about:blank"
    },
    "href" : {
      "type" : "string",
      "description" : "An absolute URI that, when dereferenced, provides human-readable documentation for the problem type (e.g. using HTML).",
      "format" : "uri"
    },
    "title" : {
      "type" : "string",
      "description" : "A short summary of the problem type. Written in English and readable for engineers (usually not suited for non technical stakeholders and not localized).",
      "example" : "Service Unavailable"
    },
    "status" : {
      "maximum" : 600,
      "exclusiveMaximum" : true,
      "minimum" : 400,
      "type" : "integer",
      "description" : "The HTTP status code generated by the origin server for this occurrence of the problem.",
      "format" : "int32",
      "example" : 503
    },
    "detail" : {
      "type" : "string",
      "description" : "A human-readable explanation specific to this occurrence of the problem"
    },
    "instance" : {
      "type" : "string",
      "description" : "An absolute URI that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced.",
      "format" : "uri"
    }
  },
  "description" : "A Problem Details object (RFC 7807)",
  "example" : {
    "type" : "urn:problem-type:belgif:payloadTooLarge",
    "href" : "https://www.belgif.be/specification/rest/api-guide/problems/payloadTooLarge.html",
    "title" : "Payload Too Large",
    "status" : 413,
    "detail" : "Request message must not be larger than 10 MB",
    "instance" : "urn:uuid:123e4567-e89b-12d3-a456-426614174000",
    "limit" : 10485760
  }
}
SCHEMA;
}
