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

class BundleDiscountDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BundleMarketplaceDTO|null
     */
    protected $marketplace;
    /**
     * Discount value.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplace(): ?BundleMarketplaceDTO
    {
        return $this->marketplace;
    }

    public function setMarketplace(?BundleMarketplaceDTO $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Discount value.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Discount value.
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Discount currency as a 3-letter code in accordance with <a href="https://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217</a> standard. Has to be in base currency of specified marketplace.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
