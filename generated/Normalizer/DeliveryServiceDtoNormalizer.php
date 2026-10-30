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

class DeliveryServiceDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliveryServiceDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliveryServiceDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\DeliveryServiceDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($this->denormalizer->denormalize($data['id'], \Em411\Allegro\Api\Model\DeliveryServiceIdDto::class, 'json', $context));
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
        if (\array_key_exists('carrierId', $data) && null !== $data['carrierId']) {
            $object->setCarrierId($data['carrierId']);
            unset($data['carrierId']);
        } elseif (\array_key_exists('carrierId', $data) && null === $data['carrierId']) {
            $object->setCarrierId(null);
            unset($data['carrierId']);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $values = [];
            foreach ($data['additionalServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\AdditionalServiceDto::class, 'json', $context);
            }
            $object->setAdditionalServices($values);
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('additionalProperties', $data) && null !== $data['additionalProperties']) {
            $values_1 = [];
            foreach ($data['additionalProperties'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\AdditionalPropertyDto::class, 'json', $context);
            }
            $object->setAdditionalProperties($values_1);
            unset($data['additionalProperties']);
        } elseif (\array_key_exists('additionalProperties', $data) && null === $data['additionalProperties']) {
            $object->setAdditionalProperties(null);
            unset($data['additionalProperties']);
        }
        if (\array_key_exists('owner', $data) && null !== $data['owner']) {
            $object->setOwner($data['owner']);
            unset($data['owner']);
        } elseif (\array_key_exists('owner', $data) && null === $data['owner']) {
            $object->setOwner(null);
            unset($data['owner']);
        }
        if (\array_key_exists('marketplaces', $data) && null !== $data['marketplaces']) {
            $values_2 = [];
            foreach ($data['marketplaces'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMarketplaces($values_2);
            unset($data['marketplaces']);
        } elseif (\array_key_exists('marketplaces', $data) && null === $data['marketplaces']) {
            $object->setMarketplaces(null);
            unset($data['marketplaces']);
        }
        if (\array_key_exists('packageTypes', $data) && null !== $data['packageTypes']) {
            $values_3 = [];
            foreach ($data['packageTypes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPackageTypes($values_3);
            unset($data['packageTypes']);
        } elseif (\array_key_exists('packageTypes', $data) && null === $data['packageTypes']) {
            $object->setPackageTypes(null);
            unset($data['packageTypes']);
        }
        if (\array_key_exists('cashOnDelivery', $data) && null !== $data['cashOnDelivery']) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], \Em411\Allegro\Api\Model\CashOnDeliveryLimitDto::class, 'json', $context));
            unset($data['cashOnDelivery']);
        } elseif (\array_key_exists('cashOnDelivery', $data) && null === $data['cashOnDelivery']) {
            $object->setCashOnDelivery(null);
            unset($data['cashOnDelivery']);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], \Em411\Allegro\Api\Model\LimitWithCurrencyDto::class, 'json', $context));
            unset($data['insurance']);
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
            unset($data['insurance']);
        }
        if (\array_key_exists('features', $data) && null !== $data['features']) {
            $values_4 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data['features'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->setFeatures($values_4);
            unset($data['features']);
        } elseif (\array_key_exists('features', $data) && null === $data['features']) {
            $object->setFeatures(null);
            unset($data['features']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = null === $data->getId() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getId(), 'json', $context));
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('carrierId') && null !== $data->getCarrierId()) {
            $dataArray['carrierId'] = $data->getCarrierId();
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values = [];
            foreach ($data->getAdditionalServices() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['additionalServices'] = $values;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $values_1 = [];
            foreach ($data->getAdditionalProperties() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['additionalProperties'] = $values_1;
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner();
        }
        if ($data->isInitialized('marketplaces') && null !== $data->getMarketplaces()) {
            $values_2 = [];
            foreach ($data->getMarketplaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['marketplaces'] = $values_2;
        }
        if ($data->isInitialized('packageTypes') && null !== $data->getPackageTypes()) {
            $values_3 = [];
            foreach ($data->getPackageTypes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['packageTypes'] = $values_3;
        }
        if ($data->isInitialized('cashOnDelivery') && null !== $data->getCashOnDelivery()) {
            $dataArray['cashOnDelivery'] = null === $data->getCashOnDelivery() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCashOnDelivery(), 'json', $context));
        }
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['insurance'] = null === $data->getInsurance() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getInsurance(), 'json', $context));
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values_4 = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data->getFeatures() as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $dataArray['features'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\DeliveryServiceDto::class => false];
    }
}
