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

class PickupDateProposalsDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PickupDateProposalsDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PickupDateProposalsDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PickupDateProposalsDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentId', $data) && null !== $data['shipmentId']) {
            $object->setShipmentId($data['shipmentId']);
            unset($data['shipmentId']);
        } elseif (\array_key_exists('shipmentId', $data) && null === $data['shipmentId']) {
            $object->setShipmentId(null);
        }
        if (\array_key_exists('proposalItems', $data) && null !== $data['proposalItems']) {
            $values = [];
            foreach ($data['proposalItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\PickupDateProposalDto::class, 'json', $context);
            }
            $object->setProposalItems($values);
            unset($data['proposalItems']);
        } elseif (\array_key_exists('proposalItems', $data) && null === $data['proposalItems']) {
            $object->setProposalItems(null);
        }
        if (\array_key_exists('pickupTimes', $data) && null !== $data['pickupTimes']) {
            $values_1 = [];
            foreach ($data['pickupTimes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\PickupTimeDto::class, 'json', $context);
            }
            $object->setPickupTimes($values_1);
            unset($data['pickupTimes']);
        } elseif (\array_key_exists('pickupTimes', $data) && null === $data['pickupTimes']) {
            $object->setPickupTimes(null);
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
        if ($data->isInitialized('shipmentId') && null !== $data->getShipmentId()) {
            $dataArray['shipmentId'] = $data->getShipmentId();
        }
        if ($data->isInitialized('proposalItems') && null !== $data->getProposalItems()) {
            $values = [];
            foreach ($data->getProposalItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['proposalItems'] = $values;
        }
        if ($data->isInitialized('pickupTimes') && null !== $data->getPickupTimes()) {
            $values_1 = [];
            foreach ($data->getPickupTimes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['pickupTimes'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\PickupDateProposalsDto::class => false];
    }
}
