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

class AlleDiscountEligibleOfferDtoAlleDiscount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Info if offer matches campaign requirements.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions|null
     */
    protected $campaignConditions;
    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     *
     * @var AlleDiscountRequiredMerchantPriceDto|null
     */
    protected $requiredMerchantPrice;
    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     *
     * @var AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount|null
     */
    protected $minimumGuaranteedDiscount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Info if offer matches campaign requirements.
     */
    public function getCampaignConditions(): ?AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions
    {
        return $this->campaignConditions;
    }

    /**
     * Info if offer matches campaign requirements.
     */
    public function setCampaignConditions(?AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions $campaignConditions): self
    {
        $this->initialized['campaignConditions'] = true;
        $this->campaignConditions = $campaignConditions;

        return $this;
    }

    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     */
    public function getRequiredMerchantPrice(): ?AlleDiscountRequiredMerchantPriceDto
    {
        return $this->requiredMerchantPrice;
    }

    /**
     * Maximum price of offer that will be accepted in this AlleDiscount campaign. If you send submission with higher price, it will be rejected. You can submit your offer with lower price than one indicated here.
     */
    public function setRequiredMerchantPrice(?AlleDiscountRequiredMerchantPriceDto $requiredMerchantPrice): self
    {
        $this->initialized['requiredMerchantPrice'] = true;
        $this->requiredMerchantPrice = $requiredMerchantPrice;

        return $this;
    }

    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     */
    public function getMinimumGuaranteedDiscount(): ?AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount
    {
        return $this->minimumGuaranteedDiscount;
    }

    /**
     * Information what will be minimal guaranteed discount if offer is successfully submitted to AlleDiscount campaign. Final discount can be higher and may change for certain campaigns.
     */
    public function setMinimumGuaranteedDiscount(?AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount $minimumGuaranteedDiscount): self
    {
        $this->initialized['minimumGuaranteedDiscount'] = true;
        $this->minimumGuaranteedDiscount = $minimumGuaranteedDiscount;

        return $this;
    }
}
