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

class FlexibleBundleSlotsDiscountDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Discount configuration per slot (order must be unique).
     *
     * @var list<FlexibleBundleSlotDiscountDTO>|null
     */
    protected $slots;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Discount configuration per slot (order must be unique).
     *
     * @return list<FlexibleBundleSlotDiscountDTO>|null
     */
    public function getSlots(): ?array
    {
        return $this->slots;
    }

    /**
     * Discount configuration per slot (order must be unique).
     *
     * @param list<FlexibleBundleSlotDiscountDTO>|null $slots
     */
    public function setSlots(?array $slots): self
    {
        $this->initialized['slots'] = true;
        $this->slots = $slots;

        return $this;
    }
}
