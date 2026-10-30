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

class DeliveryOptionDtoLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliveryOptionDtoLimits::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliveryOptionDtoLimits::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\DeliveryOptionDtoLimits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cashOnDelivery', $data) && null !== $data['cashOnDelivery']) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], \Em411\Allegro\Api\Model\MoneyDto::class, 'json', $context));
            unset($data['cashOnDelivery']);
        } elseif (\array_key_exists('cashOnDelivery', $data) && null === $data['cashOnDelivery']) {
            $object->setCashOnDelivery(null);
            unset($data['cashOnDelivery']);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], \Em411\Allegro\Api\Model\MoneyDto::class, 'json', $context));
            unset($data['insurance']);
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
            unset($data['insurance']);
        }
        if (\array_key_exists('dimensions', $data) && null !== $data['dimensions']) {
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Em411\Allegro\Api\Model\DeliveryOptionDtoLimitsDimensions::class, 'json', $context));
            unset($data['dimensions']);
        } elseif (\array_key_exists('dimensions', $data) && null === $data['dimensions']) {
            $object->setDimensions(null);
            unset($data['dimensions']);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \Em411\Allegro\Api\Model\WeightValue::class, 'json', $context));
            unset($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
            unset($data['weight']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cashOnDelivery') && null !== $data->getCashOnDelivery()) {
            $dataArray['cashOnDelivery'] = null === $data->getCashOnDelivery() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCashOnDelivery(), 'json', $context));
        }
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['insurance'] = null === $data->getInsurance() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getInsurance(), 'json', $context));
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['dimensions'] = null === $data->getDimensions() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDimensions(), 'json', $context));
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = null === $data->getWeight() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getWeight(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\DeliveryOptionDtoLimits::class => false];
    }
}
