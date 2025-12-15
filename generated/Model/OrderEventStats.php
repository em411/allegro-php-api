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

class OrderEventStats extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Basic information about the latest order event.
     *
     * @var LatestOrderEvent|null
     */
    protected $latestEvent;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Basic information about the latest order event.
     */
    public function getLatestEvent(): ?LatestOrderEvent
    {
        return $this->latestEvent;
    }

    /**
     * Basic information about the latest order event.
     */
    public function setLatestEvent(?LatestOrderEvent $latestEvent): self
    {
        $this->initialized['latestEvent'] = true;
        $this->latestEvent = $latestEvent;

        return $this;
    }
}
