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

class OrderEventData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller identifier.
     *
     * @var SellerReference|null
     */
    protected $seller;
    /**
     * Buyer data.
     *
     * @var BuyerReference|null
     */
    protected $buyer;
    /**
     * @var list<OrderLineItem>|null
     */
    protected $lineItems;
    /**
     * @var CheckoutFormReference|null
     */
    protected $checkoutForm;
    /**
     * @var OrderMarketplace|null
     */
    protected $marketplace;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller identifier.
     */
    public function getSeller(): ?SellerReference
    {
        return $this->seller;
    }

    /**
     * Seller identifier.
     */
    public function setSeller(?SellerReference $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }

    /**
     * Buyer data.
     */
    public function getBuyer(): ?BuyerReference
    {
        return $this->buyer;
    }

    /**
     * Buyer data.
     */
    public function setBuyer(?BuyerReference $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * @return list<OrderLineItem>|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * @param list<OrderLineItem>|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    public function getCheckoutForm(): ?CheckoutFormReference
    {
        return $this->checkoutForm;
    }

    public function setCheckoutForm(?CheckoutFormReference $checkoutForm): self
    {
        $this->initialized['checkoutForm'] = true;
        $this->checkoutForm = $checkoutForm;

        return $this;
    }

    public function getMarketplace(): ?OrderMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?OrderMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }
}
