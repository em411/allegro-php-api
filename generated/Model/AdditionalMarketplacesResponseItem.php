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

class AdditionalMarketplacesResponseItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The offer price for the selected additional marketplace.
     *
     * @var AdditionalMarketplacesResponseItemSellingMode|null
     */
    protected $sellingMode;
    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     *
     * @var AdditionalMarketplacesResponseItemPublication|null
     */
    protected $publication;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The offer price for the selected additional marketplace.
     */
    public function getSellingMode(): ?AdditionalMarketplacesResponseItemSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * The offer price for the selected additional marketplace.
     */
    public function setSellingMode(?AdditionalMarketplacesResponseItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     */
    public function getPublication(): ?AdditionalMarketplacesResponseItemPublication
    {
        return $this->publication;
    }

    /**
     * <small>[read-only]</small> Contains information about the visibility status of the listing for the given service.
     */
    public function setPublication(?AdditionalMarketplacesResponseItemPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }
}
