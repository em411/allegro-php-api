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

class OfferBundleDTOPublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BundleMarketplaceDTO|null
     */
    protected $marketplace;
    /**
     * Bundle's status.
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplace(): ?BundleMarketplaceDTO
    {
        return $this->marketplace;
    }

    public function setMarketplace(?BundleMarketplaceDTO $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Bundle's status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Bundle's status.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
