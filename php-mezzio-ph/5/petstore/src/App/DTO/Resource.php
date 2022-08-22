<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class Resource
{
    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field1", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field1;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field2", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field2;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field3", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field3;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field4", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field4;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field5", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field5;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field6", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field6;

    /**
     * Note: this is my very very very  long string
     * @DTA\Data(field="field7", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $field7;

}
