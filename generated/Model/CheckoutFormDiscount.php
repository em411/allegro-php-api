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

/**
 * @deprecated
 */
class CheckoutFormDiscount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
