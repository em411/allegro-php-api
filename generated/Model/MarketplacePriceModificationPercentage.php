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

class MarketplacePriceModificationPercentage extends MarketplacePriceModification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A percent, which will be added to the current offer's BUY NOW price with the `PERCENTAGE` modification type.
     * <br>`+` and `%` are redundant, effectively making "15.5" and "+15.5%" the exact same value.
     *
     * Example values: `10%`, `33.3`, `-3`, `-10.50%`
     *
     * @var string|null
     */
    protected $percentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A percent, which will be added to the current offer's BUY NOW price with the `PERCENTAGE` modification type.
     * <br>`+` and `%` are redundant, effectively making "15.5" and "+15.5%" the exact same value.
     *
     * Example values: `10%`, `33.3`, `-3`, `-10.50%`
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * A percent, which will be added to the current offer's BUY NOW price with the `PERCENTAGE` modification type.
     * <br>`+` and `%` are redundant, effectively making "15.5" and "+15.5%" the exact same value.
     *
     * Example values: `10%`, `33.3`, `-3`, `-10.50%`
     */
    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
