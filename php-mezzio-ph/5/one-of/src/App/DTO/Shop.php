<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class Shop
{
    /**
     * @DTA\Data(field="id", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $id;

    /**
     * @DTA\Data(field="info", nullable=true)
     * @DTA\Strategy(name="Object", options={"type":\App\DTO\ShopInfo::class})
     * @DTA\Validator(name="TypeCompliant", options={"type":\App\DTO\ShopInfo::class})
     * @var \App\DTO\ShopInfo|null
     */
    public $info;

}
