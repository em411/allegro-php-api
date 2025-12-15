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

class RefundClaimLineItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the purchase associated with the refund application.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Date when the purchase was made.
     *
     * @var \DateTime|null
     */
    protected $boughtAt;
    /**
     * Offer associated with the purchase.
     *
     * @var RefundClaimLineItemOffer|null
     */
    protected $offer;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the purchase associated with the refund application.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the purchase associated with the refund application.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Total quantity of product purchased by the buyer. Equal to or greater than quantity for which the seller filed the refund application.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Date when the purchase was made.
     */
    public function getBoughtAt(): ?\DateTime
    {
        return $this->boughtAt;
    }

    /**
     * Date when the purchase was made.
     */
    public function setBoughtAt(?\DateTime $boughtAt): self
    {
        $this->initialized['boughtAt'] = true;
        $this->boughtAt = $boughtAt;

        return $this;
    }

    /**
     * Offer associated with the purchase.
     */
    public function getOffer(): ?RefundClaimLineItemOffer
    {
        return $this->offer;
    }

    /**
     * Offer associated with the purchase.
     */
    public function setOffer(?RefundClaimLineItemOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }
}
