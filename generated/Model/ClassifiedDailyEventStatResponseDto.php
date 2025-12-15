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

class ClassifiedDailyEventStatResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date in format yyyy-MM-dd.
     *
     * @var string|null
     */
    protected $date;
    /**
     * List of event types with number of occurrences.
     *
     * @var list<ClassifiedEventStat>|null
     */
    protected $eventStats;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date in format yyyy-MM-dd.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date in format yyyy-MM-dd.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * List of event types with number of occurrences.
     *
     * @return list<ClassifiedEventStat>|null
     */
    public function getEventStats(): ?array
    {
        return $this->eventStats;
    }

    /**
     * List of event types with number of occurrences.
     *
     * @param list<ClassifiedEventStat>|null $eventStats
     */
    public function setEventStats(?array $eventStats): self
    {
        $this->initialized['eventStats'] = true;
        $this->eventStats = $eventStats;

        return $this;
    }
}
