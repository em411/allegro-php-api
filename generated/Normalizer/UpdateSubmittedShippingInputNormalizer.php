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

class UpdateSubmittedShippingInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\UpdateSubmittedShippingInput::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\UpdateSubmittedShippingInput::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\UpdateSubmittedShippingInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('truckLicencePlate', $data) && null !== $data['truckLicencePlate']) {
            $object->setTruckLicencePlate($data['truckLicencePlate']);
            unset($data['truckLicencePlate']);
        } elseif (\array_key_exists('truckLicencePlate', $data) && null === $data['truckLicencePlate']) {
            $object->setTruckLicencePlate(null);
            unset($data['truckLicencePlate']);
        }
        if (\array_key_exists('courier', $data) && null !== $data['courier']) {
            $object->setCourier($this->denormalizer->denormalize($data['courier'], \Em411\Allegro\Api\Model\Courier::class, 'json', $context));
            unset($data['courier']);
        } elseif (\array_key_exists('courier', $data) && null === $data['courier']) {
            $object->setCourier(null);
            unset($data['courier']);
        }
        if (\array_key_exists('thirdParty', $data) && null !== $data['thirdParty']) {
            $object->setThirdParty($this->denormalizer->denormalize($data['thirdParty'], \Em411\Allegro\Api\Model\ThirdParty::class, 'json', $context));
            unset($data['thirdParty']);
        } elseif (\array_key_exists('thirdParty', $data) && null === $data['thirdParty']) {
            $object->setThirdParty(null);
            unset($data['thirdParty']);
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
        if ($data->isInitialized('estimatedTimeOfArrival') && null !== $data->getEstimatedTimeOfArrival()) {
            $dataArray['estimatedTimeOfArrival'] = $data->getEstimatedTimeOfArrival()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('truckLicencePlate') && null !== $data->getTruckLicencePlate()) {
            $dataArray['truckLicencePlate'] = $data->getTruckLicencePlate();
        }
        if ($data->isInitialized('courier') && null !== $data->getCourier()) {
            $dataArray['courier'] = null === $data->getCourier() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCourier(), 'json', $context));
        }
        if ($data->isInitialized('thirdParty') && null !== $data->getThirdParty()) {
            $dataArray['thirdParty'] = null === $data->getThirdParty() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getThirdParty(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\UpdateSubmittedShippingInput::class => false];
    }
}
