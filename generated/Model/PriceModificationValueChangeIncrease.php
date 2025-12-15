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

class PriceModificationValueChangeIncrease extends PriceModification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     *
     * @var PriceModificationValueChangeHolder|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     */
    public function getValue(): ?PriceModificationValueChangeHolder
    {
        return $this->value;
    }

    /**
     * Change of offer buy now price, related to types: INCREASE_PRICE, DECREASE_PRICE.
     */
    public function setValue(?PriceModificationValueChangeHolder $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
