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

class StockProductItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The product.
     *
     * @var StockProduct|null
     */
    protected $product;
    /**
     * Represents stock quantity.
     *
     * @var StockQuantity|null
     */
    protected $quantity;
    /**
     * Represents selling stats of given product in merchant's stock.
     *
     * @var StockSellingStats|null
     */
    protected $sellingStats;
    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     *
     * @var ReserveInfo|null
     */
    protected $reserve;
    /**
     * Information about storage fee for a given product in merchant's stock.
     *
     * @var StockStorageFee|null
     */
    protected $storageFee;
    /**
     * Identifier of the offer currently attached to the product.
     *
     * @var string|null
     */
    protected $offerId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The product.
     */
    public function getProduct(): ?StockProduct
    {
        return $this->product;
    }

    /**
     * The product.
     */
    public function setProduct(?StockProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * Represents stock quantity.
     */
    public function getQuantity(): ?StockQuantity
    {
        return $this->quantity;
    }

    /**
     * Represents stock quantity.
     */
    public function setQuantity(?StockQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Represents selling stats of given product in merchant's stock.
     */
    public function getSellingStats(): ?StockSellingStats
    {
        return $this->sellingStats;
    }

    /**
     * Represents selling stats of given product in merchant's stock.
     */
    public function setSellingStats(?StockSellingStats $sellingStats): self
    {
        $this->initialized['sellingStats'] = true;
        $this->sellingStats = $sellingStats;

        return $this;
    }

    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     */
    public function getReserve(): ?ReserveInfo
    {
        return $this->reserve;
    }

    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     */
    public function setReserve(?ReserveInfo $reserve): self
    {
        $this->initialized['reserve'] = true;
        $this->reserve = $reserve;

        return $this;
    }

    /**
     * Information about storage fee for a given product in merchant's stock.
     */
    public function getStorageFee(): ?StockStorageFee
    {
        return $this->storageFee;
    }

    /**
     * Information about storage fee for a given product in merchant's stock.
     */
    public function setStorageFee(?StockStorageFee $storageFee): self
    {
        $this->initialized['storageFee'] = true;
        $this->storageFee = $storageFee;

        return $this;
    }

    /**
     * Identifier of the offer currently attached to the product.
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * Identifier of the offer currently attached to the product.
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }
}
