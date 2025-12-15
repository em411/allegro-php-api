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

class AlleDiscountSubmittedOfferDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the participation.
     *
     * @var string|null
     */
    protected $participationId;
    /**
     * Submitted offer data.
     *
     * @var AlleDiscountSubmittedOfferDtoOffer|null
     */
    protected $offer;
    /**
     * AlleDiscount campaign data.
     *
     * @var AlleDiscountSubmittedOfferDtoCampaign|null
     */
    protected $campaign;
    /**
     * AlleDiscount prices data.
     *
     * @var AlleDiscountSubmittedOfferDtoPrices|null
     */
    protected $prices;
    /**
     * Participation processing data.
     *
     * @var AlleDiscountSubmittedOfferDtoProcess|null
     */
    protected $process;
    /**
     * Limit of purchases on the offer.
     *
     * @var int|null
     */
    protected $purchaseLimit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the participation.
     */
    public function getParticipationId(): ?string
    {
        return $this->participationId;
    }

    /**
     * The id of the participation.
     */
    public function setParticipationId(?string $participationId): self
    {
        $this->initialized['participationId'] = true;
        $this->participationId = $participationId;

        return $this;
    }

    /**
     * Submitted offer data.
     */
    public function getOffer(): ?AlleDiscountSubmittedOfferDtoOffer
    {
        return $this->offer;
    }

    /**
     * Submitted offer data.
     */
    public function setOffer(?AlleDiscountSubmittedOfferDtoOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * AlleDiscount campaign data.
     */
    public function getCampaign(): ?AlleDiscountSubmittedOfferDtoCampaign
    {
        return $this->campaign;
    }

    /**
     * AlleDiscount campaign data.
     */
    public function setCampaign(?AlleDiscountSubmittedOfferDtoCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * AlleDiscount prices data.
     */
    public function getPrices(): ?AlleDiscountSubmittedOfferDtoPrices
    {
        return $this->prices;
    }

    /**
     * AlleDiscount prices data.
     */
    public function setPrices(?AlleDiscountSubmittedOfferDtoPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }

    /**
     * Participation processing data.
     */
    public function getProcess(): ?AlleDiscountSubmittedOfferDtoProcess
    {
        return $this->process;
    }

    /**
     * Participation processing data.
     */
    public function setProcess(?AlleDiscountSubmittedOfferDtoProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;

        return $this;
    }

    /**
     * Limit of purchases on the offer.
     */
    public function getPurchaseLimit(): ?int
    {
        return $this->purchaseLimit;
    }

    /**
     * Limit of purchases on the offer.
     */
    public function setPurchaseLimit(?int $purchaseLimit): self
    {
        $this->initialized['purchaseLimit'] = true;
        $this->purchaseLimit = $purchaseLimit;

        return $this;
    }
}
