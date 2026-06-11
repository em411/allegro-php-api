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

class FlexibleBundleCreateDTO extends \ArrayObject
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
     * @var array<string, mixed>|null
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
     * @return array<string, mixed>|null
     */
    public function getDiscount(): ?iterable
    {
        return $this->discount;
    }

    /**
     * @param array<string, mixed>|null $discount
     */
    public function setDiscount(?iterable $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
