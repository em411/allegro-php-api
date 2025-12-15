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

class CpsConversionOffer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the offer.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer name in the offer base language.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var CpsConversionOfferCategory|null
     */
    protected $category;
    /**
     * Unit price of the offer.
     *
     * @var CpsConversionOfferUnitPrice|null
     */
    protected $unitPrice;
    /**
     * Information about the seller.
     *
     * @var CpsConversionOfferSeller|null
     */
    protected $seller;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the offer.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the offer.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer name in the offer base language.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Offer name in the offer base language.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?CpsConversionOfferCategory
    {
        return $this->category;
    }

    public function setCategory(?CpsConversionOfferCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * Unit price of the offer.
     */
    public function getUnitPrice(): ?CpsConversionOfferUnitPrice
    {
        return $this->unitPrice;
    }

    /**
     * Unit price of the offer.
     */
    public function setUnitPrice(?CpsConversionOfferUnitPrice $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Information about the seller.
     */
    public function getSeller(): ?CpsConversionOfferSeller
    {
        return $this->seller;
    }

    /**
     * Information about the seller.
     */
    public function setSeller(?CpsConversionOfferSeller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }
}
