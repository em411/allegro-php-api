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

class ThreadVBeta1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ThreadVBeta1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ThreadVBeta1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\ThreadVBeta1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('read', $data) && \is_int($data['read'])) {
            $data['read'] = (bool) $data['read'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('read', $data) && null !== $data['read']) {
            $object->setRead($data['read']);
            unset($data['read']);
        } elseif (\array_key_exists('read', $data) && null === $data['read']) {
            $object->setRead(null);
            unset($data['read']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date) {
                if (\is_string($data['createdAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdAt'])) {
                    try {
                        $date = new \DateTime($data['createdAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCreatedAt($date);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
            unset($data['createdAt']);
        }
        if (\array_key_exists('lastMessageDateTime', $data) && null !== $data['lastMessageDateTime']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageDateTime']);
            if (false === $date_1) {
                if (\is_string($data['lastMessageDateTime']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastMessageDateTime'])) {
                    try {
                        $date_1 = new \DateTime($data['lastMessageDateTime']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastMessageDateTime'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastMessageDateTime'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setLastMessageDateTime($date_1);
            unset($data['lastMessageDateTime']);
        } elseif (\array_key_exists('lastMessageDateTime', $data) && null === $data['lastMessageDateTime']) {
            $object->setLastMessageDateTime(null);
            unset($data['lastMessageDateTime']);
        }
        if (\array_key_exists('participants', $data) && null !== $data['participants']) {
            $values = [];
            foreach ($data['participants'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ThreadParticipantVBeta1::class, 'json', $context);
            }
            $object->setParticipants($values);
            unset($data['participants']);
        } elseif (\array_key_exists('participants', $data) && null === $data['participants']) {
            $object->setParticipants(null);
            unset($data['participants']);
        }
        if (\array_key_exists('orders', $data) && null !== $data['orders']) {
            $values_1 = [];
            foreach ($data['orders'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ThreadOrderVBeta1::class, 'json', $context);
            }
            $object->setOrders($values_1);
            unset($data['orders']);
        } elseif (\array_key_exists('orders', $data) && null === $data['orders']) {
            $object->setOrders(null);
            unset($data['orders']);
        }
        if (\array_key_exists('subType', $data) && null !== $data['subType']) {
            $object->setSubType($data['subType']);
            unset($data['subType']);
        } elseif (\array_key_exists('subType', $data) && null === $data['subType']) {
            $object->setSubType(null);
            unset($data['subType']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['read'] = $data->getRead();
        $dataArray['type'] = $data->getType();
        $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['lastMessageDateTime'] = $data->getLastMessageDateTime()->format('Y-m-d\TH:i:sP');
        $values = [];
        foreach ($data->getParticipants() as $value) {
            $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['participants'] = $values;
        if ($data->isInitialized('orders') && null !== $data->getOrders()) {
            $values_1 = [];
            foreach ($data->getOrders() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['orders'] = $values_1;
        }
        if ($data->isInitialized('subType') && null !== $data->getSubType()) {
            $dataArray['subType'] = $data->getSubType();
        }
        $dataArray['status'] = $data->getStatus();
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ThreadVBeta1::class => false];
    }
}
