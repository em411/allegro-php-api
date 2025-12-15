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

class OfferPromoOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer identifier.
     *
     * @var string|null
     */
    protected $offerId;
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
    /**
     * Promotion packages on additional marketplaces.
     *
     * @var list<MarketplaceOfferPromoOption>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer identifier.
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * Offer identifier.
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
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

    /**
     * Promotion packages on additional marketplaces.
     *
     * @return list<MarketplaceOfferPromoOption>|null
     */
    public function getAdditionalMarketplaces(): ?array
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Promotion packages on additional marketplaces.
     *
     * @param list<MarketplaceOfferPromoOption>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?array $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
