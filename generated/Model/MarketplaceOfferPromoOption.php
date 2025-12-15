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

class MarketplaceOfferPromoOption extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * @var OfferPromoOption|null
     */
    protected $basePackage;
    /**
     * Extra promotion packages set on offer.
     *
     * @var list<OfferPromoOption>|null
     */
    protected $extraPackages;
    /**
     * @var OfferPromoOptionsPendingChanges|null
     */
    protected $pendingChanges;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    public function getBasePackage(): ?OfferPromoOption
    {
        return $this->basePackage;
    }

    public function setBasePackage(?OfferPromoOption $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;

        return $this;
    }

    /**
     * Extra promotion packages set on offer.
     *
     * @return list<OfferPromoOption>|null
     */
    public function getExtraPackages(): ?array
    {
        return $this->extraPackages;
    }

    /**
     * Extra promotion packages set on offer.
     *
     * @param list<OfferPromoOption>|null $extraPackages
     */
    public function setExtraPackages(?array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;

        return $this;
    }

    public function getPendingChanges(): ?OfferPromoOptionsPendingChanges
    {
        return $this->pendingChanges;
    }

    public function setPendingChanges(?OfferPromoOptionsPendingChanges $pendingChanges): self
    {
        $this->initialized['pendingChanges'] = true;
        $this->pendingChanges = $pendingChanges;

        return $this;
    }
}
