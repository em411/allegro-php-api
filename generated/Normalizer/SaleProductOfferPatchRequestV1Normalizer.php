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
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SaleProductOfferPatchRequestV1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productSet', $data) && null !== $data['productSet']) {
            $values = [];
            foreach ($data['productSet'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1productSetItem::class, 'json', $context);
            }
            $object->setProductSet($values);
            unset($data['productSet']);
        } elseif (\array_key_exists('productSet', $data) && null === $data['productSet']) {
            $object->setProductSet(null);
        }
        if (\array_key_exists('b2b', $data) && null !== $data['b2b']) {
            $object->setB2b($this->denormalizer->denormalize($data['b2b'], \Em411\Allegro\Api\Model\B2b::class, 'json', $context));
            unset($data['b2b']);
        } elseif (\array_key_exists('b2b', $data) && null === $data['b2b']) {
            $object->setB2b(null);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values_1 = [];
            foreach ($data['attachments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ProductOfferAttachmentItem::class, 'json', $context);
            }
            $object->setAttachments($values_1);
            unset($data['attachments']);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('fundraisingCampaign', $data) && null !== $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign($this->denormalizer->denormalize($data['fundraisingCampaign'], \Em411\Allegro\Api\Model\ProductOfferFundraisingCampaignRequest::class, 'json', $context));
            unset($data['fundraisingCampaign']);
        } elseif (\array_key_exists('fundraisingCampaign', $data) && null === $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign(null);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Em411\Allegro\Api\Model\ProductOfferAdditionalServicesRequest::class, 'json', $context));
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
        }
        if (\array_key_exists('compatibilityList', $data) && null !== $data['compatibilityList']) {
            $object->setCompatibilityList($this->denormalizer->denormalize($data['compatibilityList'], \Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1compatibilityList::class, 'json', $context));
            unset($data['compatibilityList']);
        } elseif (\array_key_exists('compatibilityList', $data) && null === $data['compatibilityList']) {
            $object->setCompatibilityList(null);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\SaleProductOfferRequestBasedelivery::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('stock', $data) && null !== $data['stock']) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Em411\Allegro\Api\Model\SaleProductOffersRequestStock::class, 'json', $context));
            unset($data['stock']);
        } elseif (\array_key_exists('stock', $data) && null === $data['stock']) {
            $object->setStock(null);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\SaleProductOfferRequestBasepublication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
        }
        if (\array_key_exists('additionalMarketplaces', $data) && null !== $data['additionalMarketplaces']) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalMarketplaces'] as $key => $value_2) {
                $values_2[$key] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\AdditionalMarketplacesRequestItem::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_2);
            unset($data['additionalMarketplaces']);
        } elseif (\array_key_exists('additionalMarketplaces', $data) && null === $data['additionalMarketplaces']) {
            $object->setAdditionalMarketplaces(null);
        }
        if (\array_key_exists('language', $data) && null !== $data['language']) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        } elseif (\array_key_exists('language', $data) && null === $data['language']) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('aiCoCreatedContent', $data) && null !== $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent($this->denormalizer->denormalize($data['aiCoCreatedContent'], \Em411\Allegro\Api\Model\AiCoCreatedContent::class, 'json', $context));
            unset($data['aiCoCreatedContent']);
        } elseif (\array_key_exists('aiCoCreatedContent', $data) && null === $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent(null);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setCategory($values_3);
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('parameters', $data) && null !== $data['parameters']) {
            $values_4 = [];
            foreach ($data['parameters'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Em411\Allegro\Api\Model\ParameterProductOfferRequest::class, 'json', $context);
            }
            $object->setParameters($values_4);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && null === $data['parameters']) {
            $object->setParameters(null);
        }
        if (\array_key_exists('afterSalesServices', $data) && null !== $data['afterSalesServices']) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Em411\Allegro\Api\Model\AfterSalesServicesProductOfferRequest::class, 'json', $context));
            unset($data['afterSalesServices']);
        } elseif (\array_key_exists('afterSalesServices', $data) && null === $data['afterSalesServices']) {
            $object->setAfterSalesServices(null);
        }
        if (\array_key_exists('sizeTable', $data) && null !== $data['sizeTable']) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Em411\Allegro\Api\Model\SaleProductOfferSizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        } elseif (\array_key_exists('sizeTable', $data) && null === $data['sizeTable']) {
            $object->setSizeTable(null);
        }
        if (\array_key_exists('contact', $data) && null !== $data['contact']) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Em411\Allegro\Api\Model\SaleProductOfferRequestBasecontact::class, 'json', $context));
            unset($data['contact']);
        } elseif (\array_key_exists('contact', $data) && null === $data['contact']) {
            $object->setContact(null);
        }
        if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Em411\Allegro\Api\Model\DiscountsProductOfferRequest::class, 'json', $context));
            unset($data['discounts']);
        } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
            $object->setDiscounts(null);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Em411\Allegro\Api\Model\Payments::class, 'json', $context));
            unset($data['payments']);
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
        }
        if (\array_key_exists('sellingMode', $data) && null !== $data['sellingMode']) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Em411\Allegro\Api\Model\SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        } elseif (\array_key_exists('sellingMode', $data) && null === $data['sellingMode']) {
            $object->setSellingMode(null);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Em411\Allegro\Api\Model\Location::class, 'json', $context));
            unset($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values_5 = [];
            foreach ($data['images'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setImages($values_5);
            unset($data['images']);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Em411\Allegro\Api\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('external', $data) && null !== $data['external']) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Em411\Allegro\Api\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        } elseif (\array_key_exists('external', $data) && null === $data['external']) {
            $object->setExternal(null);
        }
        if (\array_key_exists('taxSettings', $data) && null !== $data['taxSettings']) {
            $object->setTaxSettings($this->denormalizer->denormalize($data['taxSettings'], \Em411\Allegro\Api\Model\SaleProductOfferTaxSettings::class, 'json', $context));
            unset($data['taxSettings']);
        } elseif (\array_key_exists('taxSettings', $data) && null === $data['taxSettings']) {
            $object->setTaxSettings(null);
        }
        if (\array_key_exists('messageToSellerSettings', $data) && null !== $data['messageToSellerSettings']) {
            $object->setMessageToSellerSettings($this->denormalizer->denormalize($data['messageToSellerSettings'], \Em411\Allegro\Api\Model\SaleProductOfferMessageToSellerSettings::class, 'json', $context));
            unset($data['messageToSellerSettings']);
        } elseif (\array_key_exists('messageToSellerSettings', $data) && null === $data['messageToSellerSettings']) {
            $object->setMessageToSellerSettings(null);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productSet') && null !== $data->getProductSet()) {
            $values = [];
            foreach ($data->getProductSet() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['productSet'] = $values;
        }
        if ($data->isInitialized('b2b') && null !== $data->getB2b()) {
            $dataArray['b2b'] = $this->normalizer->normalize($data->getB2b(), 'json', $context);
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values_1 = [];
            foreach ($data->getAttachments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['attachments'] = $values_1;
        }
        if ($data->isInitialized('fundraisingCampaign') && null !== $data->getFundraisingCampaign()) {
            $dataArray['fundraisingCampaign'] = $this->normalizer->normalize($data->getFundraisingCampaign(), 'json', $context);
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        if ($data->isInitialized('compatibilityList') && null !== $data->getCompatibilityList()) {
            $dataArray['compatibilityList'] = $this->normalizer->normalize($data->getCompatibilityList(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_2 = [];
            foreach ($data->getAdditionalMarketplaces() as $key => $value_2) {
                $values_2[$key] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_2;
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('aiCoCreatedContent') && null !== $data->getAiCoCreatedContent()) {
            $dataArray['aiCoCreatedContent'] = $this->normalizer->normalize($data->getAiCoCreatedContent(), 'json', $context);
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values_3 = [];
            foreach ($data->getCategory() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['category'] = $values_3;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_4 = [];
            foreach ($data->getParameters() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['parameters'] = $values_4;
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = $this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context);
        }
        if ($data->isInitialized('sizeTable')) {
            $dataArray['sizeTable'] = $this->normalizer->normalize($data->getSizeTable(), 'json', $context);
        }
        if ($data->isInitialized('contact') && null !== $data->getContact()) {
            $dataArray['contact'] = $this->normalizer->normalize($data->getContact(), 'json', $context);
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = $this->normalizer->normalize($data->getDiscounts(), 'json', $context);
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = $this->normalizer->normalize($data->getPayments(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values_5 = [];
            foreach ($data->getImages() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['images'] = $values_5;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('taxSettings')) {
            $dataArray['taxSettings'] = $this->normalizer->normalize($data->getTaxSettings(), 'json', $context);
        }
        if ($data->isInitialized('messageToSellerSettings')) {
            $dataArray['messageToSellerSettings'] = $this->normalizer->normalize($data->getMessageToSellerSettings(), 'json', $context);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SaleProductOfferPatchRequestV1::class => false];
    }
}
