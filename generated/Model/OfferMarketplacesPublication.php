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

class OfferMarketplacesPublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer marketplaces visibility information.
     *
     * @var MarketplacesVisibility|null
     */
    protected $marketplaces;
    /**
     * List of marketplaces with updated visibility.
     *
     * @var list<string>|null
     */
    protected $updatedMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer marketplaces visibility information.
     */
    public function getMarketplaces(): ?MarketplacesVisibility
    {
        return $this->marketplaces;
    }

    /**
     * Offer marketplaces visibility information.
     */
    public function setMarketplaces(?MarketplacesVisibility $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }

    /**
     * List of marketplaces with updated visibility.
     *
     * @return list<string>|null
     */
    public function getUpdatedMarketplaces(): ?array
    {
        return $this->updatedMarketplaces;
    }

    /**
     * List of marketplaces with updated visibility.
     *
     * @param list<string>|null $updatedMarketplaces
     */
    public function setUpdatedMarketplaces(?array $updatedMarketplaces): self
    {
        $this->initialized['updatedMarketplaces'] = true;
        $this->updatedMarketplaces = $updatedMarketplaces;

        return $this;
    }
}
