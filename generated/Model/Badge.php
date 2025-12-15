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

class Badge extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BadgeApplicationOffer|null
     */
    protected $offer;
    /**
     * @var OfferBadgeCampaign|null
     */
    protected $campaign;
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @var BadgePublicationTimePolicy|null
     */
    protected $publication;
    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     *
     * @var BadgePrices|null
     */
    protected $prices;
    /**
     * Information about badge processing.
     *
     * @var BadgeProcess|null
     */
    protected $process;
    /**
     * @var BadgeCampaignStock|null
     */
    protected $campaignStock;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?BadgeApplicationOffer
    {
        return $this->offer;
    }

    public function setOffer(?BadgeApplicationOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getCampaign(): ?OfferBadgeCampaign
    {
        return $this->campaign;
    }

    public function setCampaign(?OfferBadgeCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     */
    public function getPublication(): ?BadgePublicationTimePolicy
    {
        return $this->publication;
    }

    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     */
    public function setPublication(?BadgePublicationTimePolicy $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     */
    public function getPrices(): ?BadgePrices
    {
        return $this->prices;
    }

    /**
     * Provided for DISCOUNT and SOURCING campaigns.
     */
    public function setPrices(?BadgePrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }

    /**
     * Information about badge processing.
     */
    public function getProcess(): ?BadgeProcess
    {
        return $this->process;
    }

    /**
     * Information about badge processing.
     */
    public function setProcess(?BadgeProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;

        return $this;
    }

    public function getCampaignStock(): ?BadgeCampaignStock
    {
        return $this->campaignStock;
    }

    public function setCampaignStock(?BadgeCampaignStock $campaignStock): self
    {
        $this->initialized['campaignStock'] = true;
        $this->campaignStock = $campaignStock;

        return $this;
    }
}
