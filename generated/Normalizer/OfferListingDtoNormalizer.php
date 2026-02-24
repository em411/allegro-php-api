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

class OfferListingDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferListingDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferListingDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferListingDto();
        if (\array_key_exists('isFulfillment', $data) && \is_int($data['isFulfillment'])) {
            $data['isFulfillment'] = (bool) $data['isFulfillment'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCategory($values);
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('primaryImage', $data) && null !== $data['primaryImage']) {
            $object->setPrimaryImage($this->denormalizer->denormalize($data['primaryImage'], \Em411\Allegro\Api\Model\OfferListingDtoImage::class, 'json', $context));
            unset($data['primaryImage']);
        } elseif (\array_key_exists('primaryImage', $data) && null === $data['primaryImage']) {
            $object->setPrimaryImage(null);
        }
        if (\array_key_exists('sellingMode', $data) && null !== $data['sellingMode']) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Em411\Allegro\Api\Model\OfferListingDtoV1SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        } elseif (\array_key_exists('sellingMode', $data) && null === $data['sellingMode']) {
            $object->setSellingMode(null);
        }
        if (\array_key_exists('saleInfo', $data) && null !== $data['saleInfo']) {
            $object->setSaleInfo($this->denormalizer->denormalize($data['saleInfo'], \Em411\Allegro\Api\Model\OfferListingDtoV1SaleInfo::class, 'json', $context));
            unset($data['saleInfo']);
        } elseif (\array_key_exists('saleInfo', $data) && null === $data['saleInfo']) {
            $object->setSaleInfo(null);
        }
        if (\array_key_exists('stock', $data) && null !== $data['stock']) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Em411\Allegro\Api\Model\OfferListingDtoV1Stock::class, 'json', $context));
            unset($data['stock']);
        } elseif (\array_key_exists('stock', $data) && null === $data['stock']) {
            $object->setStock(null);
        }
        if (\array_key_exists('stats', $data) && null !== $data['stats']) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], \Em411\Allegro\Api\Model\OfferListingDtoV1Stats::class, 'json', $context));
            unset($data['stats']);
        } elseif (\array_key_exists('stats', $data) && null === $data['stats']) {
            $object->setStats(null);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\OfferListingDtoV1Publication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
        }
        if (\array_key_exists('afterSalesServices', $data) && null !== $data['afterSalesServices']) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Em411\Allegro\Api\Model\AfterSalesServices::class, 'json', $context));
            unset($data['afterSalesServices']);
        } elseif (\array_key_exists('afterSalesServices', $data) && null === $data['afterSalesServices']) {
            $object->setAfterSalesServices(null);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Em411\Allegro\Api\Model\OfferAdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
        }
        if (\array_key_exists('external', $data) && null !== $data['external']) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Em411\Allegro\Api\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        } elseif (\array_key_exists('external', $data) && null === $data['external']) {
            $object->setExternal(null);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\OfferListingDtoV1Delivery::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('b2b', $data) && null !== $data['b2b']) {
            $object->setB2b($this->denormalizer->denormalize($data['b2b'], \Em411\Allegro\Api\Model\OfferListingDtoV1B2b::class, 'json', $context));
            unset($data['b2b']);
        } elseif (\array_key_exists('b2b', $data) && null === $data['b2b']) {
            $object->setB2b(null);
        }
        if (\array_key_exists('fundraisingCampaign', $data) && null !== $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign($this->denormalizer->denormalize($data['fundraisingCampaign'], \Em411\Allegro\Api\Model\JustId::class, 'json', $context));
            unset($data['fundraisingCampaign']);
        } elseif (\array_key_exists('fundraisingCampaign', $data) && null === $data['fundraisingCampaign']) {
            $object->setFundraisingCampaign(null);
        }
        if (\array_key_exists('isFulfillment', $data) && null !== $data['isFulfillment']) {
            $object->setIsFulfillment($data['isFulfillment']);
            unset($data['isFulfillment']);
        } elseif (\array_key_exists('isFulfillment', $data) && null === $data['isFulfillment']) {
            $object->setIsFulfillment(null);
        }
        if (\array_key_exists('additionalMarketplaces', $data) && null !== $data['additionalMarketplaces']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalMarketplaces'] as $key_1 => $value_1) {
                $values_1[$key_1] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
        } elseif (\array_key_exists('additionalMarketplaces', $data) && null === $data['additionalMarketplaces']) {
            $object->setAdditionalMarketplaces(null);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values = [];
            foreach ($data->getCategory() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['category'] = $values;
        }
        if ($data->isInitialized('primaryImage') && null !== $data->getPrimaryImage()) {
            $dataArray['primaryImage'] = $this->normalizer->normalize($data->getPrimaryImage(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('saleInfo') && null !== $data->getSaleInfo()) {
            $dataArray['saleInfo'] = $this->normalizer->normalize($data->getSaleInfo(), 'json', $context);
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
        }
        if ($data->isInitialized('stats')) {
            $dataArray['stats'] = $this->normalizer->normalize($data->getStats(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = $this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context);
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('b2b') && null !== $data->getB2b()) {
            $dataArray['b2b'] = $this->normalizer->normalize($data->getB2b(), 'json', $context);
        }
        if ($data->isInitialized('fundraisingCampaign') && null !== $data->getFundraisingCampaign()) {
            $dataArray['fundraisingCampaign'] = $this->normalizer->normalize($data->getFundraisingCampaign(), 'json', $context);
        }
        if ($data->isInitialized('isFulfillment') && null !== $data->getIsFulfillment()) {
            $dataArray['isFulfillment'] = $data->getIsFulfillment();
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $key_1 => $value_1) {
                $values_1[$key_1] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferListingDto::class => false];
    }
}
