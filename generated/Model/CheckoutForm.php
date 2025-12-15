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

class CheckoutForm extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Checkout form id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Message from buyer to seller.
     *
     * @var string|null
     */
    protected $messageToSeller;
    /**
     * Buyer data.
     *
     * @var CheckoutFormBuyerReference|null
     */
    protected $buyer;
    /**
     * @var CheckoutFormPaymentReference|null
     */
    protected $payment;
    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     *
     * @var mixed|null
     */
    protected $status;
    /**
     * @var CheckoutFormFulfillment|null
     */
    protected $fulfillment;
    /**
     * @var CheckoutFormDeliveryReference|null
     */
    protected $delivery;
    /**
     * @var CheckoutFormInvoiceInfo|null
     */
    protected $invoice;
    /**
     * @var list<CheckoutFormLineItem>|null
     */
    protected $lineItems;
    /**
     * @var list<CheckoutFormPaymentReference>|null
     */
    protected $surcharges;
    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @deprecated
     *
     * @var list<CheckoutFormDiscount>|null
     */
    protected $discounts;
    /**
     * @var CheckoutFormNoteReference|null
     */
    protected $note;
    /**
     * @var CheckoutFormMarketplace|null
     */
    protected $marketplace;
    /**
     * @var CheckoutFormSummary|null
     */
    protected $summary;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Checkout form revision.
     *
     * @var string|null
     */
    protected $revision;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Checkout form id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Checkout form id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Message from buyer to seller.
     */
    public function getMessageToSeller(): ?string
    {
        return $this->messageToSeller;
    }

    /**
     * Message from buyer to seller.
     */
    public function setMessageToSeller(?string $messageToSeller): self
    {
        $this->initialized['messageToSeller'] = true;
        $this->messageToSeller = $messageToSeller;

        return $this;
    }

    /**
     * Buyer data.
     */
    public function getBuyer(): ?CheckoutFormBuyerReference
    {
        return $this->buyer;
    }

    /**
     * Buyer data.
     */
    public function setBuyer(?CheckoutFormBuyerReference $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    public function getPayment(): ?CheckoutFormPaymentReference
    {
        return $this->payment;
    }

    public function setPayment(?CheckoutFormPaymentReference $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;

        return $this;
    }

    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Describes status of the form delivery and purchase options based on payment and purchase status. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `CANCELLED` - purchase cancelled by buyer.
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getFulfillment(): ?CheckoutFormFulfillment
    {
        return $this->fulfillment;
    }

    public function setFulfillment(?CheckoutFormFulfillment $fulfillment): self
    {
        $this->initialized['fulfillment'] = true;
        $this->fulfillment = $fulfillment;

        return $this;
    }

    public function getDelivery(): ?CheckoutFormDeliveryReference
    {
        return $this->delivery;
    }

    public function setDelivery(?CheckoutFormDeliveryReference $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    public function getInvoice(): ?CheckoutFormInvoiceInfo
    {
        return $this->invoice;
    }

    public function setInvoice(?CheckoutFormInvoiceInfo $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return list<CheckoutFormLineItem>|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * @param list<CheckoutFormLineItem>|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return list<CheckoutFormPaymentReference>|null
     */
    public function getSurcharges(): ?array
    {
        return $this->surcharges;
    }

    /**
     * @param list<CheckoutFormPaymentReference>|null $surcharges
     */
    public function setSurcharges(?array $surcharges): self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;

        return $this;
    }

    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @deprecated
     *
     * @return list<CheckoutFormDiscount>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Deprecated. This field is deprecated in favor of `lineItems[].discounts` and will be removed in the future.
     *
     * @param list<CheckoutFormDiscount>|null $discounts
     *
     * @deprecated
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    public function getNote(): ?CheckoutFormNoteReference
    {
        return $this->note;
    }

    public function setNote(?CheckoutFormNoteReference $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    public function getMarketplace(): ?CheckoutFormMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?CheckoutFormMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getSummary(): ?CheckoutFormSummary
    {
        return $this->summary;
    }

    public function setSummary(?CheckoutFormSummary $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;

        return $this;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Checkout form revision.
     */
    public function getRevision(): ?string
    {
        return $this->revision;
    }

    /**
     * Checkout form revision.
     */
    public function setRevision(?string $revision): self
    {
        $this->initialized['revision'] = true;
        $this->revision = $revision;

        return $this;
    }
}
