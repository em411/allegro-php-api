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

class AlleDiscountGetSubmitCommandResponseInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer data.
     *
     * @var AlleDiscountGetSubmitCommandResponseInputOffer|null
     */
    protected $offer;
    /**
     * Campaign data.
     *
     * @var AlleDiscountGetSubmitCommandResponseInputCampaign|null
     */
    protected $campaign;
    /**
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountGetSubmitCommandResponseInputProposedPrice|null
     */
    protected $proposedPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer data.
     */
    public function getOffer(): ?AlleDiscountGetSubmitCommandResponseInputOffer
    {
        return $this->offer;
    }

    /**
     * Offer data.
     */
    public function setOffer(?AlleDiscountGetSubmitCommandResponseInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Campaign data.
     */
    public function getCampaign(): ?AlleDiscountGetSubmitCommandResponseInputCampaign
    {
        return $this->campaign;
    }

    /**
     * Campaign data.
     */
    public function setCampaign(?AlleDiscountGetSubmitCommandResponseInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function getProposedPrice(): ?AlleDiscountGetSubmitCommandResponseInputProposedPrice
    {
        return $this->proposedPrice;
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function setProposedPrice(?AlleDiscountGetSubmitCommandResponseInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;

        return $this;
    }
}
