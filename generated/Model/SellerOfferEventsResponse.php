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

class SellerOfferEventsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The list of events.
     *
     * @var list<SellerOfferBaseEvent>|null
     */
    protected $offerEvents;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The list of events.
     *
     * @return list<SellerOfferBaseEvent>|null
     */
    public function getOfferEvents(): ?array
    {
        return $this->offerEvents;
    }

    /**
     * The list of events.
     *
     * @param list<SellerOfferBaseEvent>|null $offerEvents
     */
    public function setOfferEvents(?array $offerEvents): self
    {
        $this->initialized['offerEvents'] = true;
        $this->offerEvents = $offerEvents;

        return $this;
    }
}
