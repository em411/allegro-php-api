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

class SaleProductOffersRequestStock extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
     *
     * @var int|null
     */
    protected $available;
    /**
     * Stock unit.
     *
     * @var string|null
     */
    protected $unit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
     */
    public function getAvailable(): ?int
    {
        return $this->available;
    }

    /**
     * Quantity of this offer available for sale - how many times this offer can be sold. Offer can be activated only with stock being greater then 0. Setting this quantity to 0 for 'ACTIVE' or 'ACTIVATING' offer will trigger changing its status to 'ENDED'.
     */
    public function setAvailable(?int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * Stock unit.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Stock unit.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }
}
