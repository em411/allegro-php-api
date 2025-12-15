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

class AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * If true, offer matches campaign requirements and `violations` array will be empty.
     *
     * @var bool|null
     */
    protected $meetsConditions;
    /**
     * Example violations:
     *   - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     *   - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     *   - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     *   - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
     *
     * @var list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem>|null
     */
    protected $violations;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * If true, offer matches campaign requirements and `violations` array will be empty.
     */
    public function getMeetsConditions(): ?bool
    {
        return $this->meetsConditions;
    }

    /**
     * If true, offer matches campaign requirements and `violations` array will be empty.
     */
    public function setMeetsConditions(?bool $meetsConditions): self
    {
        $this->initialized['meetsConditions'] = true;
        $this->meetsConditions = $meetsConditions;

        return $this;
    }

    /**
     * Example violations:
     *   - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     *   - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     *   - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     *   - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
     *
     * @return list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem>|null
     */
    public function getViolations(): ?array
    {
        return $this->violations;
    }

    /**
     * Example violations:
     * - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     * - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     * - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     * - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
     *
     * @param list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem>|null $violations
     */
    public function setViolations(?array $violations): self
    {
        $this->initialized['violations'] = true;
        $this->violations = $violations;

        return $this;
    }
}
