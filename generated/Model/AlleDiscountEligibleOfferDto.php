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

class AlleDiscountEligibleOfferDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the offer.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer product data.
     *
     * @var AlleDiscountEligibleOfferDtoProduct|null
     */
    protected $product;
    /**
     * Offer base price.
     *
     * @var AlleDiscountEligibleOfferDtoBasePrice|null
     */
    protected $basePrice;
    /**
     * AlleDiscount specific data.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscount|null
     */
    protected $alleDiscount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the offer.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The id of the offer.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer product data.
     */
    public function getProduct(): ?AlleDiscountEligibleOfferDtoProduct
    {
        return $this->product;
    }

    /**
     * Offer product data.
     */
    public function setProduct(?AlleDiscountEligibleOfferDtoProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * Offer base price.
     */
    public function getBasePrice(): ?AlleDiscountEligibleOfferDtoBasePrice
    {
        return $this->basePrice;
    }

    /**
     * Offer base price.
     */
    public function setBasePrice(?AlleDiscountEligibleOfferDtoBasePrice $basePrice): self
    {
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * AlleDiscount specific data.
     */
    public function getAlleDiscount(): ?AlleDiscountEligibleOfferDtoAlleDiscount
    {
        return $this->alleDiscount;
    }

    /**
     * AlleDiscount specific data.
     */
    public function setAlleDiscount(?AlleDiscountEligibleOfferDtoAlleDiscount $alleDiscount): self
    {
        $this->initialized['alleDiscount'] = true;
        $this->alleDiscount = $alleDiscount;

        return $this;
    }
}
