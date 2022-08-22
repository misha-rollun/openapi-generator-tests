<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * Query parameters for findPetsByStatus
 */
class FindPetsByStatusQueryData
{
    /**
     * Status values that need to be considered for filter
     * @DTA\Data(field="status", nullable=true)
     * @DTA\Strategy(name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $status;

}
