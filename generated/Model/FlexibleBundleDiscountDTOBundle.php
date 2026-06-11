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

class FlexibleBundleDiscountDTOBundle extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Minimum number of bought offers to apply discount.
     *
     * @var int|null
     */
    protected $minimumBoughtOffers;
    /**
     * Discount values per marketplace (must be unique per marketplace).
     *
     * @var list<FlexibleBundleMarketplaceDiscountDTO>|null
     */
    protected $discounts;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Minimum number of bought offers to apply discount.
     */
    public function getMinimumBoughtOffers(): ?int
    {
        return $this->minimumBoughtOffers;
    }

    /**
     * Minimum number of bought offers to apply discount.
     */
    public function setMinimumBoughtOffers(?int $minimumBoughtOffers): self
    {
        $this->initialized['minimumBoughtOffers'] = true;
        $this->minimumBoughtOffers = $minimumBoughtOffers;

        return $this;
    }

    /**
     * Discount values per marketplace (must be unique per marketplace).
     *
     * @return list<FlexibleBundleMarketplaceDiscountDTO>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Discount values per marketplace (must be unique per marketplace).
     *
     * @param list<FlexibleBundleMarketplaceDiscountDTO>|null $discounts
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }
}
