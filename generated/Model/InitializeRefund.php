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

class InitializeRefund extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * Command UUID. If empty, idempotency will not be supported.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Reason for a payment refund.
     *
     * @var string|null
     */
    protected $reason;
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
     * @var InitializeRefundDelivery|null
     */
    protected $delivery;
    /**
     * Payment refund for overpaid.
     *
     * @var InitializeRefundOverpaid|null
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
     * @var InitializeRefundAdditionalServices|null
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
     * Command UUID. If empty, idempotency will not be supported.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Command UUID. If empty, idempotency will not be supported.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

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
    public function getDelivery(): ?InitializeRefundDelivery
    {
        return $this->delivery;
    }

    /**
     * Payment refund for delivery.
     */
    public function setDelivery(?InitializeRefundDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Payment refund for overpaid.
     */
    public function getOverpaid(): ?InitializeRefundOverpaid
    {
        return $this->overpaid;
    }

    /**
     * Payment refund for overpaid.
     */
    public function setOverpaid(?InitializeRefundOverpaid $overpaid): self
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
    public function getAdditionalServices(): ?InitializeRefundAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * Payment refund for additional services.
     */
    public function setAdditionalServices(?InitializeRefundAdditionalServices $additionalServices): self
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
