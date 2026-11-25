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

class OfferCampaignParticipationChangedEvent extends SellerOfferBaseEvent
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
    /**
     * The participation identifier, campaign identifier, and offer participation state. This is a change notification, not a complete or necessarily current participation snapshot. It does not include marketplace information or participation details.
     *
     * @var OfferEventCampaignParticipation|null
     */
    protected $campaignParticipation;

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

    /**
     * The participation identifier, campaign identifier, and offer participation state. This is a change notification, not a complete or necessarily current participation snapshot. It does not include marketplace information or participation details.
     */
    public function getCampaignParticipation(): ?OfferEventCampaignParticipation
    {
        return $this->campaignParticipation;
    }

    /**
     * The participation identifier, campaign identifier, and offer participation state. This is a change notification, not a complete or necessarily current participation snapshot. It does not include marketplace information or participation details.
     */
    public function setCampaignParticipation(?OfferEventCampaignParticipation $campaignParticipation): self
    {
        $this->initialized['campaignParticipation'] = true;
        $this->campaignParticipation = $campaignParticipation;

        return $this;
    }

    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['offer' => ['offer', 'getOffer', 'setOffer'], 'campaignParticipation' => ['campaignParticipation', 'getCampaignParticipation', 'setCampaignParticipation']]);
    }
}
