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

class MarketplacePriceModificationFixed extends MarketplacePriceModification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * New offer's BUY NOW price set with the `FIXED` type modification.
     *
     * @var MarketplacePriceModificationFixedvalue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * New offer's BUY NOW price set with the `FIXED` type modification.
     */
    public function getValue(): ?MarketplacePriceModificationFixedvalue
    {
        return $this->value;
    }

    /**
     * New offer's BUY NOW price set with the `FIXED` type modification.
     */
    public function setValue(?MarketplacePriceModificationFixedvalue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
