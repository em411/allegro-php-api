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

class AlleDiscountSubmitCommandResponseInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer data.
     *
     * @var AlleDiscountSubmitCommandResponseInputOffer|null
     */
    protected $offer;
    /**
     * Campaign data.
     *
     * @var AlleDiscountSubmitCommandResponseInputCampaign|null
     */
    protected $campaign;
    /**
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountSubmitCommandResponseInputProposedPrice|null
     */
    protected $proposedPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer data.
     */
    public function getOffer(): ?AlleDiscountSubmitCommandResponseInputOffer
    {
        return $this->offer;
    }

    /**
     * Offer data.
     */
    public function setOffer(?AlleDiscountSubmitCommandResponseInputOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Campaign data.
     */
    public function getCampaign(): ?AlleDiscountSubmitCommandResponseInputCampaign
    {
        return $this->campaign;
    }

    /**
     * Campaign data.
     */
    public function setCampaign(?AlleDiscountSubmitCommandResponseInputCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function getProposedPrice(): ?AlleDiscountSubmitCommandResponseInputProposedPrice
    {
        return $this->proposedPrice;
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function setProposedPrice(?AlleDiscountSubmitCommandResponseInputProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;

        return $this;
    }
}
