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

class CustomerReturn extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Indicates if the return is handled by the One Fulfillment.
     *
     * @var bool|null
     */
    protected $isFulfillment;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * @var string|null
     */
    protected $orderId;
    /**
     * @var CustomerReturnBuyer|null
     */
    protected $buyer;
    /**
     * List of returned items.
     *
     * @var list<CustomerReturnItem>|null
     */
    protected $items;
    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     *
     * @var CustomerReturnRefund|null
     */
    protected $refund;
    /**
     * List of returned parcels.
     *
     * @var list<CustomerReturnReturnParcel>|null
     */
    protected $parcels;
    /**
     * @var CustomerReturnRejection|null
     */
    protected $rejection;
    /**
     * The marketplace ID where operation was made.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Current return timeline statuses. The allowed values are:
     *   * CREATED - The return has been declared,
     *   * DISPATCHED - The returned items have been dispatched,
     *   * IN_TRANSIT - The returned items are in transit,
     *   * DELIVERED - The returned items have been delivered,
     *   * FINISHED - The payment has been refunded, return process is finished,
     *   * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     *   * REJECTED - The return has been rejected,
     *   * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     *   * COMMISSION_REFUNDED - The sales commission was refunded,
     *   * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     *   * WAREHOUSE_VERIFICATION - The returned items are under verification.
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates if the return is handled by the One Fulfillment.
     */
    public function getIsFulfillment(): ?bool
    {
        return $this->isFulfillment;
    }

    /**
     * Indicates if the return is handled by the One Fulfillment.
     */
    public function setIsFulfillment(?bool $isFulfillment): self
    {
        $this->initialized['isFulfillment'] = true;
        $this->isFulfillment = $isFulfillment;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

        return $this;
    }

    public function getBuyer(): ?CustomerReturnBuyer
    {
        return $this->buyer;
    }

    public function setBuyer(?CustomerReturnBuyer $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * List of returned items.
     *
     * @return list<CustomerReturnItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of returned items.
     *
     * @param list<CustomerReturnItem>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     */
    public function getRefund(): ?CustomerReturnRefund
    {
        return $this->refund;
    }

    /**
     * This field is present in the case of cash on delivery, bank transfer, Allegro Pay, and Allegro Pay Business payment options.
     */
    public function setRefund(?CustomerReturnRefund $refund): self
    {
        $this->initialized['refund'] = true;
        $this->refund = $refund;

        return $this;
    }

    /**
     * List of returned parcels.
     *
     * @return list<CustomerReturnReturnParcel>|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * List of returned parcels.
     *
     * @param list<CustomerReturnReturnParcel>|null $parcels
     */
    public function setParcels(?array $parcels): self
    {
        $this->initialized['parcels'] = true;
        $this->parcels = $parcels;

        return $this;
    }

    public function getRejection(): ?CustomerReturnRejection
    {
        return $this->rejection;
    }

    public function setRejection(?CustomerReturnRejection $rejection): self
    {
        $this->initialized['rejection'] = true;
        $this->rejection = $rejection;

        return $this;
    }

    /**
     * The marketplace ID where operation was made.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The marketplace ID where operation was made.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Current return timeline statuses. The allowed values are:
     *   * CREATED - The return has been declared,
     *   * DISPATCHED - The returned items have been dispatched,
     *   * IN_TRANSIT - The returned items are in transit,
     *   * DELIVERED - The returned items have been delivered,
     *   * FINISHED - The payment has been refunded, return process is finished,
     *   * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     *   * REJECTED - The return has been rejected,
     *   * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     *   * COMMISSION_REFUNDED - The sales commission was refunded,
     *   * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     *   * WAREHOUSE_VERIFICATION - The returned items are under verification.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Current return timeline statuses. The allowed values are:
     * CREATED - The return has been declared,
     * DISPATCHED - The returned items have been dispatched,
     * IN_TRANSIT - The returned items are in transit,
     * DELIVERED - The returned items have been delivered,
     * FINISHED - The payment has been refunded, return process is finished,
     * FINISHED_APT - The payment has been refunded by Allegro Protect, return process is finished,
     * REJECTED - The return has been rejected,
     * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,
     * COMMISSION_REFUNDED - The sales commission was refunded,
     * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,
     * WAREHOUSE_VERIFICATION - The returned items are under verification.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
