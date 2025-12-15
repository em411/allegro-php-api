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

class UpdateOfferBundleDiscountDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @var list<BundleDiscountDTO>|null
     */
    protected $discounts;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @return list<BundleDiscountDTO>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Discounts on marketplaces. Can be null or empty if bundle shouldn't have discount on any marketplace.
     *
     * @param list<BundleDiscountDTO>|null $discounts
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }
}
