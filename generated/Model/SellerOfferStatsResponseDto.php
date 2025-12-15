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

class SellerOfferStatsResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ClassifiedEventStat>|null
     */
    protected $eventStatsTotal;
    /**
     * @var list<ClassifiedDailyEventStatResponseDto>|null
     */
    protected $eventsPerDay;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ClassifiedEventStat>|null
     */
    public function getEventStatsTotal(): ?array
    {
        return $this->eventStatsTotal;
    }

    /**
     * @param list<ClassifiedEventStat>|null $eventStatsTotal
     */
    public function setEventStatsTotal(?array $eventStatsTotal): self
    {
        $this->initialized['eventStatsTotal'] = true;
        $this->eventStatsTotal = $eventStatsTotal;

        return $this;
    }

    /**
     * @return list<ClassifiedDailyEventStatResponseDto>|null
     */
    public function getEventsPerDay(): ?array
    {
        return $this->eventsPerDay;
    }

    /**
     * @param list<ClassifiedDailyEventStatResponseDto>|null $eventsPerDay
     */
    public function setEventsPerDay(?array $eventsPerDay): self
    {
        $this->initialized['eventsPerDay'] = true;
        $this->eventsPerDay = $eventsPerDay;

        return $this;
    }
}
