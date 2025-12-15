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

class AlleDiscountSubmitCommandRequestInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Data of the offer you want to submit to the AlleDiscount campaign.
     *
     * @var AlleDiscountSubmitCommandRequestInputOffer|null
     */
    protected $offer;
    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     *
     * @var AlleDiscountSubmitCommandRequestInputCampaign|null
     */
    protected $campaign;
    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     *
     * @var AlleDiscountSubmitCommandRequestInputProposedPrice|null
     */
    protected $proposedPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Data of the offer you want to submit to the AlleDiscount campaign.
     */
    public function getOffer(): ?AlleDiscountSubmitCommandRequestInputOffer
    {
        return $this->offer;
    }

    /**
     * Data of the offer you want to submit to the AlleDiscount campaign.
     */
    public function setOffer(?AlleDiscountSubmitCommandRequestInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     */
    public function getCampaign(): ?AlleDiscountSubmitCommandRequestInputCampaign
    {
        return $this->campaign;
    }

    /**
     * Data of AlleDiscount campaign you want to submit your offer to.
     */
    public function setCampaign(?AlleDiscountSubmitCommandRequestInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     */
    public function getProposedPrice(): ?AlleDiscountSubmitCommandRequestInputProposedPrice
    {
        return $this->proposedPrice;
    }

    /**
     * The price you agree to lower to for the offer. Must be equal or lower than requiredMerchantPrice returned in `/sale/alle-discount/{campaignId}/eligible-offers` endpoint.
     */
    public function setProposedPrice(?AlleDiscountSubmitCommandRequestInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;

        return $this;
    }
}
