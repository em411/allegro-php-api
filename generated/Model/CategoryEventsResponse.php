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

class CategoryEventsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The list of events.
     *
     * @var list<CategoryBaseEvent>|null
     */
    protected $events;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The list of events.
     *
     * @return list<CategoryBaseEvent>|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * The list of events.
     *
     * @param list<CategoryBaseEvent>|null $events
     */
    public function setEvents(?array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;

        return $this;
    }
}
