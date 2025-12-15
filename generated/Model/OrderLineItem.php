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

class OrderLineItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Order item identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer identifier.
     *
     * @var OrderLineItemOfferReference|null
     */
    protected $offer;
    /**
     * quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $originalPrice;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $price;
    /**
     * ISO date when offer was bought.
     *
     * @var \DateTime|null
     */
    protected $boughtAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Order item identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Order item identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer identifier.
     */
    public function getOffer(): ?OrderLineItemOfferReference
    {
        return $this->offer;
    }

    /**
     * Offer identifier.
     */
    public function setOffer(?OrderLineItemOfferReference $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * quantity.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * quantity.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The price data.
     */
    public function getOriginalPrice(): ?Price
    {
        return $this->originalPrice;
    }

    /**
     * The price data.
     */
    public function setOriginalPrice(?Price $originalPrice): self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * The price data.
     */
    public function setPrice(?Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * ISO date when offer was bought.
     */
    public function getBoughtAt(): ?\DateTime
    {
        return $this->boughtAt;
    }

    /**
     * ISO date when offer was bought.
     */
    public function setBoughtAt(?\DateTime $boughtAt): self
    {
        $this->initialized['boughtAt'] = true;
        $this->boughtAt = $boughtAt;

        return $this;
    }
}
