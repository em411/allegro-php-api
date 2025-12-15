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

class RefundDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The payment refund identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Payment affected by refund operation.
     *
     * @var RefundPayment|null
     */
    protected $payment;
    /**
     * Order affected by refund operation.
     *
     * @var RefundOrder|null
     */
    protected $order;
    /**
     * Reason for a payment refund.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * Current status of payment refund.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Total amount for payment refund.
     *
     * @var RefundTotalValue|null
     */
    protected $totalValue;
    /**
     * List of order's line items which can be refunded.
     *
     * @var list<RefundLineItem>|null
     */
    protected $lineItems;
    /**
     * List of refundable deposits for the order's line items.
     *
     * @var list<RefundLineItemDeposit>|null
     */
    protected $deposits;
    /**
     * Payment refund for delivery.
     *
     * @var RefundDetailsDelivery|null
     */
    protected $delivery;
    /**
     * Payment refund for overpaid.
     *
     * @var RefundDetailsOverpaid|null
     */
    protected $overpaid;
    /**
     * List of surcharges for payment which can be refunded.
     *
     * @var list<PaymentsSurcharge>|null
     */
    protected $surcharges;
    /**
     * Payment refund for additional services.
     *
     * @var RefundDetailsAdditionalServices|null
     */
    protected $additionalServices;
    /**
     * Sellers optional justification for refund.
     *
     * @var string|null
     */
    protected $sellerComment;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The payment refund identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The payment refund identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Payment affected by refund operation.
     */
    public function getPayment(): ?RefundPayment
    {
        return $this->payment;
    }

    /**
     * Payment affected by refund operation.
     */
    public function setPayment(?RefundPayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;

        return $this;
    }

    /**
     * Order affected by refund operation.
     */
    public function getOrder(): ?RefundOrder
    {
        return $this->order;
    }

    /**
     * Order affected by refund operation.
     */
    public function setOrder(?RefundOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Reason for a payment refund.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Reason for a payment refund.
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * Current status of payment refund.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Current status of payment refund.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time when the refund was created provided in ISO 8601 format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Total amount for payment refund.
     */
    public function getTotalValue(): ?RefundTotalValue
    {
        return $this->totalValue;
    }

    /**
     * Total amount for payment refund.
     */
    public function setTotalValue(?RefundTotalValue $totalValue): self
    {
        $this->initialized['totalValue'] = true;
        $this->totalValue = $totalValue;

        return $this;
    }

    /**
     * List of order's line items which can be refunded.
     *
     * @return list<RefundLineItem>|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * List of order's line items which can be refunded.
     *
     * @param list<RefundLineItem>|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * List of refundable deposits for the order's line items.
     *
     * @return list<RefundLineItemDeposit>|null
     */
    public function getDeposits(): ?array
    {
        return $this->deposits;
    }

    /**
     * List of refundable deposits for the order's line items.
     *
     * @param list<RefundLineItemDeposit>|null $deposits
     */
    public function setDeposits(?array $deposits): self
    {
        $this->initialized['deposits'] = true;
        $this->deposits = $deposits;

        return $this;
    }

    /**
     * Payment refund for delivery.
     */
    public function getDelivery(): ?RefundDetailsDelivery
    {
        return $this->delivery;
    }

    /**
     * Payment refund for delivery.
     */
    public function setDelivery(?RefundDetailsDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Payment refund for overpaid.
     */
    public function getOverpaid(): ?RefundDetailsOverpaid
    {
        return $this->overpaid;
    }

    /**
     * Payment refund for overpaid.
     */
    public function setOverpaid(?RefundDetailsOverpaid $overpaid): self
    {
        $this->initialized['overpaid'] = true;
        $this->overpaid = $overpaid;

        return $this;
    }

    /**
     * List of surcharges for payment which can be refunded.
     *
     * @return list<PaymentsSurcharge>|null
     */
    public function getSurcharges(): ?array
    {
        return $this->surcharges;
    }

    /**
     * List of surcharges for payment which can be refunded.
     *
     * @param list<PaymentsSurcharge>|null $surcharges
     */
    public function setSurcharges(?array $surcharges): self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;

        return $this;
    }

    /**
     * Payment refund for additional services.
     */
    public function getAdditionalServices(): ?RefundDetailsAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * Payment refund for additional services.
     */
    public function setAdditionalServices(?RefundDetailsAdditionalServices $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * Sellers optional justification for refund.
     */
    public function getSellerComment(): ?string
    {
        return $this->sellerComment;
    }

    /**
     * Sellers optional justification for refund.
     */
    public function setSellerComment(?string $sellerComment): self
    {
        $this->initialized['sellerComment'] = true;
        $this->sellerComment = $sellerComment;

        return $this;
    }
}
