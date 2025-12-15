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

class OfferListingDtoV1PublicationMarketplaces extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The base marketplace of the offer.
     *
     * @var OfferListingDtoV1PublicationMarketplacesBase|null
     */
    protected $base;
    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @var list<MarketplaceReference>|null
     */
    protected $additional;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The base marketplace of the offer.
     */
    public function getBase(): ?OfferListingDtoV1PublicationMarketplacesBase
    {
        return $this->base;
    }

    /**
     * The base marketplace of the offer.
     */
    public function setBase(?OfferListingDtoV1PublicationMarketplacesBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @return list<MarketplaceReference>|null
     */
    public function getAdditional(): ?array
    {
        return $this->additional;
    }

    /**
     * Additional marketplaces, on which the offer is to be listed.
     *
     * @param list<MarketplaceReference>|null $additional
     */
    public function setAdditional(?array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;

        return $this;
    }
}
