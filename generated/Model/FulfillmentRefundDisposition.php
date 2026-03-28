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

class FulfillmentRefundDisposition extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the refund disposition. - `RETURN` - buyer return, - `BOUNCE` - operational return.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var FulfillmentRefundDispositionRefund|null
     */
    protected $refund;
    /**
     * Status describing whether the item returns to sellable stock. - `SELLABLE` - item returns to sellable stock, - `NON_SELLABLE` - item designated for removal process or disposal, - `MISSING` - expected item was not found in parcel, - `ITEM_MISMATCH` - same product but different serial numbers.
     *
     * @var string|null
     */
    protected $stockStatus;
    /**
     * Verification status based on quality inspection in warehouse. Sample values include `DAMAGED`, `EXPIRED`, `FULL_DAMAGE`, `ITEM_MISSING`, `PARTIAL_DAMAGE`, `RECEIVED`, `SELLABLE` and may change without prior notification.
     *
     * @var string|null
     */
    protected $verificationStatus;
    /**
     * Side accountable for item non-sellability. - `WAREHOUSE` - `BUYER` - `NOT_APPLICABLE`.
     *
     * @var string|null
     */
    protected $accountableForNonSellability;
    /**
     * Order identifier.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * Offer identifier.
     *
     * @var string|null
     */
    protected $offerId;
    /**
     * @var FulfillmentRefundDispositionProduct|null
     */
    protected $product;
    /**
     * @var FulfillmentRefundDispositionBuyer|null
     */
    protected $buyer;
    /**
     * Disposition creation date.
     *
     * @var \DateTime|null
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the refund disposition. - `RETURN` - buyer return, - `BOUNCE` - operational return.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the refund disposition. - `RETURN` - buyer return, - `BOUNCE` - operational return.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getRefund(): ?FulfillmentRefundDispositionRefund
    {
        return $this->refund;
    }

    public function setRefund(?FulfillmentRefundDispositionRefund $refund): self
    {
        $this->initialized['refund'] = true;
        $this->refund = $refund;

        return $this;
    }

    /**
     * Status describing whether the item returns to sellable stock. - `SELLABLE` - item returns to sellable stock, - `NON_SELLABLE` - item designated for removal process or disposal, - `MISSING` - expected item was not found in parcel, - `ITEM_MISMATCH` - same product but different serial numbers.
     */
    public function getStockStatus(): ?string
    {
        return $this->stockStatus;
    }

    /**
     * Status describing whether the item returns to sellable stock. - `SELLABLE` - item returns to sellable stock, - `NON_SELLABLE` - item designated for removal process or disposal, - `MISSING` - expected item was not found in parcel, - `ITEM_MISMATCH` - same product but different serial numbers.
     */
    public function setStockStatus(?string $stockStatus): self
    {
        $this->initialized['stockStatus'] = true;
        $this->stockStatus = $stockStatus;

        return $this;
    }

    /**
     * Verification status based on quality inspection in warehouse. Sample values include `DAMAGED`, `EXPIRED`, `FULL_DAMAGE`, `ITEM_MISSING`, `PARTIAL_DAMAGE`, `RECEIVED`, `SELLABLE` and may change without prior notification.
     */
    public function getVerificationStatus(): ?string
    {
        return $this->verificationStatus;
    }

    /**
     * Verification status based on quality inspection in warehouse. Sample values include `DAMAGED`, `EXPIRED`, `FULL_DAMAGE`, `ITEM_MISSING`, `PARTIAL_DAMAGE`, `RECEIVED`, `SELLABLE` and may change without prior notification.
     */
    public function setVerificationStatus(?string $verificationStatus): self
    {
        $this->initialized['verificationStatus'] = true;
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * Side accountable for item non-sellability. - `WAREHOUSE` - `BUYER` - `NOT_APPLICABLE`.
     */
    public function getAccountableForNonSellability(): ?string
    {
        return $this->accountableForNonSellability;
    }

    /**
     * Side accountable for item non-sellability. - `WAREHOUSE` - `BUYER` - `NOT_APPLICABLE`.
     */
    public function setAccountableForNonSellability(?string $accountableForNonSellability): self
    {
        $this->initialized['accountableForNonSellability'] = true;
        $this->accountableForNonSellability = $accountableForNonSellability;

        return $this;
    }

    /**
     * Order identifier.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Order identifier.
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

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

    public function getProduct(): ?FulfillmentRefundDispositionProduct
    {
        return $this->product;
    }

    public function setProduct(?FulfillmentRefundDispositionProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    public function getBuyer(): ?FulfillmentRefundDispositionBuyer
    {
        return $this->buyer;
    }

    public function setBuyer(?FulfillmentRefundDispositionBuyer $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Disposition creation date.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Disposition creation date.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }
}
