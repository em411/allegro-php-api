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

class FlexibleBundleUpdateDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<FlexibleBundleSlotDTO>|null
     */
    protected $slots;
    /**
     * Discount configuration for bundle.
     *
     * @var FlexibleBundleDiscountDTO|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<FlexibleBundleSlotDTO>|null
     */
    public function getSlots(): ?array
    {
        return $this->slots;
    }

    /**
     * @param list<FlexibleBundleSlotDTO>|null $slots
     */
    public function setSlots(?array $slots): self
    {
        $this->initialized['slots'] = true;
        $this->slots = $slots;

        return $this;
    }

    /**
     * Discount configuration for bundle.
     */
    public function getDiscount(): ?FlexibleBundleDiscountDTO
    {
        return $this->discount;
    }

    /**
     * Discount configuration for bundle.
     */
    public function setDiscount(?FlexibleBundleDiscountDTO $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
