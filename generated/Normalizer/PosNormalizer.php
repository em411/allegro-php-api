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

class PosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Pos::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Pos::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\Pos();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('externalId', $data) && null !== $data['externalId']) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        } elseif (\array_key_exists('externalId', $data) && null === $data['externalId']) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('seller', $data) && null !== $data['seller']) {
            $object->setSeller($this->denormalizer->denormalize($data['seller'], \Em411\Allegro\Api\Model\Seller::class, 'json', $context));
            unset($data['seller']);
        } elseif (\array_key_exists('seller', $data) && null === $data['seller']) {
            $object->setSeller(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\Address::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('phoneNumber', $data) && null !== $data['phoneNumber']) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        } elseif (\array_key_exists('phoneNumber', $data) && null === $data['phoneNumber']) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('locations', $data) && null !== $data['locations']) {
            $values = [];
            foreach ($data['locations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\PosLocation::class, 'json', $context);
            }
            $object->setLocations($values);
            unset($data['locations']);
        } elseif (\array_key_exists('locations', $data) && null === $data['locations']) {
            $object->setLocations(null);
        }
        if (\array_key_exists('openHours', $data) && null !== $data['openHours']) {
            $values_1 = [];
            foreach ($data['openHours'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\OpenHour::class, 'json', $context);
            }
            $object->setOpenHours($values_1);
            unset($data['openHours']);
        } elseif (\array_key_exists('openHours', $data) && null === $data['openHours']) {
            $object->setOpenHours(null);
        }
        if (\array_key_exists('serviceTime', $data) && null !== $data['serviceTime']) {
            $object->setServiceTime($data['serviceTime']);
            unset($data['serviceTime']);
        } elseif (\array_key_exists('serviceTime', $data) && null === $data['serviceTime']) {
            $object->setServiceTime(null);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $values_2 = [];
            foreach ($data['payments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\Payment::class, 'json', $context);
            }
            $object->setPayments($values_2);
            unset($data['payments']);
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
        }
        if (\array_key_exists('confirmationType', $data) && null !== $data['confirmationType']) {
            $object->setConfirmationType($data['confirmationType']);
            unset($data['confirmationType']);
        } elseif (\array_key_exists('confirmationType', $data) && null === $data['confirmationType']) {
            $object->setConfirmationType(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['externalId'] = $data->getExternalId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('seller') && null !== $data->getSeller()) {
            $dataArray['seller'] = $this->normalizer->normalize($data->getSeller(), 'json', $context);
        }
        $dataArray['type'] = $data->getType();
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('locations') && null !== $data->getLocations()) {
            $values = [];
            foreach ($data->getLocations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['locations'] = $values;
        }
        $values_1 = [];
        foreach ($data->getOpenHours() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['openHours'] = $values_1;
        if ($data->isInitialized('serviceTime') && null !== $data->getServiceTime()) {
            $dataArray['serviceTime'] = $data->getServiceTime();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $values_2 = [];
            foreach ($data->getPayments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['payments'] = $values_2;
        }
        $dataArray['confirmationType'] = $data->getConfirmationType();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\Pos::class => false];
    }
}
