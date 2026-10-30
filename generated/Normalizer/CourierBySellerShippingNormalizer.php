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

class CourierBySellerShippingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CourierBySellerShipping::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CourierBySellerShipping::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CourierBySellerShipping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->setMethod($data['method']);
            unset($data['method']);
        } elseif (\array_key_exists('method', $data) && null === $data['method']) {
            $object->setMethod(null);
            unset($data['method']);
        }
        if (\array_key_exists('courier', $data) && null !== $data['courier']) {
            $object->setCourier($this->denormalizer->denormalize($data['courier'], \Em411\Allegro\Api\Model\Courier::class, 'json', $context));
            unset($data['courier']);
        } elseif (\array_key_exists('courier', $data) && null === $data['courier']) {
            $object->setCourier(null);
            unset($data['courier']);
        }
        if (\array_key_exists('estimatedTimeOfArrival', $data) && null !== $data['estimatedTimeOfArrival']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['estimatedTimeOfArrival']);
            if (false === $date) {
                if (\is_string($data['estimatedTimeOfArrival']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['estimatedTimeOfArrival'])) {
                    try {
                        $date = new \DateTime($data['estimatedTimeOfArrival']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['estimatedTimeOfArrival'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['estimatedTimeOfArrival'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setEstimatedTimeOfArrival($date);
            unset($data['estimatedTimeOfArrival']);
        } elseif (\array_key_exists('estimatedTimeOfArrival', $data) && null === $data['estimatedTimeOfArrival']) {
            $object->setEstimatedTimeOfArrival(null);
            unset($data['estimatedTimeOfArrival']);
        }
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        } elseif (\array_key_exists('countryCode', $data) && null === $data['countryCode']) {
            $object->setCountryCode(null);
            unset($data['countryCode']);
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
        if ($data->isInitialized('method') && null !== $data->getMethod()) {
            $dataArray['method'] = $data->getMethod();
        }
        if ($data->isInitialized('courier') && null !== $data->getCourier()) {
            $dataArray['courier'] = null === $data->getCourier() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCourier(), 'json', $context));
        }
        if ($data->isInitialized('estimatedTimeOfArrival') && null !== $data->getEstimatedTimeOfArrival()) {
            $dataArray['estimatedTimeOfArrival'] = $data->getEstimatedTimeOfArrival()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
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
        return [\Em411\Allegro\Api\Model\CourierBySellerShipping::class => false];
    }
}
