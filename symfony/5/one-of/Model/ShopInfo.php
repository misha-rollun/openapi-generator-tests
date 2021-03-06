<?php
/**
 * ShopInfo
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OneOf
 *
 * OneOf
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

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the ShopInfo model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ShopInfo 
{
        /**
     * @var string|null
     * @SerializedName("tags")
     * @Assert\Choice({ "food", "spices" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $tags;

    /**
     * @var string[]|null
     * @SerializedName("genres")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $genres;

    /**
     * @var string[]|null
     * @SerializedName("vendors")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $vendors;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->tags = isset($data['tags']) ? $data['tags'] : null;
        $this->genres = isset($data['genres']) ? $data['genres'] : null;
        $this->vendors = isset($data['vendors']) ? $data['vendors'] : null;
    }

    /**
     * Gets tags.
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets tags.
     *
     * @param string|null $tags
     *
     * @return $this
     */
    public function setTags($tags = null)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Gets genres.
     *
     * @return string[]|null
     */
    public function getGenres(): ?array
    {
        return $this->genres;
    }

    /**
     * Sets genres.
     *
     * @param string[]|null $genres
     *
     * @return $this
     */
    public function setGenres(array $genres = null)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Gets vendors.
     *
     * @return string[]|null
     */
    public function getVendors(): ?array
    {
        return $this->vendors;
    }

    /**
     * Sets vendors.
     *
     * @param string[]|null $vendors
     *
     * @return $this
     */
    public function setVendors(array $vendors = null)
    {
        $this->vendors = $vendors;

        return $this;
    }
}


