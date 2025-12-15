<?php

declare(strict_types=1);

/*
 * This file is part of em411's Allegro PHP API project.
 *
 * (c) em411 <contact@em411.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Em411\Allegro\Api\Model;

class ProductOfferBase extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
     *  - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
     *  - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
     *
     * @var string|null
     */
    protected $idType;
    /**
     * List of product parameters.
     *
     * @var list<ParameterProductOfferRequest>|null
     */
    protected $parameters;
    /**
     * List of product images.
     *
     * @var list<string>|null
     */
    protected $images;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
     *  - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
     *  - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }

    /**
     * Type of id. This field is optional. It helps in finding products more accurately. If an idType is not set, a given id is understood as a product's id.
     * - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
     * - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
     */
    public function setIdType(?string $idType): self
    {
        $this->initialized['idType'] = true;
        $this->idType = $idType;

        return $this;
    }

    /**
     * List of product parameters.
     *
     * @return list<ParameterProductOfferRequest>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of product parameters.
     *
     * @param list<ParameterProductOfferRequest>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * List of product images.
     *
     * @return list<string>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of product images.
     *
     * @param list<string>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}
