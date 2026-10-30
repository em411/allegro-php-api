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

class SaleProductOfferResponseV1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleProductOfferResponseV1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleProductOfferResponseV1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SaleProductOfferResponseV1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('productSet', $data) && null !== $data['productSet']) {
            $values = [];
            foreach ($data['productSet'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem::class, 'json', $context);
            }
            $object->setProductSet($values);
            unset($data['productSet']);
        } elseif (\array_key_exists('productSet', $data) && null === $data['productSet']) {
            $object->setProductSet(null);
            unset($data['productSet']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
            unset($data['name']);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $values_1 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data['category'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setCategory($values_1);
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
            unset($data['category']);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values_2 = [];
            foreach ($data['attachments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\ProductOfferAttachmentItem::class, 'json', $context);
            }
            $object->setAttachments($values_2);
            unset($data['attachments']);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
            unset($data['attachments']);
        }
        if (\array_key_exists('fundraisingCampaign', $data) && null !== $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign($this->denormalizer->denormalize($data['fundraisingCampaign'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1FundraisingCampaign::class, 'json', $context));
            unset($data['fundraisingCampaign']);
        } elseif (\array_key_exists('fundraisingCampaign', $data) && null === $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign(null);
            unset($data['fundraisingCampaign']);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1AdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\DeliveryProductOfferResponse::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
            unset($data['delivery']);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
            unset($data['publication']);
        }
        if (\array_key_exists('additionalMarketplaces', $data) && null !== $data['additionalMarketplaces']) {
            $values_3 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data['additionalMarketplaces'] as $key_1 => $value_3) {
                $values_3[$key_1] = $this->denormalizer->denormalize($value_3, \Em411\Allegro\Api\Model\AdditionalMarketplacesResponseItem::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_3);
            unset($data['additionalMarketplaces']);
        } elseif (\array_key_exists('additionalMarketplaces', $data) && null === $data['additionalMarketplaces']) {
            $object->setAdditionalMarketplaces(null);
            unset($data['additionalMarketplaces']);
        }
        if (\array_key_exists('b2b', $data) && null !== $data['b2b']) {
            $object->setB2b($this->denormalizer->denormalize($data['b2b'], \Em411\Allegro\Api\Model\B2b::class, 'json', $context));
            unset($data['b2b']);
        } elseif (\array_key_exists('b2b', $data) && null === $data['b2b']) {
            $object->setB2b(null);
            unset($data['b2b']);
        }
        if (\array_key_exists('compatibilityList', $data) && null !== $data['compatibilityList']) {
            $values_4 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data['compatibilityList'] as $key_2 => $value_4) {
                $values_4[$key_2] = $value_4;
            }
            $object->setCompatibilityList($values_4);
            unset($data['compatibilityList']);
        } elseif (\array_key_exists('compatibilityList', $data) && null === $data['compatibilityList']) {
            $object->setCompatibilityList(null);
            unset($data['compatibilityList']);
        }
        if (\array_key_exists('language', $data) && null !== $data['language']) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        } elseif (\array_key_exists('language', $data) && null === $data['language']) {
            $object->setLanguage(null);
            unset($data['language']);
        }
        if (\array_key_exists('validation', $data) && null !== $data['validation']) {
            $object->setValidation($this->denormalizer->denormalize($data['validation'], \Em411\Allegro\Api\Model\Validation::class, 'json', $context));
            unset($data['validation']);
        } elseif (\array_key_exists('validation', $data) && null === $data['validation']) {
            $object->setValidation(null);
            unset($data['validation']);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values_5 = [];
            foreach ($data['warnings'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Em411\Allegro\Api\Model\Error::class, 'json', $context);
            }
            $object->setWarnings($values_5);
            unset($data['warnings']);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
            unset($data['warnings']);
        }
        if (\array_key_exists('afterSalesServices', $data) && null !== $data['afterSalesServices']) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1AfterSalesServices::class, 'json', $context));
            unset($data['afterSalesServices']);
        } elseif (\array_key_exists('afterSalesServices', $data) && null === $data['afterSalesServices']) {
            $object->setAfterSalesServices(null);
            unset($data['afterSalesServices']);
        }
        if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Em411\Allegro\Api\Model\DiscountsProductOfferResponse::class, 'json', $context));
            unset($data['discounts']);
        } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
            $object->setDiscounts(null);
            unset($data['discounts']);
        }
        if (\array_key_exists('stock', $data) && null !== $data['stock']) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1Stock::class, 'json', $context));
            unset($data['stock']);
        } elseif (\array_key_exists('stock', $data) && null === $data['stock']) {
            $object->setStock(null);
            unset($data['stock']);
        }
        if (\array_key_exists('parameters', $data) && null !== $data['parameters']) {
            $values_6 = [];
            foreach ($data['parameters'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Em411\Allegro\Api\Model\ParameterProductOfferResponse::class, 'json', $context);
            }
            $object->setParameters($values_6);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && null === $data['parameters']) {
            $object->setParameters(null);
            unset($data['parameters']);
        }
        if (\array_key_exists('contact', $data) && null !== $data['contact']) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1Contact::class, 'json', $context));
            unset($data['contact']);
        } elseif (\array_key_exists('contact', $data) && null === $data['contact']) {
            $object->setContact(null);
            unset($data['contact']);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date) {
                if (\is_string($data['createdAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdAt'])) {
                    try {
                        $date = new \DateTime($data['createdAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCreatedAt($date);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']);
            if (false === $date_1) {
                if (\is_string($data['updatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['updatedAt'])) {
                    try {
                        $date_1 = new \DateTime($data['updatedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setUpdatedAt($date_1);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('aiCoCreatedContent', $data) && null !== $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent($this->denormalizer->denormalize($data['aiCoCreatedContent'], \Em411\Allegro\Api\Model\AiCoCreatedContent::class, 'json', $context));
            unset($data['aiCoCreatedContent']);
        } elseif (\array_key_exists('aiCoCreatedContent', $data) && null === $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent(null);
            unset($data['aiCoCreatedContent']);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Em411\Allegro\Api\Model\Payments::class, 'json', $context));
            unset($data['payments']);
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
            unset($data['payments']);
        }
        if (\array_key_exists('sellingMode', $data) && null !== $data['sellingMode']) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Em411\Allegro\Api\Model\SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        } elseif (\array_key_exists('sellingMode', $data) && null === $data['sellingMode']) {
            $object->setSellingMode(null);
            unset($data['sellingMode']);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Em411\Allegro\Api\Model\Location::class, 'json', $context));
            unset($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
            unset($data['location']);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values_7 = [];
            foreach ($data['images'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setImages($values_7);
            unset($data['images']);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
            unset($data['images']);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Em411\Allegro\Api\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('external', $data) && null !== $data['external']) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Em411\Allegro\Api\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        } elseif (\array_key_exists('external', $data) && null === $data['external']) {
            $object->setExternal(null);
            unset($data['external']);
        }
        if (\array_key_exists('sizeTable', $data) && null !== $data['sizeTable']) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Em411\Allegro\Api\Model\SaleProductOfferSizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        } elseif (\array_key_exists('sizeTable', $data) && null === $data['sizeTable']) {
            $object->setSizeTable(null);
            unset($data['sizeTable']);
        }
        if (\array_key_exists('taxSettings', $data) && null !== $data['taxSettings']) {
            $object->setTaxSettings($this->denormalizer->denormalize($data['taxSettings'], \Em411\Allegro\Api\Model\SaleProductOfferTaxSettings::class, 'json', $context));
            unset($data['taxSettings']);
        } elseif (\array_key_exists('taxSettings', $data) && null === $data['taxSettings']) {
            $object->setTaxSettings(null);
            unset($data['taxSettings']);
        }
        if (\array_key_exists('messageToSellerSettings', $data) && null !== $data['messageToSellerSettings']) {
            $object->setMessageToSellerSettings($this->denormalizer->denormalize($data['messageToSellerSettings'], \Em411\Allegro\Api\Model\SaleProductOfferMessageToSellerSettings::class, 'json', $context));
            unset($data['messageToSellerSettings']);
        } elseif (\array_key_exists('messageToSellerSettings', $data) && null === $data['messageToSellerSettings']) {
            $object->setMessageToSellerSettings(null);
            unset($data['messageToSellerSettings']);
        }
        foreach ($data as $key_3 => $value_8) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_8;
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
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['productSet'] = $values;
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values_1 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data->getCategory() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['category'] = $values_1;
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values_2 = [];
            foreach ($data->getAttachments() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['attachments'] = $values_2;
        }
        if ($data->isInitialized('fundraisingCampaign') && null !== $data->getFundraisingCampaign()) {
            $dataArray['fundraisingCampaign'] = null === $data->getFundraisingCampaign() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getFundraisingCampaign(), 'json', $context));
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = null === $data->getAdditionalServices() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalServices(), 'json', $context));
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = null === $data->getDelivery() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDelivery(), 'json', $context));
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = null === $data->getPublication() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPublication(), 'json', $context));
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_3 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data->getAdditionalMarketplaces() as $key_1 => $value_3) {
                $values_3[$key_1] = null === $value_3 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['additionalMarketplaces'] = $values_3;
        }
        if ($data->isInitialized('b2b') && null !== $data->getB2b()) {
            $dataArray['b2b'] = null === $data->getB2b() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getB2b(), 'json', $context));
        }
        if ($data->isInitialized('compatibilityList') && null !== $data->getCompatibilityList()) {
            $values_4 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data->getCompatibilityList() as $key_2 => $value_4) {
                $values_4[$key_2] = $value_4;
            }
            $dataArray['compatibilityList'] = $values_4;
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('validation') && null !== $data->getValidation()) {
            $dataArray['validation'] = null === $data->getValidation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getValidation(), 'json', $context));
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values_5 = [];
            foreach ($data->getWarnings() as $value_5) {
                $values_5[] = null === $value_5 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['warnings'] = $values_5;
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = null === $data->getAfterSalesServices() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context));
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = null === $data->getDiscounts() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDiscounts(), 'json', $context));
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = null === $data->getStock() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getStock(), 'json', $context));
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_6 = [];
            foreach ($data->getParameters() as $value_6) {
                $values_6[] = null === $value_6 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['parameters'] = $values_6;
        }
        if ($data->isInitialized('contact') && null !== $data->getContact()) {
            $dataArray['contact'] = null === $data->getContact() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getContact(), 'json', $context));
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('aiCoCreatedContent') && null !== $data->getAiCoCreatedContent()) {
            $dataArray['aiCoCreatedContent'] = null === $data->getAiCoCreatedContent() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAiCoCreatedContent(), 'json', $context));
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = null === $data->getPayments() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPayments(), 'json', $context));
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = null === $data->getSellingMode() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSellingMode(), 'json', $context));
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = null === $data->getLocation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getLocation(), 'json', $context));
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values_7 = [];
            foreach ($data->getImages() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['images'] = $values_7;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = null === $data->getDescription() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDescription(), 'json', $context));
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = null === $data->getExternal() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getExternal(), 'json', $context));
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = null === $data->getSizeTable() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSizeTable(), 'json', $context));
        }
        if ($data->isInitialized('taxSettings') && null !== $data->getTaxSettings()) {
            $dataArray['taxSettings'] = null === $data->getTaxSettings() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getTaxSettings(), 'json', $context));
        }
        if ($data->isInitialized('messageToSellerSettings') && null !== $data->getMessageToSellerSettings()) {
            $dataArray['messageToSellerSettings'] = null === $data->getMessageToSellerSettings() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMessageToSellerSettings(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_8) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_8;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SaleProductOfferResponseV1::class => false];
    }
}
