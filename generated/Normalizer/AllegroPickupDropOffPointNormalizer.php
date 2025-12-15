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

class AllegroPickupDropOffPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AllegroPickupDropOffPoint::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AllegroPickupDropOffPoint::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AllegroPickupDropOffPoint();
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
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('services', $data) && null !== $data['services']) {
            $values = [];
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\AllegroPickupDropOffPointServicesItem::class, 'json', $context);
            }
            $object->setServices($values);
            unset($data['services']);
        } elseif (\array_key_exists('services', $data) && null === $data['services']) {
            $object->setServices(null);
        }
        if (\array_key_exists('restrictions', $data) && null !== $data['restrictions']) {
            $values_1 = [];
            foreach ($data['restrictions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\AllegroPickupDropOffPointRestrictionsItem::class, 'json', $context);
            }
            $object->setRestrictions($values_1);
            unset($data['restrictions']);
        } elseif (\array_key_exists('restrictions', $data) && null === $data['restrictions']) {
            $object->setRestrictions(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $values_2 = [];
            foreach ($data['payments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\AllegroPickupDropOffPointPaymentsItem::class, 'json', $context);
            }
            $object->setPayments($values_2);
            unset($data['payments']);
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\AllegroPickupDropOffPointAddress::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('opening', $data) && null !== $data['opening']) {
            $values_3 = [];
            foreach ($data['opening'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Em411\Allegro\Api\Model\AllegroPickupDropOffPointOpeningItem::class, 'json', $context);
            }
            $object->setOpening($values_3);
            unset($data['opening']);
        } elseif (\array_key_exists('opening', $data) && null === $data['opening']) {
            $object->setOpening(null);
        }
        if (\array_key_exists('carriers', $data) && null !== $data['carriers']) {
            $values_4 = [];
            foreach ($data['carriers'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCarriers($values_4);
            unset($data['carriers']);
        } elseif (\array_key_exists('carriers', $data) && null === $data['carriers']) {
            $object->setCarriers(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['type'] = $data->getType();
        $values = [];
        foreach ($data->getServices() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['services'] = $values;
        $values_1 = [];
        foreach ($data->getRestrictions() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['restrictions'] = $values_1;
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $values_2 = [];
        foreach ($data->getPayments() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['payments'] = $values_2;
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        $values_3 = [];
        foreach ($data->getOpening() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['opening'] = $values_3;
        $values_4 = [];
        foreach ($data->getCarriers() as $value_4) {
            $values_4[] = $value_4;
        }
        $dataArray['carriers'] = $values_4;
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\AllegroPickupDropOffPoint::class => false];
    }
}
