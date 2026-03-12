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

class PickupTimeDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date of the pickup in ISO format (yyyy-MM-dd).
     *
     * @var string|null
     */
    protected $date;
    /**
     * Start time of the pickup slot.
     *
     * @var string|null
     */
    protected $minTime;
    /**
     * End time of the pickup slot.
     *
     * @var string|null
     */
    protected $maxTime;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date of the pickup in ISO format (yyyy-MM-dd).
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date of the pickup in ISO format (yyyy-MM-dd).
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Start time of the pickup slot.
     */
    public function getMinTime(): ?string
    {
        return $this->minTime;
    }

    /**
     * Start time of the pickup slot.
     */
    public function setMinTime(?string $minTime): self
    {
        $this->initialized['minTime'] = true;
        $this->minTime = $minTime;

        return $this;
    }

    /**
     * End time of the pickup slot.
     */
    public function getMaxTime(): ?string
    {
        return $this->maxTime;
    }

    /**
     * End time of the pickup slot.
     */
    public function setMaxTime(?string $maxTime): self
    {
        $this->initialized['maxTime'] = true;
        $this->maxTime = $maxTime;

        return $this;
    }
}
