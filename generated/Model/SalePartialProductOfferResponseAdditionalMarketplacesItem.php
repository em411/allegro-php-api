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

class SalePartialProductOfferResponseAdditionalMarketplacesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Price information for given addtional marketplace.
     *
     * @var SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode|null
     */
    protected $sellingMode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Price information for given addtional marketplace.
     */
    public function getSellingMode(): ?SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Price information for given addtional marketplace.
     */
    public function setSellingMode(?SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }
}
