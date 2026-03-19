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

class MarketplacePriceModificationGain extends MarketplacePriceModification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Value, which will be added to the current offer's BUY_NOW price with the `GAIN` modification type.
     *
     * @var MarketplacePriceModificationGainvalue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Value, which will be added to the current offer's BUY_NOW price with the `GAIN` modification type.
     */
    public function getValue(): ?MarketplacePriceModificationGainvalue
    {
        return $this->value;
    }

    /**
     * Value, which will be added to the current offer's BUY_NOW price with the `GAIN` modification type.
     */
    public function setValue(?MarketplacePriceModificationGainvalue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
