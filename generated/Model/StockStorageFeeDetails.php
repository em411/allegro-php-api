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

class StockStorageFeeDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     *
     * @var float|null
     */
    protected $chargedItemsQuantity;
    /**
     * Total net amount of the charged fee.
     *
     * @var float|null
     */
    protected $amountNet;
    /**
     * Total gross amount of the charged fee.
     *
     * @var float|null
     */
    protected $amountGross;
    /**
     * Currency in which the fee was charged.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     */
    public function getChargedItemsQuantity(): ?float
    {
        return $this->chargedItemsQuantity;
    }

    /**
     * Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them.
     */
    public function setChargedItemsQuantity(?float $chargedItemsQuantity): self
    {
        $this->initialized['chargedItemsQuantity'] = true;
        $this->chargedItemsQuantity = $chargedItemsQuantity;

        return $this;
    }

    /**
     * Total net amount of the charged fee.
     */
    public function getAmountNet(): ?float
    {
        return $this->amountNet;
    }

    /**
     * Total net amount of the charged fee.
     */
    public function setAmountNet(?float $amountNet): self
    {
        $this->initialized['amountNet'] = true;
        $this->amountNet = $amountNet;

        return $this;
    }

    /**
     * Total gross amount of the charged fee.
     */
    public function getAmountGross(): ?float
    {
        return $this->amountGross;
    }

    /**
     * Total gross amount of the charged fee.
     */
    public function setAmountGross(?float $amountGross): self
    {
        $this->initialized['amountGross'] = true;
        $this->amountGross = $amountGross;

        return $this;
    }

    /**
     * Currency in which the fee was charged.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Currency in which the fee was charged.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
