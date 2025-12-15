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

class FulfillmentOrderParcelItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product identifier.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * Number of items placed in a parcel.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * List of serial numbers of included items.
     *
     * @var list<string>|null
     */
    protected $serialNumbers;
    /**
     * Expiration date of all items associated by quantity.
     *
     * @var \DateTime|null
     */
    protected $expirationDate;
    /**
     * Offer identifier.
     *
     * @var string|null
     */
    protected $offerId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product identifier.
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Product identifier.
     */
    public function setProductId(?string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;

        return $this;
    }

    /**
     * Number of items placed in a parcel.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Number of items placed in a parcel.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * List of serial numbers of included items.
     *
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }

    /**
     * List of serial numbers of included items.
     *
     * @param list<string>|null $serialNumbers
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    /**
     * Expiration date of all items associated by quantity.
     */
    public function getExpirationDate(): ?\DateTime
    {
        return $this->expirationDate;
    }

    /**
     * Expiration date of all items associated by quantity.
     */
    public function setExpirationDate(?\DateTime $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Offer identifier.
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * Offer identifier.
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }
}
