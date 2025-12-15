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

class MarketplaceItemCurrencies extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var MarketplaceItemCurrency|null
     */
    protected $base;
    /**
     * List of other currencies available for that marketplace.
     *
     * @var list<MarketplaceItemCurrency>|null
     */
    protected $additional;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBase(): ?MarketplaceItemCurrency
    {
        return $this->base;
    }

    public function setBase(?MarketplaceItemCurrency $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    /**
     * List of other currencies available for that marketplace.
     *
     * @return list<MarketplaceItemCurrency>|null
     */
    public function getAdditional(): ?array
    {
        return $this->additional;
    }

    /**
     * List of other currencies available for that marketplace.
     *
     * @param list<MarketplaceItemCurrency>|null $additional
     */
    public function setAdditional(?array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;

        return $this;
    }
}
