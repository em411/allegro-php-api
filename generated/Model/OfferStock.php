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

class OfferStock extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The unit type of the stock.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * The available stock value.
     *
     * @var int|null
     */
    protected $available;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The unit type of the stock.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * The unit type of the stock.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    /**
     * The available stock value.
     */
    public function getAvailable(): ?int
    {
        return $this->available;
    }

    /**
     * The available stock value.
     */
    public function setAvailable(?int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }
}
