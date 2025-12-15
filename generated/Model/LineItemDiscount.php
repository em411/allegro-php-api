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

class LineItemDiscount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     *   - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     *   - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     *   - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     *   - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     *   - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     *   - `COUPON` - a coupon discount
     *   - `CAMPAIGN` - a campaign discount
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     *   - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     *   - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     *   - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     *   - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     *   - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     *   - `COUPON` - a coupon discount
     *   - `CAMPAIGN` - a campaign discount
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     * - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     * - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     * - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     * - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     * - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     * - `COUPON` - a coupon discount
     * - `CAMPAIGN` - a campaign discount
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
