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

class OfferListingDtoV1AdditionalMarketplace extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Information about the publication of the offer on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplacePublication|null
     */
    protected $publication;
    /**
     * Information about the selling mode of the offer on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceSellingMode|null
     */
    protected $sellingMode;
    /**
     * The offer's statistics on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceStats|null
     */
    protected $stats;
    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceStock|null
     */
    protected $stock;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Information about the publication of the offer on the given marketplace.
     */
    public function getPublication(): ?OfferListingDtoV1AdditionalMarketplacePublication
    {
        return $this->publication;
    }

    /**
     * Information about the publication of the offer on the given marketplace.
     */
    public function setPublication(?OfferListingDtoV1AdditionalMarketplacePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Information about the selling mode of the offer on the given marketplace.
     */
    public function getSellingMode(): ?OfferListingDtoV1AdditionalMarketplaceSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Information about the selling mode of the offer on the given marketplace.
     */
    public function setSellingMode(?OfferListingDtoV1AdditionalMarketplaceSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * The offer's statistics on the given marketplace.
     */
    public function getStats(): ?OfferListingDtoV1AdditionalMarketplaceStats
    {
        return $this->stats;
    }

    /**
     * The offer's statistics on the given marketplace.
     */
    public function setStats(?OfferListingDtoV1AdditionalMarketplaceStats $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;

        return $this;
    }

    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     */
    public function getStock(): ?OfferListingDtoV1AdditionalMarketplaceStock
    {
        return $this->stock;
    }

    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     */
    public function setStock(?OfferListingDtoV1AdditionalMarketplaceStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }
}
