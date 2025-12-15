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

class AlleDiscountSubmittedOfferDtoProcess extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * - VERIFICATION - participation is being verified. - ACCEPTED - participation in AlleDiscount was created and has passed initial verification. Participation will stay in this status until campaign starts or if additional verification fails. - ACTIVE - participation is active, price on the platform is lowered. Offer is participating in AlleDiscount. - DECLINED - participation didn’t pass verification, check process.errors field for more details. - FINISHED - participation is no longer active.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Possible participation errors:
     *   - TOO_HIGH_PROPOSED_PRICE - “proposedPrice” field when submitting an offer was set higher than the “requiredMerchantPrice” of this offer.
     *   - PRODUCT_CONFIGURATION_CHANGED - configuration of offer’s product has changed in the meantime of processing the request.
     *   - PRODUCT_NOT_IN_CAMPAIGN - submitted offer’s product is no longer available in this campaign.
     *   - OFFER_NOT_VISIBLE_ON_CAMPAIGN_MARKETPLACE - offer is not visible on the marketplace of the campaign it was submitted to.
     *   - CURRENCY_NOT_SUPPORTED - currency in “proposedPrice” does not match the currency of the marketplace offer was submitted to.
     *   - ALLE_DISCOUNT_SUSPENDED_ACCOUNT - seller submitting offer is suspended and cannot perform any action.
     *
     * @var list<AlleDiscountSubmittedOfferDtoProcessErrorsItem>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * - VERIFICATION - participation is being verified. - ACCEPTED - participation in AlleDiscount was created and has passed initial verification. Participation will stay in this status until campaign starts or if additional verification fails. - ACTIVE - participation is active, price on the platform is lowered. Offer is participating in AlleDiscount. - DECLINED - participation didn’t pass verification, check process.errors field for more details. - FINISHED - participation is no longer active.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * - VERIFICATION - participation is being verified. - ACCEPTED - participation in AlleDiscount was created and has passed initial verification. Participation will stay in this status until campaign starts or if additional verification fails. - ACTIVE - participation is active, price on the platform is lowered. Offer is participating in AlleDiscount. - DECLINED - participation didn’t pass verification, check process.errors field for more details. - FINISHED - participation is no longer active.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Possible participation errors:
     *   - TOO_HIGH_PROPOSED_PRICE - “proposedPrice” field when submitting an offer was set higher than the “requiredMerchantPrice” of this offer.
     *   - PRODUCT_CONFIGURATION_CHANGED - configuration of offer’s product has changed in the meantime of processing the request.
     *   - PRODUCT_NOT_IN_CAMPAIGN - submitted offer’s product is no longer available in this campaign.
     *   - OFFER_NOT_VISIBLE_ON_CAMPAIGN_MARKETPLACE - offer is not visible on the marketplace of the campaign it was submitted to.
     *   - CURRENCY_NOT_SUPPORTED - currency in “proposedPrice” does not match the currency of the marketplace offer was submitted to.
     *   - ALLE_DISCOUNT_SUSPENDED_ACCOUNT - seller submitting offer is suspended and cannot perform any action.
     *
     * @return list<AlleDiscountSubmittedOfferDtoProcessErrorsItem>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Possible participation errors:
     * - TOO_HIGH_PROPOSED_PRICE - “proposedPrice” field when submitting an offer was set higher than the “requiredMerchantPrice” of this offer.
     * - PRODUCT_CONFIGURATION_CHANGED - configuration of offer’s product has changed in the meantime of processing the request.
     * - PRODUCT_NOT_IN_CAMPAIGN - submitted offer’s product is no longer available in this campaign.
     * - OFFER_NOT_VISIBLE_ON_CAMPAIGN_MARKETPLACE - offer is not visible on the marketplace of the campaign it was submitted to.
     * - CURRENCY_NOT_SUPPORTED - currency in “proposedPrice” does not match the currency of the marketplace offer was submitted to.
     * - ALLE_DISCOUNT_SUSPENDED_ACCOUNT - seller submitting offer is suspended and cannot perform any action.
     *
     * @param list<AlleDiscountSubmittedOfferDtoProcessErrorsItem>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
