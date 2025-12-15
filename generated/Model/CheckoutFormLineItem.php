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

class CheckoutFormLineItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Line item identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer identifier.
     *
     * @var OfferReference|null
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
     * This is the deposit value charged for a given offer. If the offer consists of multiple products with different deposits, the value in this field is the sum of those deposits.
     *
     * @var LineItemDeposit|null
     */
    protected $deposit;
    /**
     * @var LineItemReconciliation|null
     */
    protected $reconciliation;
    /**
     * @var list<CheckoutFormAdditionalService>|null
     */
    protected $selectedAdditionalServices;
    /**
     * @var list<LineItemVoucher>|null
     */
    protected $vouchers;
    /**
     * @var CheckoutFormLineItemTax|null
     */
    protected $tax;
    /**
     * ISO date when offer was bought.
     *
     * @var \DateTime|null
     */
    protected $boughtAt;
    /**
     * @var list<LineItemDiscount>|null
     */
    protected $discounts;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Line item identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Line item identifier.
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
    public function getOffer(): ?OfferReference
    {
        return $this->offer;
    }

    /**
     * Offer identifier.
     */
    public function setOffer(?OfferReference $offer): self
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
     * This is the deposit value charged for a given offer. If the offer consists of multiple products with different deposits, the value in this field is the sum of those deposits.
     */
    public function getDeposit(): ?LineItemDeposit
    {
        return $this->deposit;
    }

    /**
     * This is the deposit value charged for a given offer. If the offer consists of multiple products with different deposits, the value in this field is the sum of those deposits.
     */
    public function setDeposit(?LineItemDeposit $deposit): self
    {
        $this->initialized['deposit'] = true;
        $this->deposit = $deposit;

        return $this;
    }

    public function getReconciliation(): ?LineItemReconciliation
    {
        return $this->reconciliation;
    }

    public function setReconciliation(?LineItemReconciliation $reconciliation): self
    {
        $this->initialized['reconciliation'] = true;
        $this->reconciliation = $reconciliation;

        return $this;
    }

    /**
     * @return list<CheckoutFormAdditionalService>|null
     */
    public function getSelectedAdditionalServices(): ?array
    {
        return $this->selectedAdditionalServices;
    }

    /**
     * @param list<CheckoutFormAdditionalService>|null $selectedAdditionalServices
     */
    public function setSelectedAdditionalServices(?array $selectedAdditionalServices): self
    {
        $this->initialized['selectedAdditionalServices'] = true;
        $this->selectedAdditionalServices = $selectedAdditionalServices;

        return $this;
    }

    /**
     * @return list<LineItemVoucher>|null
     */
    public function getVouchers(): ?array
    {
        return $this->vouchers;
    }

    /**
     * @param list<LineItemVoucher>|null $vouchers
     */
    public function setVouchers(?array $vouchers): self
    {
        $this->initialized['vouchers'] = true;
        $this->vouchers = $vouchers;

        return $this;
    }

    public function getTax(): ?CheckoutFormLineItemTax
    {
        return $this->tax;
    }

    public function setTax(?CheckoutFormLineItemTax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;

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

    /**
     * @return list<LineItemDiscount>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * @param list<LineItemDiscount>|null $discounts
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }
}
