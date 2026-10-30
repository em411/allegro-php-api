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

class CreateAdvanceShipNoticeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('volumeInCc', $data) && \is_int($data['volumeInCc'])) {
            $data['volumeInCc'] = (float) $data['volumeInCc'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('displayNumber', $data) && null !== $data['displayNumber']) {
            $object->setDisplayNumber($data['displayNumber']);
            unset($data['displayNumber']);
        } elseif (\array_key_exists('displayNumber', $data) && null === $data['displayNumber']) {
            $object->setDisplayNumber(null);
            unset($data['displayNumber']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
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
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']);
            if (false === $date_1) {
                if (\is_string($data['updatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['updatedAt'])) {
                    try {
                        $date_1 = new \DateTime($data['updatedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setUpdatedAt($date_1);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ProductItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
            unset($data['items']);
        }
        if (\array_key_exists('handlingUnit', $data) && null !== $data['handlingUnit']) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['handlingUnit'], \Em411\Allegro\Api\Model\HandlingUnit::class, 'json', $context));
            unset($data['handlingUnit']);
        } elseif (\array_key_exists('handlingUnit', $data) && null === $data['handlingUnit']) {
            $object->setHandlingUnit(null);
            unset($data['handlingUnit']);
        }
        if (\array_key_exists('labels', $data) && null !== $data['labels']) {
            $object->setLabels($this->denormalizer->denormalize($data['labels'], \Em411\Allegro\Api\Model\Labels::class, 'json', $context));
            unset($data['labels']);
        } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
            $object->setLabels(null);
            unset($data['labels']);
        }
        if (\array_key_exists('shipping', $data) && null !== $data['shipping']) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Em411\Allegro\Api\Model\ShippingExtended::class, 'json', $context));
            unset($data['shipping']);
        } elseif (\array_key_exists('shipping', $data) && null === $data['shipping']) {
            $object->setShipping(null);
            unset($data['shipping']);
        }
        if (\array_key_exists('volumeInCc', $data) && null !== $data['volumeInCc']) {
            $object->setVolumeInCc($data['volumeInCc']);
            unset($data['volumeInCc']);
        } elseif (\array_key_exists('volumeInCc', $data) && null === $data['volumeInCc']) {
            $object->setVolumeInCc(null);
            unset($data['volumeInCc']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['displayNumber'] = $data->getDisplayNumber();
        $dataArray['status'] = $data->getStatus();
        $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updatedAt'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['items'] = $values;
        if ($data->isInitialized('handlingUnit') && null !== $data->getHandlingUnit()) {
            $dataArray['handlingUnit'] = null === $data->getHandlingUnit() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getHandlingUnit(), 'json', $context));
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $dataArray['labels'] = null === $data->getLabels() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getLabels(), 'json', $context));
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = null === $data->getShipping() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getShipping(), 'json', $context));
        }
        if ($data->isInitialized('volumeInCc') && null !== $data->getVolumeInCc()) {
            $dataArray['volumeInCc'] = $data->getVolumeInCc();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CreateAdvanceShipNoticeResponse::class => false];
    }
}
