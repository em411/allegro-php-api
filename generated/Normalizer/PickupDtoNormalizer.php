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

class PickupDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PickupDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PickupDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PickupDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('carrierPickupId', $data) && null !== $data['carrierPickupId']) {
            $object->setCarrierPickupId($data['carrierPickupId']);
            unset($data['carrierPickupId']);
        } elseif (\array_key_exists('carrierPickupId', $data) && null === $data['carrierPickupId']) {
            $object->setCarrierPickupId(null);
        }
        if (\array_key_exists('carrier', $data) && null !== $data['carrier']) {
            $object->setCarrier($data['carrier']);
            unset($data['carrier']);
        } elseif (\array_key_exists('carrier', $data) && null === $data['carrier']) {
            $object->setCarrier(null);
        }
        if (\array_key_exists('pickupCarrier', $data) && null !== $data['pickupCarrier']) {
            $object->setPickupCarrier($data['pickupCarrier']);
            unset($data['pickupCarrier']);
        } elseif (\array_key_exists('pickupCarrier', $data) && null === $data['pickupCarrier']) {
            $object->setPickupCarrier(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\SenderAddressDto::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
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
        if (\array_key_exists('waybills', $data) && null !== $data['waybills']) {
            $values_1 = [];
            foreach ($data['waybills'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWaybills($values_1);
            unset($data['waybills']);
        } elseif (\array_key_exists('waybills', $data) && null === $data['waybills']) {
            $object->setWaybills(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('carrierPickupId') && null !== $data->getCarrierPickupId()) {
            $dataArray['carrierPickupId'] = $data->getCarrierPickupId();
        }
        if ($data->isInitialized('carrier') && null !== $data->getCarrier()) {
            $dataArray['carrier'] = $data->getCarrier();
        }
        if ($data->isInitialized('pickupCarrier') && null !== $data->getPickupCarrier()) {
            $dataArray['pickupCarrier'] = $data->getPickupCarrier();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('shipmentIds') && null !== $data->getShipmentIds()) {
            $values = [];
            foreach ($data->getShipmentIds() as $value) {
                $values[] = $value;
            }
            $dataArray['shipmentIds'] = $values;
        }
        if ($data->isInitialized('waybills') && null !== $data->getWaybills()) {
            $values_1 = [];
            foreach ($data->getWaybills() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['waybills'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\PickupDto::class => false];
    }
}
