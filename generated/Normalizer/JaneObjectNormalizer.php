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

namespace Em411\Allegro\Api\Normalizer;

use Em411\Allegro\Api\Runtime\Normalizer\CheckArray;
use Em411\Allegro\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = [
        \Em411\Allegro\Api\Model\BillingEntries::class => BillingEntriesNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntry::class => BillingEntryNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryType::class => BillingEntryTypeNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryTypeGroup::class => BillingEntryTypeGroupNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryOffer::class => BillingEntryOfferNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryValue::class => BillingEntryValueNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryTax::class => BillingEntryTaxNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryBalance::class => BillingEntryBalanceNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryOrder::class => BillingEntryOrderNormalizer::class,

        \Em411\Allegro\Api\Model\BillingEntryAdditionalInfoItem::class => BillingEntryAdditionalInfoItemNormalizer::class,

        \Em411\Allegro\Api\Model\BillingType::class => BillingTypeNormalizer::class,

        \Em411\Allegro\Api\Model\InitializeRefund::class => InitializeRefundNormalizer::class,

        \Em411\Allegro\Api\Model\InitializeRefundDelivery::class => InitializeRefundDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\InitializeRefundOverpaid::class => InitializeRefundOverpaidNormalizer::class,

        \Em411\Allegro\Api\Model\InitializeRefundAdditionalServices::class => InitializeRefundAdditionalServicesNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaim::class => RefundClaimNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimCommission::class => RefundClaimCommissionNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimBuyer::class => RefundClaimBuyerNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimLineItem::class => RefundClaimLineItemNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimLineItemOffer::class => RefundClaimLineItemOfferNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimRequest::class => RefundClaimRequestNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimRequestLineItem::class => RefundClaimRequestLineItemNormalizer::class,

        \Em411\Allegro\Api\Model\RefundClaimResponse::class => RefundClaimResponseNormalizer::class,

        \Em411\Allegro\Api\Model\RefundDetails::class => RefundDetailsNormalizer::class,

        \Em411\Allegro\Api\Model\RefundDetailsDelivery::class => RefundDetailsDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\RefundDetailsOverpaid::class => RefundDetailsOverpaidNormalizer::class,

        \Em411\Allegro\Api\Model\RefundDetailsAdditionalServices::class => RefundDetailsAdditionalServicesNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsResponse::class => FulfillmentRefundDispositionsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDisposition::class => FulfillmentRefundDispositionNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionRefund::class => FulfillmentRefundDispositionRefundNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionProduct::class => FulfillmentRefundDispositionProductNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionBuyer::class => FulfillmentRefundDispositionBuyerNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse::class => FulfillmentRefundDispositionsValidationErrorResponseNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationError::class => FulfillmentRefundDispositionsValidationErrorNormalizer::class,

        \Em411\Allegro\Api\Model\RefundLineItem::class => RefundLineItemNormalizer::class,

        \Em411\Allegro\Api\Model\RefundLineItemValue::class => RefundLineItemValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundLineItemDeposit::class => RefundLineItemDepositNormalizer::class,

        \Em411\Allegro\Api\Model\RefundLineItemDepositTotalValue::class => RefundLineItemDepositTotalValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundPayment::class => RefundPaymentNormalizer::class,

        \Em411\Allegro\Api\Model\RefundOrder::class => RefundOrderNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRefundRejectionRequest::class => CustomerReturnRefundRejectionRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRefundRejectionRequestRejection::class => CustomerReturnRefundRejectionRequestRejectionNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnResponse::class => CustomerReturnResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturn::class => CustomerReturnNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRejection::class => CustomerReturnRejectionNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnBuyer::class => CustomerReturnBuyerNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnItem::class => CustomerReturnItemNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRefund::class => CustomerReturnRefundNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnReturnParcel::class => CustomerReturnReturnParcelNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnItemReason::class => CustomerReturnItemReasonNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRefundBankAccount::class => CustomerReturnRefundBankAccountNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnRefundBankAccountAddress::class => CustomerReturnRefundBankAccountAddressNormalizer::class,

        \Em411\Allegro\Api\Model\CustomerReturnParcelSender::class => CustomerReturnParcelSenderNormalizer::class,

        \Em411\Allegro\Api\Model\PaymentsSurcharge::class => PaymentsSurchargeNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceDefinitionRequest::class => AdditionalServiceDefinitionRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceRequest::class => AdditionalServiceRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceResponse::class => AdditionalServiceResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroup::class => AdditionalServicesGroupNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroupRequest::class => AdditionalServicesGroupRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroupResponse::class => AdditionalServicesGroupResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroups::class => AdditionalServicesGroupsNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroupTranslationRequest::class => AdditionalServicesGroupTranslationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroupTranslationWrapper::class => AdditionalServicesGroupTranslationWrapperNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceTranslation::class => AdditionalServiceTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceGroupTranslationResponse::class => AdditionalServiceGroupTranslationResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceGroupTranslation::class => AdditionalServiceGroupTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServicesGroupTranslationWrapperWithType::class => AdditionalServicesGroupTranslationWrapperWithTypeNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceGroupTranslationPatchResponse::class => AdditionalServiceGroupTranslationPatchResponseNormalizer::class,

        \Em411\Allegro\Api\Model\Address::class => AddressNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAdditionalMarketplace::class => OfferAdditionalMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacePublication::class => AdditionalMarketplacePublicationNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplaceSellingMode::class => AdditionalMarketplaceSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServices::class => AfterSalesServicesNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesAttachment::class => AfterSalesServicesAttachmentNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarranty::class => ImpliedWarrantyNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicy::class => ReturnPolicyNormalizer::class,

        \Em411\Allegro\Api\Model\Warranty::class => WarrantyNormalizer::class,

        \Em411\Allegro\Api\Model\WarrantyRequest::class => WarrantyRequestNormalizer::class,

        \Em411\Allegro\Api\Model\WarrantyResponse::class => WarrantyResponseNormalizer::class,

        \Em411\Allegro\Api\Model\WarrantyPeriod::class => WarrantyPeriodNormalizer::class,

        \Em411\Allegro\Api\Model\WarrantyAttachment::class => WarrantyAttachmentNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarrantyRequest::class => ImpliedWarrantyRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarrantyResponse::class => ImpliedWarrantyResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarrantyPeriod::class => ImpliedWarrantyPeriodNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesAddress::class => AfterSalesServicesAddressNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyAddress::class => ReturnPolicyAddressNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyRequestV1::class => ReturnPolicyRequestV1Normalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyUpdateRequestV1::class => ReturnPolicyUpdateRequestV1Normalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyResponseV1::class => ReturnPolicyResponseV1Normalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyAvailability::class => ReturnPolicyAvailabilityNormalizer::class,

        \Em411\Allegro\Api\Model\RestrictionCause::class => RestrictionCauseNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyReturnCost::class => ReturnPolicyReturnCostNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyContactV1::class => ReturnPolicyContactV1Normalizer::class,

        \Em411\Allegro\Api\Model\ReturnPolicyOptions::class => ReturnPolicyOptionsNormalizer::class,

        \Em411\Allegro\Api\Model\Attachment::class => AttachmentNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingAnswerRequest::class => UserRatingAnswerRequestNormalizer::class,

        \Em411\Allegro\Api\Model\Answer::class => AnswerNormalizer::class,

        \Em411\Allegro\Api\Model\AnswerVBeta1::class => AnswerVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\AvailableConstraint::class => AvailableConstraintNormalizer::class,

        \Em411\Allegro\Api\Model\AverageRates::class => AverageRatesNormalizer::class,

        \Em411\Allegro\Api\Model\BasicDefinitionResponse::class => BasicDefinitionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\Benefit::class => BenefitNormalizer::class,

        \Em411\Allegro\Api\Model\BenefitSpecification::class => BenefitSpecificationNormalizer::class,

        \Em411\Allegro\Api\Model\LargeOrderDiscountBenefitSpecification::class => LargeOrderDiscountBenefitSpecificationNormalizer::class,

        \Em411\Allegro\Api\Model\LargeOrderDiscountBenefitSpecificationThresholdsItem::class => LargeOrderDiscountBenefitSpecificationThresholdsItemNormalizer::class,

        \Em411\Allegro\Api\Model\LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValue::class => LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValueNormalizer::class,

        \Em411\Allegro\Api\Model\LargeOrderDiscountBenefitSpecificationThresholdsItemDiscount::class => LargeOrderDiscountBenefitSpecificationThresholdsItemDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\WholesalePriceListBenefitSpecification::class => WholesalePriceListBenefitSpecificationNormalizer::class,

        \Em411\Allegro\Api\Model\WholesalePriceListBenefitSpecificationThresholdsItem::class => WholesalePriceListBenefitSpecificationThresholdsItemNormalizer::class,

        \Em411\Allegro\Api\Model\WholesalePriceListBenefitSpecificationThresholdsItemQuantity::class => WholesalePriceListBenefitSpecificationThresholdsItemQuantityNormalizer::class,

        \Em411\Allegro\Api\Model\WholesalePriceListBenefitSpecificationThresholdsItemDiscount::class => WholesalePriceListBenefitSpecificationThresholdsItemDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\MultiPackBenefitSpecification::class => MultiPackBenefitSpecificationNormalizer::class,

        \Em411\Allegro\Api\Model\MultiPackBenefitSpecificationConfiguration::class => MultiPackBenefitSpecificationConfigurationNormalizer::class,

        \Em411\Allegro\Api\Model\MultiPackBenefitSpecificationTrigger::class => MultiPackBenefitSpecificationTriggerNormalizer::class,

        \Em411\Allegro\Api\Model\Caption::class => CaptionNormalizer::class,

        \Em411\Allegro\Api\Model\CategoriesDto::class => CategoriesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\Category::class => CategoryNormalizer::class,

        \Em411\Allegro\Api\Model\OfferCategoryRequest::class => OfferCategoryRequestNormalizer::class,

        \Em411\Allegro\Api\Model\OfferCategory::class => OfferCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\ProductCategory::class => ProductCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDto::class => CategoryDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDtoParent::class => CategoryDtoParentNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryOptionsDto::class => CategoryOptionsDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CategorySuggestionCategoryNode::class => CategorySuggestionCategoryNodeNormalizer::class,

        \Em411\Allegro\Api\Model\CategorySuggestionResponse::class => CategorySuggestionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\UnfilledParametersResponse::class => UnfilledParametersResponseNormalizer::class,

        \Em411\Allegro\Api\Model\UnfilledParametersResponseOffersItem::class => UnfilledParametersResponseOffersItemNormalizer::class,

        \Em411\Allegro\Api\Model\UnfilledParametersResponseOffersItemParametersItem::class => UnfilledParametersResponseOffersItemParametersItemNormalizer::class,

        \Em411\Allegro\Api\Model\UnfilledParametersResponseOffersItemCategory::class => UnfilledParametersResponseOffersItemCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParametersScheduledChangesResponse::class => CategoryParametersScheduledChangesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChange::class => CategoryParametersScheduledBaseChangeNormalizer::class,

        \Em411\Allegro\Api\Model\RequirementChange::class => RequirementChangeNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChangeCategory::class => CategoryParametersScheduledBaseChangeCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChangeParameter::class => CategoryParametersScheduledBaseChangeParameterNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryEventsResponse::class => CategoryEventsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryBaseEvent::class => CategoryBaseEventNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryCreatedEvent::class => CategoryCreatedEventNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryRenamedEvent::class => CategoryRenamedEventNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryMovedEvent::class => CategoryMovedEventNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDeletedEvent::class => CategoryDeletedEventNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDeletedEventRedirectCategory::class => CategoryDeletedEventRedirectCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryEventBaseCategory::class => CategoryEventBaseCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryEventBaseCategoryParent::class => CategoryEventBaseCategoryParentNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDto::class => CompatibilityListSupportedCategoriesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class => CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class => CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRulesNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductsGroupsDto::class => CompatibleProductsGroupsDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductsGroupsDtoGroupsItem::class => CompatibleProductsGroupsDtoGroupsItemNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductsListDto::class => CompatibleProductsListDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductDto::class => CompatibleProductDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductDtoGroup::class => CompatibleProductDtoGroupNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibleProductDtoAttributesItem::class => CompatibleProductDtoAttributesItemNormalizer::class,

        \Em411\Allegro\Api\Model\Cells::class => CellsNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRulesResponse::class => AutomaticPricingRulesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRules::class => OfferRulesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRulesRulesItem::class => OfferRulesRulesItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRulesRulesItemMarketplace::class => OfferRulesRulesItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRulesRulesItemRule::class => OfferRulesRulesItemRuleNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingCommand::class => OfferAutomaticPricingCommandNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationSet::class => OfferAutomaticPricingModificationSetNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationSetSetItem::class => OfferAutomaticPricingModificationSetSetItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationSetSetItemMarketplace::class => OfferAutomaticPricingModificationSetSetItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationSetSetItemRule::class => OfferAutomaticPricingModificationSetSetItemRuleNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationRemove::class => OfferAutomaticPricingModificationRemoveNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationRemoveRemoveItem::class => OfferAutomaticPricingModificationRemoveRemoveItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationRemoveRemoveItemMarketplace::class => OfferAutomaticPricingModificationRemoveRemoveItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleResponse::class => AutomaticPricingRuleResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleConfigurationChangeByAmount::class => AutomaticPricingRuleConfigurationChangeByAmountNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount::class => AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem::class => AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItemNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleConfigurationChangeByPercentage::class => AutomaticPricingRuleConfigurationChangeByPercentageNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage::class => AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentageNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRulePostRequest::class => AutomaticPricingRulePostRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingRulePutRequest::class => AutomaticPricingRulePutRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingOfferRuleConfiguration::class => AutomaticPricingOfferRuleConfigurationNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingOfferRuleConfigurationPriceRange::class => AutomaticPricingOfferRuleConfigurationPriceRangeNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice::class => AutomaticPricingOfferRuleConfigurationPriceRangeMinPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice::class => AutomaticPricingOfferRuleConfigurationPriceRangeMaxPriceNormalizer::class,

        \Em411\Allegro\Api\Model\ChangePrice::class => ChangePriceNormalizer::class,

        \Em411\Allegro\Api\Model\ChangePriceInput::class => ChangePriceInputNormalizer::class,

        \Em411\Allegro\Api\Model\ChangePriceWithoutOutput::class => ChangePriceWithoutOutputNormalizer::class,

        \Em411\Allegro\Api\Model\CommandOutput::class => CommandOutputNormalizer::class,

        \Em411\Allegro\Api\Model\CommandTask::class => CommandTaskNormalizer::class,

        \Em411\Allegro\Api\Model\CommandTaskWithPriceSubject::class => CommandTaskWithPriceSubjectNormalizer::class,

        \Em411\Allegro\Api\Model\CommandTaskWithPriceSubjectSubject::class => CommandTaskWithPriceSubjectSubjectNormalizer::class,

        \Em411\Allegro\Api\Model\CommandTaskWithStockSubject::class => CommandTaskWithStockSubjectNormalizer::class,

        \Em411\Allegro\Api\Model\CommandTaskWithStockSubjectSubject::class => CommandTaskWithStockSubjectSubjectNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityList::class => CompatibilityListNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListManual::class => CompatibilityListManualNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListManualRequest::class => CompatibilityListManualRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListProductBased::class => CompatibilityListProductBasedNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListProductBasedProductOfferResponse::class => CompatibilityListProductBasedProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListItemProductBased::class => CompatibilityListItemProductBasedNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListTextItem::class => CompatibilityListTextItemNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListIdItem::class => CompatibilityListIdItemNormalizer::class,

        \Em411\Allegro\Api\Model\CompatibilityListIdItemAdditionalInfo::class => CompatibilityListIdItemAdditionalInfoNormalizer::class,

        \Em411\Allegro\Api\Model\Configuration::class => ConfigurationNormalizer::class,

        \Em411\Allegro\Api\Model\ConstraintCriteria::class => ConstraintCriteriaNormalizer::class,

        \Em411\Allegro\Api\Model\ContactRequest::class => ContactRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ContactResponse::class => ContactResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ContactResponseList::class => ContactResponseListNormalizer::class,

        \Em411\Allegro\Api\Model\Coordinates::class => CoordinatesNormalizer::class,

        \Em411\Allegro\Api\Model\CategoriesResponse::class => CategoriesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryBasic::class => DeliveryBasicNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryFull::class => DeliveryFullNormalizer::class,

        \Em411\Allegro\Api\Model\DescriptionSection::class => DescriptionSectionNormalizer::class,

        \Em411\Allegro\Api\Model\DescriptionSectionItem::class => DescriptionSectionItemNormalizer::class,

        \Em411\Allegro\Api\Model\DescriptionSectionItemText::class => DescriptionSectionItemTextNormalizer::class,

        \Em411\Allegro\Api\Model\DescriptionSectionItemImage::class => DescriptionSectionItemImageNormalizer::class,

        \Em411\Allegro\Api\Model\EmailRequest::class => EmailRequestNormalizer::class,

        \Em411\Allegro\Api\Model\EmailResponse::class => EmailResponseNormalizer::class,

        \Em411\Allegro\Api\Model\Error::class => ErrorNormalizer::class,

        \Em411\Allegro\Api\Model\ErrorsHolder::class => ErrorsHolderNormalizer::class,

        \Em411\Allegro\Api\Model\AuthError::class => AuthErrorNormalizer::class,

        \Em411\Allegro\Api\Model\Fee::class => FeeNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryResponse::class => CategoryResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDefinitionResponse::class => CategoryDefinitionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryDefinitionDescriptionResponse::class => CategoryDefinitionDescriptionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\FeePreviewResponse::class => FeePreviewResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CommissionResponse::class => CommissionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\QuoteResponse::class => QuoteResponseNormalizer::class,

        \Em411\Allegro\Api\Model\GeneralReport::class => GeneralReportNormalizer::class,

        \Em411\Allegro\Api\Model\Header::class => HeaderNormalizer::class,

        \Em411\Allegro\Api\Model\ImageUrl::class => ImageUrlNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarrantyBasic::class => ImpliedWarrantyBasicNormalizer::class,

        \Em411\Allegro\Api\Model\JustId::class => JustIdNormalizer::class,

        \Em411\Allegro\Api\Model\ExternalId::class => ExternalIdNormalizer::class,

        \Em411\Allegro\Api\Model\Location::class => LocationNormalizer::class,

        \Em411\Allegro\Api\Model\Modification::class => ModificationNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationDelivery::class => ModificationDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationDiscounts::class => ModificationDiscountsNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationDiscountsWholesalePriceList::class => ModificationDiscountsWholesalePriceListNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationPublication::class => ModificationPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationResponsiblePerson::class => ModificationResponsiblePersonNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationResponsibleProducer::class => ModificationResponsibleProducerNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationSafetyInformation::class => ModificationSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationAttachmentSafetyInformation::class => ModificationAttachmentSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationAttachmentSafetyInformationAttachmentsItem::class => ModificationAttachmentSafetyInformationAttachmentsItemNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationTextSafetyInformation::class => ModificationTextSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\ModificationPayments::class => ModificationPaymentsNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTable::class => SizeTableNormalizer::class,

        \Em411\Allegro\Api\Model\Contact::class => ContactNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferFundraisingCampaignRequest::class => ProductOfferFundraisingCampaignRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferFundraisingCampaignResponse::class => ProductOfferFundraisingCampaignResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferAdditionalServicesRequest::class => ProductOfferAdditionalServicesRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferAdditionalServicesResponse::class => ProductOfferAdditionalServicesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferAttachmentItem::class => ProductOfferAttachmentItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAttachment::class => OfferAttachmentNormalizer::class,

        \Em411\Allegro\Api\Model\PublicOfferPreviewRequest::class => PublicOfferPreviewRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedsPackages::class => ClassifiedsPackagesNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPackage::class => ClassifiedPackageNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedExtraPackage::class => ClassifiedExtraPackageNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAttachmentRequest::class => OfferAttachmentRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AttachmentFile::class => AttachmentFileNormalizer::class,

        \Em411\Allegro\Api\Model\AttachmentFileRequest::class => AttachmentFileRequestNormalizer::class,

        \Em411\Allegro\Api\Model\OfferImageLinkUploadRequest::class => OfferImageLinkUploadRequestNormalizer::class,

        \Em411\Allegro\Api\Model\OfferImageUploadResponse::class => OfferImageUploadResponseNormalizer::class,

        \Em411\Allegro\Api\Model\PricingOffer::class => PricingOfferNormalizer::class,

        \Em411\Allegro\Api\Model\OfferChangeCommand::class => OfferChangeCommandNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPriceChangeCommand::class => OfferPriceChangeCommandNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModification::class => PriceModificationNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationFixedPrice::class => PriceModificationFixedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationValueChangeIncrease::class => PriceModificationValueChangeIncreaseNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationValueChangeDecrease::class => PriceModificationValueChangeDecreaseNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationPercentageChangeIncrease::class => PriceModificationPercentageChangeIncreaseNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationPercentageChangeDecrease::class => PriceModificationPercentageChangeDecreaseNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationFixedPriceHolder::class => PriceModificationFixedPriceHolderNormalizer::class,

        \Em411\Allegro\Api\Model\PriceModificationValueChangeHolder::class => PriceModificationValueChangeHolderNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBulkChangeCommand::class => OfferBulkChangeCommandNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBulkModification::class => OfferBulkModificationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBulkModificationPricesItem::class => OfferBulkModificationPricesItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBulkModificationStock::class => OfferBulkModificationStockNormalizer::class,

        \Em411\Allegro\Api\Model\StockModificationFixed::class => StockModificationFixedNormalizer::class,

        \Em411\Allegro\Api\Model\StockModificationGain::class => StockModificationGainNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModification::class => MarketplacePriceModificationNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModificationFixed::class => MarketplacePriceModificationFixedNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModificationFixedValue::class => MarketplacePriceModificationFixedValueNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModificationGain::class => MarketplacePriceModificationGainNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModificationGainValue::class => MarketplacePriceModificationGainValueNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacePriceModificationPercentage::class => MarketplacePriceModificationPercentageNormalizer::class,

        \Em411\Allegro\Api\Model\OfferQuantityChangeCommand::class => OfferQuantityChangeCommandNormalizer::class,

        \Em411\Allegro\Api\Model\QuantityModification::class => QuantityModificationNormalizer::class,

        \Em411\Allegro\Api\Model\SellerRebateOfferCriterion::class => SellerRebateOfferCriterionNormalizer::class,

        \Em411\Allegro\Api\Model\SellerRebateOfferCriterionOffersItem::class => SellerRebateOfferCriterionOffersItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferCriterium::class => OfferCriteriumNormalizer::class,

        \Em411\Allegro\Api\Model\OfferId::class => OfferIdNormalizer::class,

        \Em411\Allegro\Api\Model\OfferQuoteDto::class => OfferQuoteDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferQuotesDto::class => OfferQuotesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatsResponseDto::class => OfferStatsResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SellerOfferStatsResponseDto::class => SellerOfferStatsResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatResponseDto::class => OfferStatResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatModelDto::class => OfferStatModelDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedEventStat::class => ClassifiedEventStatNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedDailyEventStatResponseDto::class => ClassifiedDailyEventStatResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OpenHour::class => OpenHourNormalizer::class,

        \Em411\Allegro\Api\Model\Order::class => OrderNormalizer::class,

        \Em411\Allegro\Api\Model\OrderOffersItem::class => OrderOffersItemNormalizer::class,

        \Em411\Allegro\Api\Model\Parameter::class => ParameterNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameter::class => CategoryParameterNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryProductParameter::class => CategoryProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryProductParameter::class => DictionaryCategoryProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryProductParameterRestrictions::class => DictionaryCategoryProductParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryProductParameterDictionaryItem::class => DictionaryCategoryProductParameterDictionaryItemNormalizer::class,

        \Em411\Allegro\Api\Model\IntegerCategoryProductParameter::class => IntegerCategoryProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\IntegerCategoryProductParameterRestrictions::class => IntegerCategoryProductParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\FloatCategoryProductParameter::class => FloatCategoryProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\FloatCategoryProductParameterRestrictions::class => FloatCategoryProductParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\StringCategoryProductParameter::class => StringCategoryProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\StringCategoryProductParameterRestrictions::class => StringCategoryProductParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterOptions::class => CategoryParameterOptionsNormalizer::class,

        \Em411\Allegro\Api\Model\FormerCategoryParameterData::class => FormerCategoryParameterDataNormalizer::class,

        \Em411\Allegro\Api\Model\FormerParameterValueData::class => FormerParameterValueDataNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryParameter::class => DictionaryCategoryParameterNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryParameterRestrictions::class => DictionaryCategoryParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem::class => DictionaryCategoryParameterDictionaryItemNormalizer::class,

        \Em411\Allegro\Api\Model\IntegerCategoryParameter::class => IntegerCategoryParameterNormalizer::class,

        \Em411\Allegro\Api\Model\IntegerCategoryParameterRestrictions::class => IntegerCategoryParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\FloatCategoryParameter::class => FloatCategoryParameterNormalizer::class,

        \Em411\Allegro\Api\Model\FloatCategoryParameterRestrictions::class => FloatCategoryParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\StringCategoryParameter::class => StringCategoryParameterNormalizer::class,

        \Em411\Allegro\Api\Model\StringCategoryParameterRestrictions::class => StringCategoryParameterRestrictionsNormalizer::class,

        \Em411\Allegro\Api\Model\ParameterRangeValue::class => ParameterRangeValueNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterRequirementConditions::class => CategoryParameterRequirementConditionsNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterDisplayConditions::class => CategoryParameterDisplayConditionsNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterWithValue::class => CategoryParameterWithValueNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterWithoutValue::class => CategoryParameterWithoutValueNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryParameterList::class => CategoryParameterListNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryProductParameterList::class => CategoryProductParameterListNormalizer::class,

        \Em411\Allegro\Api\Model\CommentVBeta1::class => CommentVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\Exclusion::class => ExclusionNormalizer::class,

        \Em411\Allegro\Api\Model\Justification::class => JustificationNormalizer::class,

        \Em411\Allegro\Api\Model\Payment::class => PaymentNormalizer::class,

        \Em411\Allegro\Api\Model\Payments::class => PaymentsNormalizer::class,

        \Em411\Allegro\Api\Model\PhonesRequest::class => PhonesRequestNormalizer::class,

        \Em411\Allegro\Api\Model\PhonesResponse::class => PhonesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\Pos::class => PosNormalizer::class,

        \Em411\Allegro\Api\Model\PosLocation::class => PosLocationNormalizer::class,

        \Em411\Allegro\Api\Model\Price::class => PriceNormalizer::class,

        \Em411\Allegro\Api\Model\Promotion::class => PromotionNormalizer::class,

        \Em411\Allegro\Api\Model\PublicTableDto::class => PublicTableDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PublicTablesDto::class => PublicTablesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTableTemplateImageResponse::class => SizeTableTemplateImageResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTableTemplateResponse::class => SizeTableTemplateResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTableTemplatesResponse::class => SizeTableTemplatesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTablePostRequest::class => SizeTablePostRequestNormalizer::class,

        \Em411\Allegro\Api\Model\SizeTablePutRequest::class => SizeTablePutRequestNormalizer::class,

        \Em411\Allegro\Api\Model\PricingPublication::class => PricingPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\PublicationRequest::class => PublicationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\Publication::class => PublicationNormalizer::class,

        \Em411\Allegro\Api\Model\PublicationChangeCommandDto::class => PublicationChangeCommandDtoNormalizer::class,

        \Em411\Allegro\Api\Model\Rates::class => RatesNormalizer::class,

        \Em411\Allegro\Api\Model\Reference::class => ReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\SalesQualityHistoryResponse::class => SalesQualityHistoryResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SalesQualityForDay::class => SalesQualityForDayNormalizer::class,

        \Em411\Allegro\Api\Model\SalesQualityMetric::class => SalesQualityMetricNormalizer::class,

        \Em411\Allegro\Api\Model\Removal::class => RemovalNormalizer::class,

        \Em411\Allegro\Api\Model\RemovalRequest::class => RemovalRequestNormalizer::class,

        \Em411\Allegro\Api\Model\RemovalVBeta1::class => RemovalVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\RemovalRequestVBeta1::class => RemovalRequestVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\UserRatingRemovalRequest::class => UserRatingRemovalRequestNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingRemovalRequestRequest::class => UserRatingRemovalRequestRequestNormalizer::class,

        \Em411\Allegro\Api\Model\SearchResult::class => SearchResultNormalizer::class,

        \Em411\Allegro\Api\Model\Seller::class => SellerNormalizer::class,

        \Em411\Allegro\Api\Model\CreateOfferBundleDTO::class => CreateOfferBundleDTONormalizer::class,

        \Em411\Allegro\Api\Model\BundledOfferDTO::class => BundledOfferDTONormalizer::class,

        \Em411\Allegro\Api\Model\BundleDiscountDTO::class => BundleDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\OfferBundleDTO::class => OfferBundleDTONormalizer::class,

        \Em411\Allegro\Api\Model\OfferBundlesDTO::class => OfferBundlesDTONormalizer::class,

        \Em411\Allegro\Api\Model\OfferBundlesDTONextPage::class => OfferBundlesDTONextPageNormalizer::class,

        \Em411\Allegro\Api\Model\BundlePublicationDTO::class => BundlePublicationDTONormalizer::class,

        \Em411\Allegro\Api\Model\BundleMarketplaceDTO::class => BundleMarketplaceDTONormalizer::class,

        \Em411\Allegro\Api\Model\UpdateOfferBundleDiscountDTO::class => UpdateOfferBundleDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleCreateDTO::class => FlexibleBundleCreateDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleCreateDTODiscount::class => FlexibleBundleCreateDTODiscountNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleUpdateDTO::class => FlexibleBundleUpdateDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundlesListingDTO::class => FlexibleBundlesListingDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundlesListingDTONextPage::class => FlexibleBundlesListingDTONextPageNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleListingDTO::class => FlexibleBundleListingDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleListingDTODiscount::class => FlexibleBundleListingDTODiscountNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleGetDTO::class => FlexibleBundleGetDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleGetDTODiscount::class => FlexibleBundleGetDTODiscountNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleSlotDTO::class => FlexibleBundleSlotDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleGetSlotDTO::class => FlexibleBundleGetSlotDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleOfferDTO::class => FlexibleBundleOfferDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleGetOfferDTO::class => FlexibleBundleGetOfferDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleOfferMarketplaceDetailsDTO::class => FlexibleBundleOfferMarketplaceDetailsDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleOfferMarketplaceDetailsDTOAvailability::class => FlexibleBundleOfferMarketplaceDetailsDTOAvailabilityNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleOfferAvailabilityDTO::class => FlexibleBundleOfferAvailabilityDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTO::class => FlexibleBundleDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTOBundle::class => FlexibleBundleDiscountDTOBundleNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTOSlot::class => FlexibleBundleDiscountDTOSlotNormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleWholeBundleDiscountDTO::class => FlexibleBundleWholeBundleDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleSlotsDiscountDTO::class => FlexibleBundleSlotsDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleSlotDiscountDTO::class => FlexibleBundleSlotDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\FlexibleBundleMarketplaceDiscountDTO::class => FlexibleBundleMarketplaceDiscountDTONormalizer::class,

        \Em411\Allegro\Api\Model\SellerCreateRebateRequestDto::class => SellerCreateRebateRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SellerRebateDto::class => SellerRebateDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SellerRebatesDto::class => SellerRebatesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRate::class => ShippingRateNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRateDeliveryMethod::class => ShippingRateDeliveryMethodNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRateMaxPackageWeight::class => ShippingRateMaxPackageWeightNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRateFirstItemRate::class => ShippingRateFirstItemRateNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRateShippingTime::class => ShippingRateShippingTimeNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRates::class => ShippingRatesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferShippingRates::class => OfferShippingRatesNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingRatesSet::class => ShippingRatesSetNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsResponse::class => DeliverySettingsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsResponseMarketplace::class => DeliverySettingsResponseMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsResponseFreeDelivery::class => DeliverySettingsResponseFreeDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsResponseAbroadFreeDelivery::class => DeliverySettingsResponseAbroadFreeDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsResponseJoinPolicy::class => DeliverySettingsResponseJoinPolicyNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsRequest::class => DeliverySettingsRequestNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsRequestMarketplace::class => DeliverySettingsRequestMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsRequestFreeDelivery::class => DeliverySettingsRequestFreeDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsRequestAbroadFreeDelivery::class => DeliverySettingsRequestAbroadFreeDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\DeliverySettingsRequestJoinPolicy::class => DeliverySettingsRequestJoinPolicyNormalizer::class,

        \Em411\Allegro\Api\Model\StandardizedDescription::class => StandardizedDescriptionNormalizer::class,

        \Em411\Allegro\Api\Model\Discounts::class => DiscountsNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountsWholesalePriceList::class => DiscountsWholesalePriceListNormalizer::class,

        \Em411\Allegro\Api\Model\Stock::class => StockNormalizer::class,

        \Em411\Allegro\Api\Model\TaskCount::class => TaskCountNormalizer::class,

        \Em411\Allegro\Api\Model\TaskReport::class => TaskReportNormalizer::class,

        \Em411\Allegro\Api\Model\TaskWithSubjectReport::class => TaskWithSubjectReportNormalizer::class,

        \Em411\Allegro\Api\Model\User::class => UserNormalizer::class,

        \Em411\Allegro\Api\Model\UserRating::class => UserRatingNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingListResponse::class => UserRatingListResponseNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingVBeta1::class => UserRatingVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\UserRatingListResponseVBeta1::class => UserRatingListResponseVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponse::class => UserRatingSummaryResponseNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseNotRecommended::class => UserRatingSummaryResponseNotRecommendedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseRecommended::class => UserRatingSummaryResponseRecommendedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2::class => UserRatingSummaryResponseV2Normalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Recommended::class => UserRatingSummaryResponseV2RecommendedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2NotRecommended::class => UserRatingSummaryResponseV2NotRecommendedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Statistics::class => UserRatingSummaryResponseV2StatisticsNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsReceived::class => UserRatingSummaryResponseV2StatisticsReceivedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsExcluded::class => UserRatingSummaryResponseV2StatisticsExcludedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsRemoved::class => UserRatingSummaryResponseV2StatisticsRemovedNormalizer::class,

        \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2User::class => UserRatingSummaryResponseV2UserNormalizer::class,

        \Em411\Allegro\Api\Model\Validation::class => ValidationNormalizer::class,

        \Em411\Allegro\Api\Model\ValidationError::class => ValidationErrorNormalizer::class,

        \Em411\Allegro\Api\Model\ValidationWarning::class => ValidationWarningNormalizer::class,

        \Em411\Allegro\Api\Model\WarrantyBasic::class => WarrantyBasicNormalizer::class,

        \Em411\Allegro\Api\Model\DescribesListingFee::class => DescribesListingFeeNormalizer::class,

        \Em411\Allegro\Api\Model\DescribesSuccessCommissionFee::class => DescribesSuccessCommissionFeeNormalizer::class,

        \Em411\Allegro\Api\Model\ImpliedWarrantiesListImpliedWarrantyBasic::class => ImpliedWarrantiesListImpliedWarrantyBasicNormalizer::class,

        \Em411\Allegro\Api\Model\ParametersForPreviewPrice::class => ParametersForPreviewPriceNormalizer::class,

        \Em411\Allegro\Api\Model\PublicationModification::class => PublicationModificationNormalizer::class,

        \Em411\Allegro\Api\Model\ReturnPoliciesListReturnPolicyV1::class => ReturnPoliciesListReturnPolicyV1Normalizer::class,

        \Em411\Allegro\Api\Model\WarrantiesListWarrantyBasic::class => WarrantiesListWarrantyBasicNormalizer::class,

        \Em411\Allegro\Api\Model\WrapperTypeForPreviewConditions::class => WrapperTypeForPreviewConditionsNormalizer::class,

        \Em411\Allegro\Api\Model\WrapsListingAndCommissionsFees::class => WrapsListingAndCommissionsFeesNormalizer::class,

        \Em411\Allegro\Api\Model\ListingOffer::class => ListingOfferNormalizer::class,

        \Em411\Allegro\Api\Model\ListingCategoryWithCount::class => ListingCategoryWithCountNormalizer::class,

        \Em411\Allegro\Api\Model\ListingCategory::class => ListingCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\OfferSeller::class => OfferSellerNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStock::class => OfferStockNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPromotion::class => OfferPromotionNormalizer::class,

        \Em411\Allegro\Api\Model\OfferLowestPrice::class => OfferLowestPriceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPrice::class => OfferPriceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferFixedPrice::class => OfferFixedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferDelivery::class => OfferDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\OfferImages::class => OfferImagesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferSellingMode::class => OfferSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\OfferVendor::class => OfferVendorNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPublication::class => OfferPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseOffers::class => ListingResponseOffersNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseCategories::class => ListingResponseCategoriesNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseFiltersValues::class => ListingResponseFiltersValuesNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseFilters::class => ListingResponseFiltersNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseSearchMeta::class => ListingResponseSearchMetaNormalizer::class,

        \Em411\Allegro\Api\Model\ListingResponseSort::class => ListingResponseSortNormalizer::class,

        \Em411\Allegro\Api\Model\OfferAdditionalServices::class => OfferAdditionalServicesNormalizer::class,

        \Em411\Allegro\Api\Model\OffersSearchResultDto::class => OffersSearchResultDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDto::class => OfferListingDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoImage::class => OfferListingDtoImageNormalizer::class,

        \Em411\Allegro\Api\Model\SellingMode::class => SellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\SellingModeWithNetPrice::class => SellingModeWithNetPriceNormalizer::class,

        \Em411\Allegro\Api\Model\BuyNowPrice::class => BuyNowPriceNormalizer::class,

        \Em411\Allegro\Api\Model\MinimalPrice::class => MinimalPriceNormalizer::class,

        \Em411\Allegro\Api\Model\StartingPrice::class => StartingPriceNormalizer::class,

        \Em411\Allegro\Api\Model\NetPrice::class => NetPriceNormalizer::class,

        \Em411\Allegro\Api\Model\CurrentPrice::class => CurrentPriceNormalizer::class,

        \Em411\Allegro\Api\Model\MaxPrice::class => MaxPriceNormalizer::class,

        \Em411\Allegro\Api\Model\PriceAutomation::class => PriceAutomationNormalizer::class,

        \Em411\Allegro\Api\Model\PriceAutomationRule::class => PriceAutomationRuleNormalizer::class,

        \Em411\Allegro\Api\Model\Tax::class => TaxNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTaxSettings::class => OfferTaxSettingsNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTaxRate::class => OfferTaxRateNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1B2b::class => OfferListingDtoV1B2bNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1Delivery::class => OfferListingDtoV1DeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1SellingMode::class => OfferListingDtoV1SellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1SaleInfo::class => OfferListingDtoV1SaleInfoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1Stock::class => OfferListingDtoV1StockNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1Stats::class => OfferListingDtoV1StatsNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1Publication::class => OfferListingDtoV1PublicationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1PublicationMarketplaces::class => OfferListingDtoV1PublicationMarketplacesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1PublicationMarketplacesBase::class => OfferListingDtoV1PublicationMarketplacesBaseNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceReference::class => MarketplaceReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace::class => OfferListingDtoV1AdditionalMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplacePublication::class => OfferListingDtoV1AdditionalMarketplacePublicationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceSellingMode::class => OfferListingDtoV1AdditionalMarketplaceSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation::class => OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceStats::class => OfferListingDtoV1AdditionalMarketplaceStatsNormalizer::class,

        \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceStock::class => OfferListingDtoV1AdditionalMarketplaceStockNormalizer::class,

        \Em411\Allegro\Api\Model\OrderEventsList::class => OrderEventsListNormalizer::class,

        \Em411\Allegro\Api\Model\OrderEvent::class => OrderEventNormalizer::class,

        \Em411\Allegro\Api\Model\OrderEventData::class => OrderEventDataNormalizer::class,

        \Em411\Allegro\Api\Model\SellerReference::class => SellerReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferReference::class => OfferReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferProductSetReference::class => OfferProductSetReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferProductSetProductReference::class => OfferProductSetProductReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\BuyerReference::class => BuyerReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\BuyerPreferencesReference::class => BuyerPreferencesReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OrderLineItem::class => OrderLineItemNormalizer::class,

        \Em411\Allegro\Api\Model\OrderLineItemOfferReference::class => OrderLineItemOfferReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\OrderEventStats::class => OrderEventStatsNormalizer::class,

        \Em411\Allegro\Api\Model\LatestOrderEvent::class => LatestOrderEventNormalizer::class,

        \Em411\Allegro\Api\Model\OrderMarketplace::class => OrderMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormReference::class => CheckoutFormReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutForms::class => CheckoutFormsNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutForm::class => CheckoutFormNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormBuyerReference::class => CheckoutFormBuyerReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormBuyerAddressReference::class => CheckoutFormBuyerAddressReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class => CheckoutFormPaymentReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormCodBookedPayment::class => CheckoutFormCodBookedPaymentNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormFulfillment::class => CheckoutFormFulfillmentNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormFulfillmentShipmentSummary::class => CheckoutFormFulfillmentShipmentSummaryNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormFulfillmentProvider::class => CheckoutFormFulfillmentProviderNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryReference::class => CheckoutFormDeliveryReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryAddress::class => CheckoutFormDeliveryAddressNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryMethod::class => CheckoutFormDeliveryMethodNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryPickupPoint::class => CheckoutFormDeliveryPickupPointNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryPickupPointAddress::class => CheckoutFormDeliveryPickupPointAddressNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryTime::class => CheckoutFormDeliveryTimeNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryTimeGuaranteed::class => CheckoutFormDeliveryTimeGuaranteedNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryTimeDispatch::class => CheckoutFormDeliveryTimeDispatchNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormDeliveryCancellation::class => CheckoutFormDeliveryCancellationNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormInvoiceInfo::class => CheckoutFormInvoiceInfoNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddress::class => CheckoutFormInvoiceAddressNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddressCompany::class => CheckoutFormInvoiceAddressCompanyNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddressCompanyId::class => CheckoutFormInvoiceAddressCompanyIdNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddressNaturalPerson::class => CheckoutFormInvoiceAddressNaturalPersonNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItem::class => CheckoutFormLineItemNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemAllegroAds::class => LineItemAllegroAdsNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemDeposit::class => LineItemDepositNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemReconciliation::class => LineItemReconciliationNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormAdditionalService::class => CheckoutFormAdditionalServiceNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemVoucher::class => LineItemVoucherNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemVoucherValue::class => LineItemVoucherValueNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemTax::class => CheckoutFormLineItemTaxNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemsSetSerialNumbersRequest::class => CheckoutFormLineItemsSetSerialNumbersRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemSetSerialNumbersRequest::class => CheckoutFormLineItemSetSerialNumbersRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemSetSerialNumbersEntriesRequest::class => CheckoutFormLineItemSetSerialNumbersEntriesRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemSetSerialNumbersEntryRequest::class => CheckoutFormLineItemSetSerialNumbersEntryRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemSerialNumbers::class => CheckoutFormLineItemSerialNumbersNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormLineItemSerialNumbersEntry::class => CheckoutFormLineItemSerialNumbersEntryNormalizer::class,

        \Em411\Allegro\Api\Model\LineItemDiscount::class => LineItemDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormNoteReference::class => CheckoutFormNoteReferenceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormMarketplace::class => CheckoutFormMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormSummary::class => CheckoutFormSummaryNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormSummaryTotalToPay::class => CheckoutFormSummaryTotalToPayNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoices::class => CheckoutFormsOrderInvoicesNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoice::class => CheckoutFormsOrderInvoiceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderLink::class => CheckoutFormsOrderLinkNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFile::class => CheckoutFormsOrderInvoiceFileNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFileSecurityVerification::class => CheckoutFormsOrderInvoiceFileSecurityVerificationNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFileVerification::class => CheckoutFormsOrderInvoiceFileVerificationNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFileVerificationDetails::class => CheckoutFormsOrderInvoiceFileVerificationDetailsNormalizer::class,

        \Em411\Allegro\Api\Model\CheckFormsNewOrderInvoice::class => CheckFormsNewOrderInvoiceNormalizer::class,

        \Em411\Allegro\Api\Model\CheckFormsNewOrderInvoiceFile::class => CheckFormsNewOrderInvoiceFileNormalizer::class,

        \Em411\Allegro\Api\Model\CheckFormsNewOrderInvoiceId::class => CheckFormsNewOrderInvoiceIdNormalizer::class,

        \Em411\Allegro\Api\Model\NewOrderInvoiceFileWithMetadata::class => NewOrderInvoiceFileWithMetadataNormalizer::class,

        \Em411\Allegro\Api\Model\NewOrderBillingDocumentLink::class => NewOrderBillingDocumentLinkNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueAttachmentId::class => PostPurchaseIssueAttachmentIdNormalizer::class,

        \Em411\Allegro\Api\Model\AttachmentDeclaration::class => AttachmentDeclarationNormalizer::class,

        \Em411\Allegro\Api\Model\MessageRequest::class => MessageRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ClaimStatusChangeRequest::class => ClaimStatusChangeRequestNormalizer::class,

        \Em411\Allegro\Api\Model\TagRequest::class => TagRequestNormalizer::class,

        \Em411\Allegro\Api\Model\TagId::class => TagIdNormalizer::class,

        \Em411\Allegro\Api\Model\TagResponse::class => TagResponseNormalizer::class,

        \Em411\Allegro\Api\Model\TagListResponse::class => TagListResponseNormalizer::class,

        \Em411\Allegro\Api\Model\TagIdsRequest::class => TagIdsRequestNormalizer::class,

        \Em411\Allegro\Api\Model\PromotionResponseDto::class => PromotionResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CampaignResponseDto::class => CampaignResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SinglePromotionCampaignResponseDto::class => SinglePromotionCampaignResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PromotionCampaignsResponseDto::class => PromotionCampaignsResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PromotionCampaignResponseDto::class => PromotionCampaignResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CampaignRequestDto::class => CampaignRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PromotionRequestDto::class => PromotionRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormAddWaybillRequest::class => CheckoutFormAddWaybillRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormAddWaybillRequestLineItemsItem::class => CheckoutFormAddWaybillRequestLineItemsItemNormalizer::class,

        \Em411\Allegro\Api\Model\OrdersShippingCarrier::class => OrdersShippingCarrierNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormAddWaybillCreated::class => CheckoutFormAddWaybillCreatedNormalizer::class,

        \Em411\Allegro\Api\Model\OrdersShippingCarriersResponse::class => OrdersShippingCarriersResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CheckoutFormOrderWaybillResponse::class => CheckoutFormOrderWaybillResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointsResponse::class => AllegroPickupDropOffPointsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CarrierParcelTrackingResponse::class => CarrierParcelTrackingResponseNormalizer::class,

        \Em411\Allegro\Api\Model\GetSaleProductsResponse::class => GetSaleProductsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\GetSaleProductsResponseNextPage::class => GetSaleProductsResponseNextPageNormalizer::class,

        \Em411\Allegro\Api\Model\ProductProposalsRequest::class => ProductProposalsRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductChangeProposalDto::class => ProductChangeProposalDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductImageProposal::class => ProductImageProposalNormalizer::class,

        \Em411\Allegro\Api\Model\ProductNameProposal::class => ProductNameProposalNormalizer::class,

        \Em411\Allegro\Api\Model\ProductCategoryProposal::class => ProductCategoryProposalNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameterProposal::class => ProductParameterProposalNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameterValueProposal::class => ProductParameterValueProposalNormalizer::class,

        \Em411\Allegro\Api\Model\ProductChangeProposalRequest::class => ProductChangeProposalRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductChangesResponse::class => ProductChangesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductChangeDto::class => ProductChangeDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductChangeDtoProduct::class => ProductChangeDtoProductNormalizer::class,

        \Em411\Allegro\Api\Model\ChangedParameterDto::class => ChangedParameterDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductDto::class => SaleProductDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductDtoPublication::class => SaleProductDtoPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\ProductProposalsResponse::class => ProductProposalsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductProposalsResponseCategory::class => ProductProposalsResponseCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\ProductProposalsResponseCategorySimilarItem::class => ProductProposalsResponseCategorySimilarItemNormalizer::class,

        \Em411\Allegro\Api\Model\ProductProposalsResponsePublication::class => ProductProposalsResponsePublicationNormalizer::class,

        \Em411\Allegro\Api\Model\BaseSaleProductResponseDto::class => BaseSaleProductResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\BaseSaleProductResponseDtoPublication::class => BaseSaleProductResponseDtoPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductSafetyDto::class => SaleProductSafetyDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductCategoryWithPath::class => ProductCategoryWithPathNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSimilarCategoryWithPath::class => ProductSimilarCategoryWithPathNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductCompatibilityList::class => SaleProductCompatibilityListNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductResponseCategoriesDto::class => SaleProductResponseCategoriesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductsCategorySubcategories::class => ProductsCategorySubcategoriesNormalizer::class,

        \Em411\Allegro\Api\Model\ProductsCategoryPath::class => ProductsCategoryPathNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameter::class => ProductParameterNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameterOptions::class => ProductParameterOptionsNormalizer::class,

        \Em411\Allegro\Api\Model\NewProductParameterDto::class => NewProductParameterDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameterDto::class => ProductParameterDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParameterDtoOptions::class => ProductParameterDtoOptionsNormalizer::class,

        \Em411\Allegro\Api\Model\AiCoCreatedContent::class => AiCoCreatedContentNormalizer::class,

        \Em411\Allegro\Api\Model\ProductAiCoCreatedContent::class => ProductAiCoCreatedContentNormalizer::class,

        \Em411\Allegro\Api\Model\AiCoCreatedImage::class => AiCoCreatedImageNormalizer::class,

        \Em411\Allegro\Api\Model\TrustedContent::class => TrustedContentNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOffer::class => SaleProductOfferNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferSizeTable::class => SaleProductOfferSizeTableNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferTaxSettings::class => SaleProductOfferTaxSettingsNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferMessageToSellerSettings::class => SaleProductOfferMessageToSellerSettingsNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBase::class => SaleProductOfferRequestBaseNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBaseCategory::class => SaleProductOfferRequestBaseCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBasePublication::class => SaleProductOfferRequestBasePublicationNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBaseDelivery::class => SaleProductOfferRequestBaseDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBaseSizeTable::class => SaleProductOfferRequestBaseSizeTableNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestBaseContact::class => SaleProductOfferRequestBaseContactNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOffersRequestStock::class => SaleProductOffersRequestStockNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestV1::class => SaleProductOfferRequestV1Normalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestV1ProductSetItem::class => SaleProductOfferRequestV1ProductSetItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestV1Delivery::class => SaleProductOfferRequestV1DeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferRequestV1CompatibilityList::class => SaleProductOfferRequestV1CompatibilityListNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1::class => SaleProductOfferPatchRequestV1Normalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1ProductSetItem::class => SaleProductOfferPatchRequestV1ProductSetItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1CompatibilityList::class => SaleProductOfferPatchRequestV1CompatibilityListNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1Delivery::class => SaleProductOfferPatchRequestV1DeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1::class => SaleProductOfferResponseV1Normalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem::class => SaleProductOfferResponseV1ProductSetItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemProduct::class => SaleProductOfferResponseV1ProductSetItemProductNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemResponsiblePerson::class => SaleProductOfferResponseV1ProductSetItemResponsiblePersonNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemResponsibleProducer::class => SaleProductOfferResponseV1ProductSetItemResponsibleProducerNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1FundraisingCampaign::class => SaleProductOfferResponseV1FundraisingCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1AdditionalServices::class => SaleProductOfferResponseV1AdditionalServicesNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1AfterSalesServices::class => SaleProductOfferResponseV1AfterSalesServicesNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1Stock::class => SaleProductOfferResponseV1StockNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferResponseV1Contact::class => SaleProductOfferResponseV1ContactNormalizer::class,

        \Em411\Allegro\Api\Model\SalePartialProductOfferResponse::class => SalePartialProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SalePartialProductOfferResponseStock::class => SalePartialProductOfferResponseStockNormalizer::class,

        \Em411\Allegro\Api\Model\SalePartialProductOfferResponseSellingMode::class => SalePartialProductOfferResponseSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\SalePartialProductOfferResponseAdditionalMarketplacesItem::class => SalePartialProductOfferResponseAdditionalMarketplacesItemNormalizer::class,

        \Em411\Allegro\Api\Model\SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode::class => SalePartialProductOfferResponseAdditionalMarketplacesItemSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferStatusResponse::class => SaleProductOfferStatusResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferStatusResponseOperation::class => SaleProductOfferStatusResponseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferBase::class => ProductOfferBaseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOffer::class => ProductOfferNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElement::class => ProductSetElementNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementQuantity::class => ProductSetElementQuantityNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementQuantityQuantity::class => ProductSetElementQuantityQuantityNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsiblePersonRequest::class => ProductSetElementResponsiblePersonRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsiblePersonRequestResponsiblePerson::class => ProductSetElementResponsiblePersonRequestResponsiblePersonNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsibleProducerRequestWrapper::class => ProductSetElementResponsibleProducerRequestWrapperNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsibleProducerRequest::class => ProductSetElementResponsibleProducerRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsibleProducerIdRequest::class => ProductSetElementResponsibleProducerIdRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementResponsibleProducerNameRequest::class => ProductSetElementResponsibleProducerNameRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementSafetyInformationRequest::class => ProductSetElementSafetyInformationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementSafetyInformationResponse::class => ProductSetElementSafetyInformationResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AttachmentsSafetyInformation::class => AttachmentsSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\AttachmentsSafetyInformationAttachmentsItem::class => AttachmentsSafetyInformationAttachmentsItemNormalizer::class,

        \Em411\Allegro\Api\Model\TextSafetyInformation::class => TextSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\NoSafetyInformation::class => NoSafetyInformationNormalizer::class,

        \Em411\Allegro\Api\Model\MarketedBeforeGPSRObligation::class => MarketedBeforeGPSRObligationNormalizer::class,

        \Em411\Allegro\Api\Model\ProductDeposit::class => ProductDepositNormalizer::class,

        \Em411\Allegro\Api\Model\ProductDepositPrice::class => ProductDepositPriceNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementDeposits::class => ProductSetElementDepositsNormalizer::class,

        \Em411\Allegro\Api\Model\Ingredient::class => IngredientNormalizer::class,

        \Em411\Allegro\Api\Model\Component::class => ComponentNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementCompositionRequest::class => ProductSetElementCompositionRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementCompositionRequestComposition::class => ProductSetElementCompositionRequestCompositionNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementCompositionResponse::class => ProductSetElementCompositionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSetElementCompositionResponseComposition::class => ProductSetElementCompositionResponseCompositionNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferResponse::class => ProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductOfferResponsePublication::class => ProductOfferResponsePublicationNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesProductOfferRequest::class => AfterSalesServicesProductOfferRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesProductOfferRequestImpliedWarranty::class => AfterSalesServicesProductOfferRequestImpliedWarrantyNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesProductOfferRequestReturnPolicy::class => AfterSalesServicesProductOfferRequestReturnPolicyNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServicesProductOfferRequestWarranty::class => AfterSalesServicesProductOfferRequestWarrantyNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryProductOfferRequest::class => DeliveryProductOfferRequestNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryProductOfferRequestShippingRates::class => DeliveryProductOfferRequestShippingRatesNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryProductOfferResponse::class => DeliveryProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryProductOfferResponseShippingRates::class => DeliveryProductOfferResponseShippingRatesNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPublicationMarketplacesResponse::class => SaleProductOfferPublicationMarketplacesResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPublicationMarketplacesResponseBase::class => SaleProductOfferPublicationMarketplacesResponseBaseNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPublicationRequest::class => SaleProductOfferPublicationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse::class => SaleProductOfferPublicationResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesRequestItem::class => AdditionalMarketplacesRequestItemNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesRequestItemSellingMode::class => AdditionalMarketplacesRequestItemSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesRequestItemSellingModePrice::class => AdditionalMarketplacesRequestItemSellingModePriceNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesResponseItem::class => AdditionalMarketplacesResponseItemNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesResponseItemSellingMode::class => AdditionalMarketplacesResponseItemSellingModeNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesResponseItemPublication::class => AdditionalMarketplacesResponseItemPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesRefusalReasonResponse::class => AdditionalMarketplacesRefusalReasonResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ParameterProductOfferRequest::class => ParameterProductOfferRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ParameterProductOfferResponse::class => ParameterProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ParameterProductOfferResponseRangeValue::class => ParameterProductOfferResponseRangeValueNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountsProductOfferRequest::class => DiscountsProductOfferRequestNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountsProductOfferRequestWholesalePriceList::class => DiscountsProductOfferRequestWholesalePriceListNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountsProductOfferResponse::class => DiscountsProductOfferResponseNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountsProductOfferResponseWholesalePriceList::class => DiscountsProductOfferResponseWholesalePriceListNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRequirements::class => OfferRequirementsNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalEmailsResponse::class => AdditionalEmailsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalEmail::class => AdditionalEmailNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalEmailRequest::class => AdditionalEmailRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPackages::class => ClassifiedPackagesNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedResponse::class => ClassifiedResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedExtension::class => ClassifiedExtensionNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPackageConfig::class => ClassifiedPackageConfigNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPackageConfigs::class => ClassifiedPackageConfigsNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPromotion::class => ClassifiedPromotionNormalizer::class,

        \Em411\Allegro\Api\Model\ClassifiedPublication::class => ClassifiedPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\PaymentOperations::class => PaymentOperationsNormalizer::class,

        \Em411\Allegro\Api\Model\BaseOperation::class => BaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\Wallet::class => WalletNormalizer::class,

        \Em411\Allegro\Api\Model\WalletBalance::class => WalletBalanceNormalizer::class,

        \Em411\Allegro\Api\Model\OperationValue::class => OperationValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundDeliveryValue::class => RefundDeliveryValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundOverpaidValue::class => RefundOverpaidValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundAdditionalServicesValue::class => RefundAdditionalServicesValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundSurchargeValue::class => RefundSurchargeValueNormalizer::class,

        \Em411\Allegro\Api\Model\RefundTotalValue::class => RefundTotalValueNormalizer::class,

        \Em411\Allegro\Api\Model\CorrectionOperation::class => CorrectionOperationNormalizer::class,

        \Em411\Allegro\Api\Model\ContributionOperation::class => ContributionOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutOperation::class => PayoutOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutOperationCancel::class => PayoutOperationCancelNormalizer::class,

        \Em411\Allegro\Api\Model\RefundIncreaseOperation::class => RefundIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\RefundCancelOperation::class => RefundCancelOperationNormalizer::class,

        \Em411\Allegro\Api\Model\RefundChargeOperation::class => RefundChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\SurchargeOperation::class => SurchargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\DeductionChargeOperation::class => DeductionChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\DeductionIncreaseOperation::class => DeductionIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\LoanDeductionChargeOperation::class => LoanDeductionChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\LoanDeductionIncreaseOperation::class => LoanDeductionIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\CompensationCodChargeOperation::class => CompensationCodChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\CompensationCodIncreaseOperation::class => CompensationCodIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\BlockadeOperation::class => BlockadeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\BlockadeReleaseOperation::class => BlockadeReleaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\ProviderRefundTransferIncreaseOperation::class => ProviderRefundTransferIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\ProviderRefundTransferChargeOperation::class => ProviderRefundTransferChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\CompensationOperation::class => CompensationOperationNormalizer::class,

        \Em411\Allegro\Api\Model\TopUpOperation::class => TopUpOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutSweepIncreaseOperation::class => PayoutSweepIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutSweepChargeOperation::class => PayoutSweepChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutSweepCancelIncreaseOperation::class => PayoutSweepCancelIncreaseOperationNormalizer::class,

        \Em411\Allegro\Api\Model\PayoutSweepCancelChargeOperation::class => PayoutSweepCancelChargeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\OperationPayment::class => OperationPaymentNormalizer::class,

        \Em411\Allegro\Api\Model\Participant::class => ParticipantNormalizer::class,

        \Em411\Allegro\Api\Model\SellerParticipant::class => SellerParticipantNormalizer::class,

        \Em411\Allegro\Api\Model\BuyerParticipant::class => BuyerParticipantNormalizer::class,

        \Em411\Allegro\Api\Model\OperationParticipantAddress::class => OperationParticipantAddressNormalizer::class,

        \Em411\Allegro\Api\Model\Payout::class => PayoutNormalizer::class,

        \Em411\Allegro\Api\Model\Surcharge::class => SurchargeNormalizer::class,

        \Em411\Allegro\Api\Model\Deduction::class => DeductionNormalizer::class,

        \Em411\Allegro\Api\Model\TecdocSpecification::class => TecdocSpecificationNormalizer::class,

        \Em411\Allegro\Api\Model\TecdocSpecificationItem::class => TecdocSpecificationItemNormalizer::class,

        \Em411\Allegro\Api\Model\MeResponse::class => MeResponseNormalizer::class,

        \Em411\Allegro\Api\Model\MeResponseBaseMarketplace::class => MeResponseBaseMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\Company::class => CompanyNormalizer::class,

        \Em411\Allegro\Api\Model\MyBidResponse::class => MyBidResponseNormalizer::class,

        \Em411\Allegro\Api\Model\MyBidResponseAuction::class => MyBidResponseAuctionNormalizer::class,

        \Em411\Allegro\Api\Model\SellerOfferEventsResponse::class => SellerOfferEventsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SellerOfferBaseEvent::class => SellerOfferBaseEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferActivatedEvent::class => OfferActivatedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferChangedEvent::class => OfferChangedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEndedEvent::class => OfferEndedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStockChangedEvent::class => OfferStockChangedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPriceChangedEvent::class => OfferPriceChangedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferArchivedEvent::class => OfferArchivedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBidPlacedEvent::class => OfferBidPlacedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBidCanceledEvent::class => OfferBidCanceledEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTranslationUpdatedEvent::class => OfferTranslationUpdatedEventNormalizer::class,

        \Em411\Allegro\Api\Model\ChangedTranslation::class => ChangedTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferDeliveryCountriesChangedEvent::class => OfferDeliveryCountriesChangedEventNormalizer::class,

        \Em411\Allegro\Api\Model\BlockedDelivery::class => BlockedDeliveryNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingBlockade::class => ShippingBlockadeNormalizer::class,

        \Em411\Allegro\Api\Model\OfferVisibilityChangedEvent::class => OfferVisibilityChangedEventNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventBaseOffer::class => OfferEventBaseOfferNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventExternalOffer::class => OfferEventExternalOfferNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventExternalOfferWithPublication::class => OfferEventExternalOfferWithPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventExternalOfferForPriceChanges::class => OfferEventExternalOfferForPriceChangesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferMarketplacesPriceChanges::class => OfferMarketplacesPriceChangesNormalizer::class,

        \Em411\Allegro\Api\Model\OfferMarketplacesPublication::class => OfferMarketplacesPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplacesVisibility::class => MarketplacesVisibilityNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacesVisibility::class => AdditionalMarketplacesVisibilityNormalizer::class,

        \Em411\Allegro\Api\Model\RefusalReason::class => RefusalReasonNormalizer::class,

        \Em411\Allegro\Api\Model\RelatedReason::class => RelatedReasonNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventEndedOffer::class => OfferEventEndedOfferNormalizer::class,

        \Em411\Allegro\Api\Model\OfferEventEndedOfferPublication::class => OfferEventEndedOfferPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\GetBadgeCampaignsList::class => GetBadgeCampaignsListNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeCampaign::class => BadgeCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\UserCampaignEligibility::class => UserCampaignEligibilityNormalizer::class,

        \Em411\Allegro\Api\Model\CampaignRefusalReason::class => CampaignRefusalReasonNormalizer::class,

        \Em411\Allegro\Api\Model\RefusalMessage::class => RefusalMessageNormalizer::class,

        \Em411\Allegro\Api\Model\ApplicationTimePolicy::class => ApplicationTimePolicyNormalizer::class,

        \Em411\Allegro\Api\Model\VisibilityTimePolicy::class => VisibilityTimePolicyNormalizer::class,

        \Em411\Allegro\Api\Model\PublicationTimePolicy::class => PublicationTimePolicyNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePublicationTimePolicy::class => BadgePublicationTimePolicyNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationRequest::class => BadgeApplicationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationCampaign::class => BadgeApplicationCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\OfferBadgeCampaign::class => OfferBadgeCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationOffer::class => BadgeApplicationOfferNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePrices::class => BadgePricesNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationPrices::class => BadgeApplicationPricesNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePatchProcess::class => BadgePatchProcessNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePatchProcessProcess::class => BadgePatchProcessProcessNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePatchPrices::class => BadgePatchPricesNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePatchPricesPrices::class => BadgePatchPricesPricesNormalizer::class,

        \Em411\Allegro\Api\Model\BadgePatchPricesPricesBargain::class => BadgePatchPricesPricesBargainNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeMarketPrice::class => BadgeMarketPriceNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationBargainPrice::class => BadgeApplicationBargainPriceNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeSubsidyPrices::class => BadgeSubsidyPricesNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationSubsidyTargetPrice::class => BadgeApplicationSubsidyTargetPriceNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationSubsidySellerPrice::class => BadgeApplicationSubsidySellerPriceNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationPurchaseConstraints::class => BadgeApplicationPurchaseConstraintsNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationDeclaredStock::class => BadgeApplicationDeclaredStockNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationPurchaseConstraintsLimit::class => BadgeApplicationPurchaseConstraintsLimitNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationPurchaseConstraintsLimitPerUser::class => BadgeApplicationPurchaseConstraintsLimitPerUserNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplications::class => BadgeApplicationsNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplication::class => BadgeApplicationNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationProcess::class => BadgeApplicationProcessNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationRejectionReason::class => BadgeApplicationRejectionReasonNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeApplicationRejectionReasonMessage::class => BadgeApplicationRejectionReasonMessageNormalizer::class,

        \Em411\Allegro\Api\Model\BadgesList::class => BadgesListNormalizer::class,

        \Em411\Allegro\Api\Model\Badge::class => BadgeNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeProcess::class => BadgeProcessNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeCampaignStock::class => BadgeCampaignStockNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeOperation::class => BadgeOperationNormalizer::class,

        \Em411\Allegro\Api\Model\BadgeOperationProcess::class => BadgeOperationProcessNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRating::class => OfferRatingNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRatingScoreDistributionItem::class => OfferRatingScoreDistributionItemNormalizer::class,

        \Em411\Allegro\Api\Model\OfferRatingSizeFeedbackItem::class => OfferRatingSizeFeedbackItemNormalizer::class,

        \Em411\Allegro\Api\Model\FundraisingCampaigns::class => FundraisingCampaignsNormalizer::class,

        \Em411\Allegro\Api\Model\FundraisingCampaign::class => FundraisingCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\CharityOrganization::class => CharityOrganizationNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelAdditionalServicesAvailability::class => ParcelAdditionalServicesAvailabilityNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelAdditionalServicesCashOnDeliveryAvailability::class => ParcelAdditionalServicesCashOnDeliveryAvailabilityNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelAdditionalServicesOptionAvailability::class => ParcelAdditionalServicesOptionAvailabilityNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelCreationAddress::class => ParcelCreationAddressNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelCreationAddressWithMandatoryPlace::class => ParcelCreationAddressWithMandatoryPlaceNormalizer::class,

        \Em411\Allegro\Api\Model\Error400::class => Error400Normalizer::class,

        \Em411\Allegro\Api\Model\Error403::class => Error403Normalizer::class,

        \Em411\Allegro\Api\Model\Error404::class => Error404Normalizer::class,

        \Em411\Allegro\Api\Model\Error504::class => Error504Normalizer::class,

        \Em411\Allegro\Api\Model\AvailablePromotionPackages::class => AvailablePromotionPackagesNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceAvailablePromotionPackages::class => MarketplaceAvailablePromotionPackagesNormalizer::class,

        \Em411\Allegro\Api\Model\AvailablePromotionPackage::class => AvailablePromotionPackageNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsModifications::class => PromoOptionsModificationsNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsModification::class => PromoOptionsModificationNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacePromoOptionsModification::class => AdditionalMarketplacePromoOptionsModificationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPromoOptionsForSeller::class => OfferPromoOptionsForSellerNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPromoOptions::class => OfferPromoOptionsNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceOfferPromoOption::class => MarketplaceOfferPromoOptionNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPromoOption::class => OfferPromoOptionNormalizer::class,

        \Em411\Allegro\Api\Model\OfferPromoOptionsPendingChanges::class => OfferPromoOptionsPendingChangesNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsCommand::class => PromoOptionsCommandNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsCommandModification::class => PromoOptionsCommandModificationNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsCommandModificationBasePackage::class => PromoOptionsCommandModificationBasePackageNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalMarketplacePromoOptionsCommandModification::class => AdditionalMarketplacePromoOptionsCommandModificationNormalizer::class,

        \Em411\Allegro\Api\Model\PromoOptionsCommandModificationPackage::class => PromoOptionsCommandModificationPackageNormalizer::class,

        \Em411\Allegro\Api\Model\PromoGeneralReport::class => PromoGeneralReportNormalizer::class,

        \Em411\Allegro\Api\Model\PromoModificationReport::class => PromoModificationReportNormalizer::class,

        \Em411\Allegro\Api\Model\PromoModificationTask::class => PromoModificationTaskNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPoint::class => AllegroPickupDropOffPointNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointServicesItem::class => AllegroPickupDropOffPointServicesItemNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointRestrictionsItem::class => AllegroPickupDropOffPointRestrictionsItemNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointPaymentsItem::class => AllegroPickupDropOffPointPaymentsItemNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointAddress::class => AllegroPickupDropOffPointAddressNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPickupDropOffPointOpeningItem::class => AllegroPickupDropOffPointOpeningItemNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroParcelTrackingHistory::class => AllegroParcelTrackingHistoryNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroParcelTrackingHistoryTrackingDetails::class => AllegroParcelTrackingHistoryTrackingDetailsNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelTrackingHistory::class => ParcelTrackingHistoryNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelTrackingHistoryTrackingDetails::class => ParcelTrackingHistoryTrackingDetailsNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroParcelTrackingStatus::class => AllegroParcelTrackingStatusNormalizer::class,

        \Em411\Allegro\Api\Model\ParcelTrackingStatus::class => ParcelTrackingStatusNormalizer::class,

        \Em411\Allegro\Api\Model\CategoryTaxSettings::class => CategoryTaxSettingsNormalizer::class,

        \Em411\Allegro\Api\Model\TaxSubject::class => TaxSubjectNormalizer::class,

        \Em411\Allegro\Api\Model\TaxRate::class => TaxRateNormalizer::class,

        \Em411\Allegro\Api\Model\TaxRateValue::class => TaxRateValueNormalizer::class,

        \Em411\Allegro\Api\Model\TaxExemption::class => TaxExemptionNormalizer::class,

        \Em411\Allegro\Api\Model\AccountParticipationMarketplaceRequest::class => AccountParticipationMarketplaceRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPricesAccountParticipationRequest::class => AllegroPricesAccountParticipationRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AccountParticipationMarketplace::class => AccountParticipationMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroPricesAccountParticipationResponse::class => AllegroPricesAccountParticipationResponseNormalizer::class,

        \Em411\Allegro\Api\Model\Marketplace::class => MarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\SellerDiscountDeclaration::class => SellerDiscountDeclarationNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyOfferToSubmit::class => SubsidyOfferToSubmitNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyOfferToSubmitMarketplace::class => SubsidyOfferToSubmitMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyOfferToSubmitSellerDiscountDeclaration::class => SubsidyOfferToSubmitSellerDiscountDeclarationNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidySubmitOffersCommand::class => SubsidySubmitOffersCommandNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyManageOffersCommandResult::class => SubsidyManageOffersCommandResultNormalizer::class,

        \Em411\Allegro\Api\Model\OfferError::class => OfferErrorNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidySubmitOfferItem::class => SubsidySubmitOfferItemNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidySubmitOfferItemMarketplace::class => SubsidySubmitOfferItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidySubmitOfferItemSellerDiscountDeclaration::class => SubsidySubmitOfferItemSellerDiscountDeclarationNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidySubmitOffersCommandPreview::class => SubsidySubmitOffersCommandPreviewNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyOfferToExclude::class => SubsidyOfferToExcludeNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyOfferToExcludeMarketplace::class => SubsidyOfferToExcludeMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyExcludeOffersCommand::class => SubsidyExcludeOffersCommandNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyExcludeOfferItem::class => SubsidyExcludeOfferItemNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyExcludeOfferItemMarketplace::class => SubsidyExcludeOfferItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\SubsidyExcludeOffersCommandPreview::class => SubsidyExcludeOffersCommandPreviewNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceDto::class => MarketplaceDtoNormalizer::class,

        \Em411\Allegro\Api\Model\MoneyDto::class => MoneyDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeclaredPriceReductionDto::class => DeclaredPriceReductionDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeclaredPriceReductionDtoSellerMaxDeclaredDiscount::class => DeclaredPriceReductionDtoSellerMaxDeclaredDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\ActualPriceReductionDto::class => ActualPriceReductionDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ActualPriceReductionDtoSellerMaxDeclaredDiscount::class => ActualPriceReductionDtoSellerMaxDeclaredDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\ActualPriceReductionDtoSellerDiscount::class => ActualPriceReductionDtoSellerDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\ActualPriceReductionDtoAllegroDiscount::class => ActualPriceReductionDtoAllegroDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\ActualPriceReductionDtoFinalPriceForTheBuyer::class => ActualPriceReductionDtoFinalPriceForTheBuyerNormalizer::class,

        \Em411\Allegro\Api\Model\DiscountDto::class => DiscountDtoNormalizer::class,

        \Em411\Allegro\Api\Model\RecommendedPriceReductionDto::class => RecommendedPriceReductionDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferFilterDto::class => OfferFilterDtoNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceFilterDto::class => MarketplaceFilterDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusItemDto::class => OfferStatusItemDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusItemDtoMarketplace::class => OfferStatusItemDtoMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusItemDtoBasePrice::class => OfferStatusItemDtoBasePriceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusItemDtoDiscount::class => OfferStatusItemDtoDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusQueryRequestDto::class => OfferStatusQueryRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusQueryRequestDtoOffer::class => OfferStatusQueryRequestDtoOfferNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusQueryRequestDtoMarketplace::class => OfferStatusQueryRequestDtoMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\OfferStatusQueryResponseDto::class => OfferStatusQueryResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandRequest::class => AlleDiscountSubmitCommandRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandRequestInput::class => AlleDiscountSubmitCommandRequestInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandRequestInputOffer::class => AlleDiscountSubmitCommandRequestInputOfferNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandRequestInputCampaign::class => AlleDiscountSubmitCommandRequestInputCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandRequestInputProposedPrice::class => AlleDiscountSubmitCommandRequestInputProposedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponse::class => AlleDiscountSubmitCommandResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponseInput::class => AlleDiscountSubmitCommandResponseInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponseInputOffer::class => AlleDiscountSubmitCommandResponseInputOfferNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponseInputCampaign::class => AlleDiscountSubmitCommandResponseInputCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponseInputProposedPrice::class => AlleDiscountSubmitCommandResponseInputProposedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmitCommandResponseOutput::class => AlleDiscountSubmitCommandResponseOutputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponse::class => AlleDiscountGetSubmitCommandResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseInput::class => AlleDiscountGetSubmitCommandResponseInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseInputOffer::class => AlleDiscountGetSubmitCommandResponseInputOfferNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseInputCampaign::class => AlleDiscountGetSubmitCommandResponseInputCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseInputProposedPrice::class => AlleDiscountGetSubmitCommandResponseInputProposedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseOutput::class => AlleDiscountGetSubmitCommandResponseOutputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation::class => AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipationNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountWithdrawCommandRequest::class => AlleDiscountWithdrawCommandRequestNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountWithdrawCommandRequestInput::class => AlleDiscountWithdrawCommandRequestInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountWithdrawCommandResponse::class => AlleDiscountWithdrawCommandResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountWithdrawCommandResponseInput::class => AlleDiscountWithdrawCommandResponseInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountWithdrawCommandResponseOutput::class => AlleDiscountWithdrawCommandResponseOutputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetWithdrawCommandResponse::class => AlleDiscountGetWithdrawCommandResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetWithdrawCommandResponseInput::class => AlleDiscountGetWithdrawCommandResponseInputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetWithdrawCommandResponseOutput::class => AlleDiscountGetWithdrawCommandResponseOutputNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation::class => AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipationNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListEligibleResponse::class => AlleDiscountListEligibleResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDto::class => AlleDiscountEligibleOfferDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoProduct::class => AlleDiscountEligibleOfferDtoProductNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoBasePrice::class => AlleDiscountEligibleOfferDtoBasePriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class => AlleDiscountEligibleOfferDtoAlleDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions::class => AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem::class => AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItemNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount::class => AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListSubmittedResponse::class => AlleDiscountListSubmittedResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDto::class => AlleDiscountSubmittedOfferDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoOffer::class => AlleDiscountSubmittedOfferDtoOfferNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoCampaign::class => AlleDiscountSubmittedOfferDtoCampaignNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class => AlleDiscountSubmittedOfferDtoPricesNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class => AlleDiscountSubmittedOfferDtoPricesProposedPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class => AlleDiscountSubmittedOfferDtoPricesMinimalPriceReductionNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class => AlleDiscountSubmittedOfferDtoPricesMaximumSellingPriceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoProcess::class => AlleDiscountSubmittedOfferDtoProcessNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoProcessErrorsItem::class => AlleDiscountSubmittedOfferDtoProcessErrorsItemNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponse::class => AlleDiscountListCampaignsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class => AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility::class => AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibilityNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication::class => AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplicationNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication::class => AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublicationNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace::class => AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\AlleDiscountRequiredMerchantPriceDto::class => AlleDiscountRequiredMerchantPriceDtoNormalizer::class,

        \Em411\Allegro\Api\Model\Interlocutor::class => InterlocutorNormalizer::class,

        \Em411\Allegro\Api\Model\MessageAuthorVBeta1::class => MessageAuthorVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessageAuthor::class => MessageAuthorNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadVBeta1::class => ThreadVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\ThreadParticipantVBeta1::class => ThreadParticipantVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\ThreadOrderVBeta1::class => ThreadOrderVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\ThreadOrderOfferVBeta1::class => ThreadOrderOfferVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\Thread::class => ThreadNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadId::class => ThreadIdNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadsListVBeta1::class => ThreadsListVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\ThreadsListVBeta1NextPage::class => ThreadsListVBeta1NextPageNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadsList::class => ThreadsListNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadReadFlag::class => ThreadReadFlagNormalizer::class,

        \Em411\Allegro\Api\Model\ThreadReadFlagVBeta1::class => ThreadReadFlagVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessageOffer::class => MessageOfferNormalizer::class,

        \Em411\Allegro\Api\Model\MessageOrderVBeta1::class => MessageOrderVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessageOrder::class => MessageOrderNormalizer::class,

        \Em411\Allegro\Api\Model\MessageRelatedObjectVBeta1::class => MessageRelatedObjectVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessageRelatedObject::class => MessageRelatedObjectNormalizer::class,

        \Em411\Allegro\Api\Model\MessageAdditionalInformation::class => MessageAdditionalInformationNormalizer::class,

        \Em411\Allegro\Api\Model\MessageAttachmentInfo::class => MessageAttachmentInfoNormalizer::class,

        \Em411\Allegro\Api\Model\MessageAttachmentInfoVBeta1::class => MessageAttachmentInfoVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessageVBeta1::class => MessageVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\Message::class => MessageNormalizer::class,

        \Em411\Allegro\Api\Model\MessagesListVBeta1::class => MessagesListVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\MessagesListVBeta1NextPage::class => MessagesListVBeta1NextPageNormalizer::class,

        \Em411\Allegro\Api\Model\MessagesList::class => MessagesListNormalizer::class,

        \Em411\Allegro\Api\Model\MessageAttachmentId::class => MessageAttachmentIdNormalizer::class,

        \Em411\Allegro\Api\Model\NewMessageInThread::class => NewMessageInThreadNormalizer::class,

        \Em411\Allegro\Api\Model\Recipient::class => RecipientNormalizer::class,

        \Em411\Allegro\Api\Model\NewMessage::class => NewMessageNormalizer::class,

        \Em411\Allegro\Api\Model\NewMessageVBeta1::class => NewMessageVBeta1Normalizer::class,

        \Em411\Allegro\Api\Model\NewAttachmentDeclaration::class => NewAttachmentDeclarationNormalizer::class,

        \Em411\Allegro\Api\Model\B2b::class => B2bNormalizer::class,

        \Em411\Allegro\Api\Model\MessageToSellerSettings::class => MessageToSellerSettingsNormalizer::class,

        \Em411\Allegro\Api\Model\OfferDescriptionTranslation::class => OfferDescriptionTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTitleTranslation::class => OfferTitleTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferSafetyInformationTranslation::class => OfferSafetyInformationTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\ProductSafetyInformationDescription::class => ProductSafetyInformationDescriptionNormalizer::class,

        \Em411\Allegro\Api\Model\ManualDescriptionTranslation::class => ManualDescriptionTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\ManualTitleTranslation::class => ManualTitleTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\ManualSafetyInformationTranslation::class => ManualSafetyInformationTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\ManualProductSafetyInformationDescriptionTranslation::class => ManualProductSafetyInformationDescriptionTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\ManualTranslationUpdateRequest::class => ManualTranslationUpdateRequestNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTranslation::class => OfferTranslationNormalizer::class,

        \Em411\Allegro\Api\Model\OfferTranslations::class => OfferTranslationsNormalizer::class,

        \Em411\Allegro\Api\Model\SmartDeliveryMethod::class => SmartDeliveryMethodNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryMethodId::class => DeliveryMethodIdNormalizer::class,

        \Em411\Allegro\Api\Model\SmartOfferClassificationReport::class => SmartOfferClassificationReportNormalizer::class,

        \Em411\Allegro\Api\Model\SmartOfferClassificationReportClassification::class => SmartOfferClassificationReportClassificationNormalizer::class,

        \Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem::class => SmartOfferClassificationReportConditionsItemNormalizer::class,

        \Em411\Allegro\Api\Model\SmartSellerClassificationReport::class => SmartSellerClassificationReportNormalizer::class,

        \Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification::class => SmartSellerClassificationReportClassificationNormalizer::class,

        \Em411\Allegro\Api\Model\SmartSellerClassificationReportConditionsItem::class => SmartSellerClassificationReportConditionsItemNormalizer::class,

        \Em411\Allegro\Api\Model\PhoneNumberWithCountryCode::class => PhoneNumberWithCountryCodeNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentWithdrawalAddress::class => FulfillmentWithdrawalAddressNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentRemovalPreference::class => FulfillmentRemovalPreferenceNormalizer::class,

        \Em411\Allegro\Api\Model\AdvanceShipNotice::class => AdvanceShipNoticeNormalizer::class,

        \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeRequest::class => CreateAdvanceShipNoticeRequestNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateSubmittedAdvanceShipNoticeRequest::class => UpdateSubmittedAdvanceShipNoticeRequestNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateSubmittedHandlingUnitInput::class => UpdateSubmittedHandlingUnitInputNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateSubmittedShippingInput::class => UpdateSubmittedShippingInputNormalizer::class,

        \Em411\Allegro\Api\Model\AdvanceShipNoticeResponse::class => AdvanceShipNoticeResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdvanceShipNoticeListItemResponse::class => AdvanceShipNoticeListItemResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeResponse::class => CreateAdvanceShipNoticeResponseNormalizer::class,

        \Em411\Allegro\Api\Model\AdvanceShipNoticeList::class => AdvanceShipNoticeListNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitCommandInput::class => SubmitCommandInputNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitCommandOutput::class => SubmitCommandOutputNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitRunningCommandOutput::class => SubmitRunningCommandOutputNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitSuccessfulCommandOutput::class => SubmitSuccessfulCommandOutputNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitFailedCommandOutput::class => SubmitFailedCommandOutputNormalizer::class,

        \Em411\Allegro\Api\Model\SubmitCommand::class => SubmitCommandNormalizer::class,

        \Em411\Allegro\Api\Model\Product::class => ProductNormalizer::class,

        \Em411\Allegro\Api\Model\ProductItem::class => ProductItemNormalizer::class,

        \Em411\Allegro\Api\Model\HandlingUnit::class => HandlingUnitNormalizer::class,

        \Em411\Allegro\Api\Model\Labels::class => LabelsNormalizer::class,

        \Em411\Allegro\Api\Model\Shipping::class => ShippingNormalizer::class,

        \Em411\Allegro\Api\Model\ShippingExtended::class => ShippingExtendedNormalizer::class,

        \Em411\Allegro\Api\Model\OwnTransportShipping::class => OwnTransportShippingNormalizer::class,

        \Em411\Allegro\Api\Model\CourierBySellerShipping::class => CourierBySellerShippingNormalizer::class,

        \Em411\Allegro\Api\Model\ThirdPartyDeliveryShipping::class => ThirdPartyDeliveryShippingNormalizer::class,

        \Em411\Allegro\Api\Model\AlreadyInWarehouseShipping::class => AlreadyInWarehouseShippingNormalizer::class,

        \Em411\Allegro\Api\Model\ThirdParty::class => ThirdPartyNormalizer::class,

        \Em411\Allegro\Api\Model\Courier::class => CourierNormalizer::class,

        \Em411\Allegro\Api\Model\TaxIdRequest::class => TaxIdRequestNormalizer::class,

        \Em411\Allegro\Api\Model\TaxIdResponse::class => TaxIdResponseNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentWarehouse::class => FulfillmentWarehouseNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentWarehouseLocation::class => FulfillmentWarehouseLocationNormalizer::class,

        \Em411\Allegro\Api\Model\StockProductList::class => StockProductListNormalizer::class,

        \Em411\Allegro\Api\Model\StockProductItem::class => StockProductItemNormalizer::class,

        \Em411\Allegro\Api\Model\StockProduct::class => StockProductNormalizer::class,

        \Em411\Allegro\Api\Model\StockQuantity::class => StockQuantityNormalizer::class,

        \Em411\Allegro\Api\Model\StockSellingStats::class => StockSellingStatsNormalizer::class,

        \Em411\Allegro\Api\Model\StockStorageFee::class => StockStorageFeeNormalizer::class,

        \Em411\Allegro\Api\Model\StockStorageFeeDetails::class => StockStorageFeeDetailsNormalizer::class,

        \Em411\Allegro\Api\Model\ReserveInfo::class => ReserveInfoNormalizer::class,

        \Em411\Allegro\Api\Model\AvailableProductsList::class => AvailableProductsListNormalizer::class,

        \Em411\Allegro\Api\Model\AvailableProductResponse::class => AvailableProductResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ReceivingState::class => ReceivingStateNormalizer::class,

        \Em411\Allegro\Api\Model\ReceivingEntry::class => ReceivingEntryNormalizer::class,

        \Em411\Allegro\Api\Model\ReceivingStatus::class => ReceivingStatusNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentOrder::class => FulfillmentOrderNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentOrderParcel::class => FulfillmentOrderParcelNormalizer::class,

        \Em411\Allegro\Api\Model\FulfillmentOrderParcelItem::class => FulfillmentOrderParcelItemNormalizer::class,

        \Em411\Allegro\Api\Model\AllegroMarketplaces::class => AllegroMarketplacesNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItem::class => MarketplaceItemNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItemLanguages::class => MarketplaceItemLanguagesNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItemCurrencies::class => MarketplaceItemCurrenciesNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItemLanguage::class => MarketplaceItemLanguageNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItemCurrency::class => MarketplaceItemCurrencyNormalizer::class,

        \Em411\Allegro\Api\Model\MarketplaceItemShippingCountry::class => MarketplaceItemShippingCountryNormalizer::class,

        \Em411\Allegro\Api\Model\ReceiverAddressDto::class => ReceiverAddressDtoNormalizer::class,

        \Em411\Allegro\Api\Model\SenderAddressDto::class => SenderAddressDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupAddressDto::class => PickupAddressDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AddressDto::class => AddressDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentCreateCommandDto::class => ShipmentCreateCommandDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CashOnDeliveryDto::class => CashOnDeliveryDtoNormalizer::class,

        \Em411\Allegro\Api\Model\InsuranceDto::class => InsuranceDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PackageRequestDto::class => PackageRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentCreateRequestDto::class => ShipmentCreateRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\TransportingInfoDto::class => TransportingInfoDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentCancelCommandDto::class => ShipmentCancelCommandDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentCancelRequestDto::class => ShipmentCancelRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentIdsDto::class => ShipmentIdsDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupCreateCommandDto::class => PickupCreateCommandDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupCreateRequestDto::class => PickupCreateRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupTimeDto::class => PickupTimeDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupProposalsRequestDto::class => PickupProposalsRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupDateProposalsDto::class => PickupDateProposalsDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PickupProposalsResponseDto::class => PickupProposalsResponseDtoNormalizer::class,

        \Em411\Allegro\Api\Model\LabelRequestDto::class => LabelRequestDtoNormalizer::class,

        \Em411\Allegro\Api\Model\LabelRequestDtoSummaryReport::class => LabelRequestDtoSummaryReportNormalizer::class,

        \Em411\Allegro\Api\Model\PickupDto::class => PickupDtoNormalizer::class,

        \Em411\Allegro\Api\Model\PackageDto::class => PackageDtoNormalizer::class,

        \Em411\Allegro\Api\Model\ShipmentDto::class => ShipmentDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CreateShipmentCommandStatusDto::class => CreateShipmentCommandStatusDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CancelShipmentCommandStatusDto::class => CancelShipmentCommandStatusDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CreatePickupCommandStatusDto::class => CreatePickupCommandStatusDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalServiceDto::class => AdditionalServiceDtoNormalizer::class,

        \Em411\Allegro\Api\Model\AdditionalPropertyDto::class => AdditionalPropertyDtoNormalizer::class,

        \Em411\Allegro\Api\Model\CashOnDeliveryLimitDto::class => CashOnDeliveryLimitDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryServiceDto::class => DeliveryServiceDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryServiceIdDto::class => DeliveryServiceIdDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryServicesDto::class => DeliveryServicesDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryOptionDto::class => DeliveryOptionDtoNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryOptionDtoLimits::class => DeliveryOptionDtoLimitsNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryOptionDtoLimitsDimensions::class => DeliveryOptionDtoLimitsDimensionsNormalizer::class,

        \Em411\Allegro\Api\Model\DeliveryProposalDto::class => DeliveryProposalDtoNormalizer::class,

        \Em411\Allegro\Api\Model\LimitWithCurrencyDto::class => LimitWithCurrencyDtoNormalizer::class,

        \Em411\Allegro\Api\Model\WeightValue::class => WeightValueNormalizer::class,

        \Em411\Allegro\Api\Model\DimensionValue::class => DimensionValueNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsiblePersonResponse::class => ResponsiblePersonResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsiblePersonResponsePersonalData::class => ResponsiblePersonResponsePersonalDataNormalizer::class,

        \Em411\Allegro\Api\Model\CreateResponsiblePersonRequest::class => CreateResponsiblePersonRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CreateResponsiblePersonRequestPersonalData::class => CreateResponsiblePersonRequestPersonalDataNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateResponsiblePersonRequest::class => UpdateResponsiblePersonRequestNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateResponsiblePersonRequestPersonalData::class => UpdateResponsiblePersonRequestPersonalDataNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsiblePersonAddress::class => ResponsiblePersonAddressNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsiblePersonContact::class => ResponsiblePersonContactNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsibleProducerResponse::class => ResponsibleProducerResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsibleProducerResponseProducerData::class => ResponsibleProducerResponseProducerDataNormalizer::class,

        \Em411\Allegro\Api\Model\CreateResponsibleProducerRequest::class => CreateResponsibleProducerRequestNormalizer::class,

        \Em411\Allegro\Api\Model\CreateResponsibleProducerRequestProducerData::class => CreateResponsibleProducerRequestProducerDataNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateResponsibleProducerRequest::class => UpdateResponsibleProducerRequestNormalizer::class,

        \Em411\Allegro\Api\Model\UpdateResponsibleProducerRequestProducerData::class => UpdateResponsibleProducerRequestProducerDataNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsibleProducerAddress::class => ResponsibleProducerAddressNormalizer::class,

        \Em411\Allegro\Api\Model\ResponsibleProducerContact::class => ResponsibleProducerContactNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountRequest::class => TurnoverDiscountRequestNormalizer::class,

        \Em411\Allegro\Api\Model\NullableTurnoverDiscountDto::class => NullableTurnoverDiscountDtoNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountDto::class => TurnoverDiscountDtoNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto::class => TurnoverDiscountDefinitionDtoNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountThresholdDto::class => TurnoverDiscountThresholdDtoNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountThresholdDtoMinimumTurnover::class => TurnoverDiscountThresholdDtoMinimumTurnoverNormalizer::class,

        \Em411\Allegro\Api\Model\TurnoverDiscountThresholdDtoDiscount::class => TurnoverDiscountThresholdDtoDiscountNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueListResponse::class => PostPurchaseIssueListResponseNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssue::class => PostPurchaseIssueNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueOffer::class => PostPurchaseIssueOfferNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueProduct::class => PostPurchaseIssueProductNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueReason::class => PostPurchaseIssueReasonNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueUser::class => PostPurchaseIssueUserNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueCheckoutForm::class => PostPurchaseIssueCheckoutFormNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueState::class => PostPurchaseIssueStateNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueChat::class => PostPurchaseIssueChatNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueLastMessage::class => PostPurchaseIssueLastMessageNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueFirstMessage::class => PostPurchaseIssueFirstMessageNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueAttachment::class => PostPurchaseIssueAttachmentNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueAuthor::class => PostPurchaseIssueAuthorNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueExpectation::class => PostPurchaseIssueExpectationNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueExpectationRefund::class => PostPurchaseIssueExpectationRefundNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueRefund::class => PostPurchaseIssueRefundNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueChatResponse::class => PostPurchaseIssueChatResponseNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueChatMessage::class => PostPurchaseIssueChatMessageNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueMessage::class => PostPurchaseIssueMessageNormalizer::class,

        \Em411\Allegro\Api\Model\PostPurchaseIssueMessageAuthor::class => PostPurchaseIssueMessageAuthorNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionResponse::class => CpsConversionResponseNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversion::class => CpsConversionNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionMarketplace::class => CpsConversionMarketplaceNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionOffer::class => CpsConversionOfferNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionOfferCategory::class => CpsConversionOfferCategoryNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionOfferUnitPrice::class => CpsConversionOfferUnitPriceNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionOfferSeller::class => CpsConversionOfferSellerNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionCommission::class => CpsConversionCommissionNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionCommissionPublisher::class => CpsConversionCommissionPublisherNormalizer::class,

        \Em411\Allegro\Api\Model\CpsConversionCommissionAllegro::class => CpsConversionCommissionAllegroNormalizer::class,

        \Em411\Allegro\Api\Model\DepositTypeResponse::class => DepositTypeResponseNormalizer::class,

        \Em411\Allegro\Api\Model\DepositType::class => DepositTypeNormalizer::class,

        \Em411\Allegro\Api\Model\DepositTypePrice::class => DepositTypePriceNormalizer::class,

        \Em411\Allegro\Api\Model\ParseIngredientsRequest::class => ParseIngredientsRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ProductIngredientsRequest::class => ProductIngredientsRequestNormalizer::class,

        \Em411\Allegro\Api\Model\ParseIngredientsResponse::class => ParseIngredientsResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ProductParseResult::class => ProductParseResultNormalizer::class,

        \Em411\Allegro\Api\Model\ParsedItemResponse::class => ParsedItemResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ParsedIngredientResponse::class => ParsedIngredientResponseNormalizer::class,

        \Em411\Allegro\Api\Model\ParseDiagnosticResponse::class => ParseDiagnosticResponseNormalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOffersPostResponse422::class => SaleProductOffersPostResponse422Normalizer::class,

        \Em411\Allegro\Api\Model\SaleProductOffersOfferIdPatchResponse422::class => SaleProductOffersOfferIdPatchResponse422Normalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesGetResponse200::class => SaleShippingRatesGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesGetResponse200ShippingRatesItem::class => SaleShippingRatesGetResponse200ShippingRatesItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesGetResponse200ShippingRatesItemFeatures::class => SaleShippingRatesGetResponse200ShippingRatesItemFeaturesNormalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem::class => SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200::class => SaleShippingRatesIdGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200Features::class => SaleShippingRatesIdGetResponse200FeaturesNormalizer::class,

        \Em411\Allegro\Api\Model\SaleResponsiblePersonsGetResponse200::class => SaleResponsiblePersonsGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\SaleResponsibleProducersGetResponse200::class => SaleResponsibleProducersGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200::class => SaleDeliveryMethodsGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackageNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeightNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRateNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeNormalizer::class,

        \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault::class => SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefaultNormalizer::class,

        \Em411\Allegro\Api\Model\AfterSalesServiceConditionsAttachmentsPostBody::class => AfterSalesServiceConditionsAttachmentsPostBodyNormalizer::class,

        \Em411\Allegro\Api\Model\SaleOffersOfferIdSmartGetResponse400::class => SaleOffersOfferIdSmartGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\SaleOffersOfferIdSmartGetResponse403::class => SaleOffersOfferIdSmartGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\BiddingOffersOfferIdBidPutBody::class => BiddingOffersOfferIdBidPutBodyNormalizer::class,

        \Em411\Allegro\Api\Model\SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202::class => SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202Normalizer::class,

        \Em411\Allegro\Api\Model\PaymentsRefundsGetResponse200::class => PaymentsRefundsGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\PaymentsRefundsGetResponse403::class => PaymentsRefundsGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\PaymentsRefundsPostResponse403::class => PaymentsRefundsPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\OrderRefundClaimsGetResponse200::class => OrderRefundClaimsGetResponse200Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementDeliveryProposalsOrderIdGetResponse403::class => ShipmentManagementDeliveryProposalsOrderIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementDeliveryProposalsOrderIdGetResponse504::class => ShipmentManagementDeliveryProposalsOrderIdGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementDeliveryServicesGetResponse403::class => ShipmentManagementDeliveryServicesGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementDeliveryServicesGetResponse504::class => ShipmentManagementDeliveryServicesGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400::class => ShipmentManagementShipmentsCreateCommandsPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403::class => ShipmentManagementShipmentsCreateCommandsPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504::class => ShipmentManagementShipmentsCreateCommandsPostResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400::class => ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403::class => ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504::class => ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsPostResponse400::class => ShipmentManagementShipmentsCancelCommandsPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsPostResponse403::class => ShipmentManagementShipmentsCancelCommandsPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400::class => ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse403::class => ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504::class => ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsShipmentIdGetResponse400::class => ShipmentManagementShipmentsShipmentIdGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsShipmentIdGetResponse403::class => ShipmentManagementShipmentsShipmentIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsShipmentIdGetResponse404::class => ShipmentManagementShipmentsShipmentIdGetResponse404Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementShipmentsShipmentIdGetResponse504::class => ShipmentManagementShipmentsShipmentIdGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementLabelPostResponse400::class => ShipmentManagementLabelPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementLabelPostResponse403::class => ShipmentManagementLabelPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementLabelPostResponse404::class => ShipmentManagementLabelPostResponse404Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementLabelPostResponse504::class => ShipmentManagementLabelPostResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse400::class => ShipmentManagementProtocolPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse403::class => ShipmentManagementProtocolPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse404::class => ShipmentManagementProtocolPostResponse404Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse504::class => ShipmentManagementProtocolPostResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse400::class => ShipmentManagementPickupProposalsPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse403::class => ShipmentManagementPickupProposalsPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse504::class => ShipmentManagementPickupProposalsPostResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsPostResponse400::class => ShipmentManagementPickupsCreateCommandsPostResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsPostResponse403::class => ShipmentManagementPickupsCreateCommandsPostResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400::class => ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403::class => ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504::class => ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse400::class => ShipmentManagementPickupsPickupIdGetResponse400Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse403::class => ShipmentManagementPickupsPickupIdGetResponse403Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse404::class => ShipmentManagementPickupsPickupIdGetResponse404Normalizer::class,

        \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse504::class => ShipmentManagementPickupsPickupIdGetResponse504Normalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Em411\Allegro\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[\get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, \count($this->normalizers), false));
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
