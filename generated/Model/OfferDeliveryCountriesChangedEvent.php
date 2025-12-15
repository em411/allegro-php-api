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

class OfferDeliveryCountriesChangedEvent extends SellerOfferBaseEvent
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferEventExternalOffer|null
     */
    protected $offer;
    /**
     * @var list<BlockedDelivery>|null
     */
    protected $blockedDeliveries;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?OfferEventExternalOffer
    {
        return $this->offer;
    }

    public function setOffer(?OfferEventExternalOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * @return list<BlockedDelivery>|null
     */
    public function getBlockedDeliveries(): ?array
    {
        return $this->blockedDeliveries;
    }

    /**
     * @param list<BlockedDelivery>|null $blockedDeliveries
     */
    public function setBlockedDeliveries(?array $blockedDeliveries): self
    {
        $this->initialized['blockedDeliveries'] = true;
        $this->blockedDeliveries = $blockedDeliveries;

        return $this;
    }
}
