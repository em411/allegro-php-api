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

class OfferAdditionalMarketplace extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AdditionalMarketplacePublication|null
     */
    protected $publication;
    /**
     * Offer's selling mode on given marketplace.
     *
     * @var AdditionalMarketplaceSellingMode|null
     */
    protected $sellingMode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getPublication(): ?AdditionalMarketplacePublication
    {
        return $this->publication;
    }

    public function setPublication(?AdditionalMarketplacePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Offer's selling mode on given marketplace.
     */
    public function getSellingMode(): ?AdditionalMarketplaceSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Offer's selling mode on given marketplace.
     */
    public function setSellingMode(?AdditionalMarketplaceSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }
}
