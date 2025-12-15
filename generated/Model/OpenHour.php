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

class OpenHour extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601.
     *
     * @var string|null
     */
    protected $dayOfWeek;
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     *
     * @var string|null
     */
    protected $from;
    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     *
     * @var string|null
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601.
     */
    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    /**
     * Days of the week: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY. Date format ISO 8601.
     */
    public function setDayOfWeek(?string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Date format (ISO 8601) - HH:mm:ss.SSS.
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }
}
