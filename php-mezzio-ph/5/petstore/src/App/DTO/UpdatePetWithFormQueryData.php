<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * Query parameters for updatePetWithForm
 */
class UpdatePetWithFormQueryData
{
    /**
     * Name of pet that needs to be updated
     * @DTA\Data(field="name", nullable=true)
     * @DTA\Strategy(name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $name;

    /**
     * Status of pet that needs to be updated
     * @DTA\Data(field="status", nullable=true)
     * @DTA\Strategy(name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $status;

}
