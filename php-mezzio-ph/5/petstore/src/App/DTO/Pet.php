<?php
declare(strict_types=1);

namespace App\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class Pet
{
    /**
     * @DTA\Data(field="id", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $id;

    /**
     * @DTA\Data(field="name")
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $name;

    /**
     * @DTA\Data(field="category", nullable=true)
     * @DTA\Strategy(name="Object", options={"type":\App\DTO\Category::class})
     * @DTA\Validator(name="TypeCompliant", options={"type":\App\DTO\Category::class})
     * @var \App\DTO\Category|null
     */
    public $category;

    /**
     * @DTA\Data(field="photoUrls")
     * @DTA\Strategy(name="Object", options={"type":\App\DTO\Collection35::class})
     * @DTA\Validator(name="TypeCompliant", options={"type":\App\DTO\Collection35::class})
     * @var \App\DTO\Collection35|null
     */
    public $photo_urls;

    /**
     * @DTA\Data(field="tags", nullable=true)
     * @DTA\Strategy(name="Object", options={"type":\App\DTO\Collection36::class})
     * @DTA\Validator(name="TypeCompliant", options={"type":\App\DTO\Collection36::class})
     * @var \App\DTO\Collection36|null
     */
    public $tags;

    /**
     * pet status in the store
     * @DTA\Data(field="status", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $status;

}
