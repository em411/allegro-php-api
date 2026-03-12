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

class PickupCreateRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PickupCreateRequestDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PickupCreateRequestDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PickupCreateRequestDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentIds', $data) && null !== $data['shipmentIds']) {
            $values = [];
            foreach ($data['shipmentIds'] as $value) {
                $values[] = $value;
            }
            $object->setShipmentIds($values);
            unset($data['shipmentIds']);
        } elseif (\array_key_exists('shipmentIds', $data) && null === $data['shipmentIds']) {
            $object->setShipmentIds(null);
        }
        if (\array_key_exists('pickupDateProposalId', $data) && null !== $data['pickupDateProposalId']) {
            $object->setPickupDateProposalId($data['pickupDateProposalId']);
            unset($data['pickupDateProposalId']);
        } elseif (\array_key_exists('pickupDateProposalId', $data) && null === $data['pickupDateProposalId']) {
            $object->setPickupDateProposalId(null);
        }
        if (\array_key_exists('pickupTime', $data) && null !== $data['pickupTime']) {
            $object->setPickupTime($this->denormalizer->denormalize($data['pickupTime'], \Em411\Allegro\Api\Model\PickupTimeDto::class, 'json', $context));
            unset($data['pickupTime']);
        } elseif (\array_key_exists('pickupTime', $data) && null === $data['pickupTime']) {
            $object->setPickupTime(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\PickupAddressDto::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getShipmentIds() as $value) {
            $values[] = $value;
        }
        $dataArray['shipmentIds'] = $values;
        $dataArray['pickupDateProposalId'] = $data->getPickupDateProposalId();
        if ($data->isInitialized('pickupTime') && null !== $data->getPickupTime()) {
            $dataArray['pickupTime'] = $this->normalizer->normalize($data->getPickupTime(), 'json', $context);
        }
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\PickupCreateRequestDto::class => false];
    }
}
