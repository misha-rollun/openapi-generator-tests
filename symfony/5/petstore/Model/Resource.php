<?php
/**
 * Resource
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Swagger Petstore - OpenAPI 3.0
 *
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 *
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Resource model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Resource 
{
        /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field1")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field1;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field2")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field2;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field3")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field3;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field4")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field4;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field5")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field5;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field6")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field6;

    /**
     * Note: this is my very very very  long string
     *
     * @var string|null
     * @SerializedName("field7")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $field7;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->field1 = isset($data['field1']) ? $data['field1'] : null;
        $this->field2 = isset($data['field2']) ? $data['field2'] : null;
        $this->field3 = isset($data['field3']) ? $data['field3'] : null;
        $this->field4 = isset($data['field4']) ? $data['field4'] : null;
        $this->field5 = isset($data['field5']) ? $data['field5'] : null;
        $this->field6 = isset($data['field6']) ? $data['field6'] : null;
        $this->field7 = isset($data['field7']) ? $data['field7'] : null;
    }

    /**
     * Gets field1.
     *
     * @return string|null
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Sets field1.
     *
     * @param string|null $field1  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField1($field1 = null)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Gets field2.
     *
     * @return string|null
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Sets field2.
     *
     * @param string|null $field2  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField2($field2 = null)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Gets field3.
     *
     * @return string|null
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Sets field3.
     *
     * @param string|null $field3  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField3($field3 = null)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Gets field4.
     *
     * @return string|null
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Sets field4.
     *
     * @param string|null $field4  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField4($field4 = null)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * Gets field5.
     *
     * @return string|null
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Sets field5.
     *
     * @param string|null $field5  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField5($field5 = null)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * Gets field6.
     *
     * @return string|null
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Sets field6.
     *
     * @param string|null $field6  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField6($field6 = null)
    {
        $this->field6 = $field6;

        return $this;
    }

    /**
     * Gets field7.
     *
     * @return string|null
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Sets field7.
     *
     * @param string|null $field7  Note: this is my very very very  long string
     *
     * @return $this
     */
    public function setField7($field7 = null)
    {
        $this->field7 = $field7;

        return $this;
    }
}

