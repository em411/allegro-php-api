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

class AdditionalMarketplacesRequestItemSellingMode extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     *
     * @var AdditionalMarketplacesRequestItemSellingModePrice|null
     */
    protected $price;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     */
    public function getPrice(): ?AdditionalMarketplacesRequestItemSellingModePrice
    {
        return $this->price;
    }

    /**
     * The offer price for the selected additional marketplace. The price in this field must be provided by the seller in the correct currency, which is specified in the `GET /marketplaces` resource.
     */
    public function setPrice(?AdditionalMarketplacesRequestItemSellingModePrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
