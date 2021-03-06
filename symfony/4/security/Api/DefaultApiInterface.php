<?php
/**
 * DefaultApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Security
 *
 * Security
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\ResourceListResult;

/**
 * DefaultApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface DefaultApiInterface
{

    /**
     * Sets authentication method BasicAuth
     *
     * @param string $value Value of the BasicAuth authentication method.
     *
     * @return void
     */
    public function setBasicAuth($value);

    /**
     * Sets authentication method BearerAuth
     *
     * @param string $value Value of the BearerAuth authentication method.
     *
     * @return void
     */
    public function setBearerAuth($value);

    /**
     * Sets authentication method BasicAuth
     *
     * @param string $value Value of the BasicAuth authentication method.
     *
     * @return void
     */
    public function setBasicAuth($value);

    /**
     * Sets authentication method BearerAuth
     *
     * @param string $value Value of the BearerAuth authentication method.
     *
     * @return void
     */
    public function setBearerAuth($value);

    /**
     * Sets authentication method OAuth2
     *
     * @param string $value Value of the OAuth2 authentication method.
     *
     * @return void
     */
    public function setOAuth2($value);

    /**
     * Operation basicGet
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\ResourceListResult
     *
     */
    public function basicGet(&$responseCode, array &$responseHeaders);

    /**
     * Operation bearerGet
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\ResourceListResult
     *
     */
    public function bearerGet(&$responseCode, array &$responseHeaders);

    /**
     * Operation multipleGet
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\ResourceListResult
     *
     */
    public function multipleGet(&$responseCode, array &$responseHeaders);

    /**
     * Operation oauth2Get
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\ResourceListResult
     *
     */
    public function oauth2Get(&$responseCode, array &$responseHeaders);
}
