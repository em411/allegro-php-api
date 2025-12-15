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

class AllegroPickupDropOffPointOpeningItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Day of week (ISO 8601).
     *
     * @var string|null
     */
    protected $dayOfWeek;
    /**
     * Start hour.
     *
     * @var string|null
     */
    protected $from;
    /**
     * End hour.
     *
     * @var string|null
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Day of week (ISO 8601).
     */
    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    /**
     * Day of week (ISO 8601).
     */
    public function setDayOfWeek(?string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Start hour.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Start hour.
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * End hour.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * End hour.
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }
}
