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

class BadgeApplicationRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BadgeApplicationCampaign|null
     */
    protected $campaign;
    /**
     * @var BadgeApplicationOffer|null
     */
    protected $offer;
    /**
     * Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationPrices|null
     */
    protected $prices;
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @var BadgeApplicationPurchaseConstraints|null
     */
    protected $purchaseConstraints;
    /**
     * Stock declared to be reserved for the campaign. Required only for campaigns with stockReservationIsRequired property equal true.
     *
     * @var BadgeApplicationDeclaredStock|null
     */
    protected $declaredStock;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCampaign(): ?BadgeApplicationCampaign
    {
        return $this->campaign;
    }

    public function setCampaign(?BadgeApplicationCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
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

    /**
     * Required by DISCOUNT and SOURCING campaign.
     */
    public function getPrices(): ?BadgeApplicationPrices
    {
        return $this->prices;
    }

    /**
     * Required by DISCOUNT and SOURCING campaign.
     */
    public function setPrices(?BadgeApplicationPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }

    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     */
    public function getPurchaseConstraints(): ?BadgeApplicationPurchaseConstraints
    {
        return $this->purchaseConstraints;
    }

    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     */
    public function setPurchaseConstraints(?BadgeApplicationPurchaseConstraints $purchaseConstraints): self
    {
        $this->initialized['purchaseConstraints'] = true;
        $this->purchaseConstraints = $purchaseConstraints;

        return $this;
    }

    /**
     * Stock declared to be reserved for the campaign. Required only for campaigns with stockReservationIsRequired property equal true.
     */
    public function getDeclaredStock(): ?BadgeApplicationDeclaredStock
    {
        return $this->declaredStock;
    }

    /**
     * Stock declared to be reserved for the campaign. Required only for campaigns with stockReservationIsRequired property equal true.
     */
    public function setDeclaredStock(?BadgeApplicationDeclaredStock $declaredStock): self
    {
        $this->initialized['declaredStock'] = true;
        $this->declaredStock = $declaredStock;

        return $this;
    }
}
