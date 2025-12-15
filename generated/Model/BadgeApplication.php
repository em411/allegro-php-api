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

class BadgeApplication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Badge application ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|null
     */
    protected $updatedAt;
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
     * @var BadgeCampaignStock|null
     */
    protected $campaignStock;
    /**
     * Information about processing of the application.
     *
     * @var BadgeApplicationProcess|null
     */
    protected $process;
    /**
     * Constraints of purchase of this offer while it participates in the campaign. Optional for all campaigns types.
     *
     * @var BadgeApplicationPurchaseConstraints|null
     */
    protected $purchaseConstraints;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Badge application ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Badge application ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
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

    /**
     * Information about processing of the application.
     */
    public function getProcess(): ?BadgeApplicationProcess
    {
        return $this->process;
    }

    /**
     * Information about processing of the application.
     */
    public function setProcess(?BadgeApplicationProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;

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
}
