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

class FlexibleBundleMarketplaceDiscountDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace identifier.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Discount percentage.
     *
     * @var int|null
     */
    protected $percentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace identifier.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * Marketplace identifier.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Discount percentage.
     */
    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    /**
     * Discount percentage.
     */
    public function setPercentage(?int $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
