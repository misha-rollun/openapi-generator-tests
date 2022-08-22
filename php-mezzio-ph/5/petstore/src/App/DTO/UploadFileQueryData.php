<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * Query parameters for uploadFile
 */
class UploadFileQueryData
{
    /**
     * Additional Metadata
     * @DTA\Data(field="additionalMetadata", nullable=true)
     * @DTA\Strategy(name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $additional_metadata;

}
