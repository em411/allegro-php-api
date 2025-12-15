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

class SalePartialProductOfferResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     *
     * @var SalePartialProductOfferResponseStock|null
     */
    protected $stock;
    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     *
     * @var SalePartialProductOfferResponseSellingMode|null
     */
    protected $sellingMode;
    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @var array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer's ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Offer's ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     */
    public function getStock(): ?SalePartialProductOfferResponseStock
    {
        return $this->stock;
    }

    /**
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     */
    public function setStock(?SalePartialProductOfferResponseStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }

    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     */
    public function getSellingMode(): ?SalePartialProductOfferResponseSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     */
    public function setSellingMode(?SalePartialProductOfferResponseSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @return array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem>|null
     */
    public function getAdditionalMarketplaces(): ?iterable
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @param array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
