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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class SelectedOfferRestrictions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum partner price; null when no maximum price is provided.
     *
     * @var SelectedOfferRestrictionsMaxPartnerPrice|null
     */
    protected $maxPartnerPrice;
    /**
     * Null when neither stock bound is provided. The minimum and maximum bounds are independent.
     *
     * @var SelectedOfferRestrictionsCampaignStock|null
     */
    protected $campaignStock;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum partner price; null when no maximum price is provided.
     */
    public function getMaxPartnerPrice(): ?SelectedOfferRestrictionsMaxPartnerPrice
    {
        return $this->maxPartnerPrice;
    }

    /**
     * Maximum partner price; null when no maximum price is provided.
     */
    public function setMaxPartnerPrice(?SelectedOfferRestrictionsMaxPartnerPrice $maxPartnerPrice): self
    {
        $this->initialized['maxPartnerPrice'] = true;
        $this->maxPartnerPrice = $maxPartnerPrice;

        return $this;
    }

    /**
     * Null when neither stock bound is provided. The minimum and maximum bounds are independent.
     */
    public function getCampaignStock(): ?SelectedOfferRestrictionsCampaignStock
    {
        return $this->campaignStock;
    }

    /**
     * Null when neither stock bound is provided. The minimum and maximum bounds are independent.
     */
    public function setCampaignStock(?SelectedOfferRestrictionsCampaignStock $campaignStock): self
    {
        $this->initialized['campaignStock'] = true;
        $this->campaignStock = $campaignStock;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['maxPartnerPrice' => ['maxPartnerPrice', 'getMaxPartnerPrice', 'setMaxPartnerPrice'], 'campaignStock' => ['campaignStock', 'getCampaignStock', 'setCampaignStock']];
    }
}
