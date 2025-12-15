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

class OfferBidCanceledEvent extends SellerOfferBaseEvent
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The data of the offer, for which the event occurred.
     *
     * @var OfferEventBaseOffer|null
     */
    protected $offer;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The data of the offer, for which the event occurred.
     */
    public function getOffer(): ?OfferEventBaseOffer
    {
        return $this->offer;
    }

    /**
     * The data of the offer, for which the event occurred.
     */
    public function setOffer(?OfferEventBaseOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }
}
