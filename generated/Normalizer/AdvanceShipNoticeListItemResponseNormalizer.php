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

class AdvanceShipNoticeListItemResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AdvanceShipNoticeListItemResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AdvanceShipNoticeListItemResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AdvanceShipNoticeListItemResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('displayNumber', $data) && null !== $data['displayNumber']) {
            $object->setDisplayNumber($data['displayNumber']);
            unset($data['displayNumber']);
        } elseif (\array_key_exists('displayNumber', $data) && null === $data['displayNumber']) {
            $object->setDisplayNumber(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
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
        }
        if (\array_key_exists('handlingUnit', $data) && null !== $data['handlingUnit']) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['handlingUnit'], \Em411\Allegro\Api\Model\HandlingUnit::class, 'json', $context));
            unset($data['handlingUnit']);
        } elseif (\array_key_exists('handlingUnit', $data) && null === $data['handlingUnit']) {
            $object->setHandlingUnit(null);
        }
        if (\array_key_exists('labels', $data) && null !== $data['labels']) {
            $object->setLabels($this->denormalizer->denormalize($data['labels'], \Em411\Allegro\Api\Model\Labels::class, 'json', $context));
            unset($data['labels']);
        } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
            $object->setLabels(null);
        }
        if (\array_key_exists('shipping', $data) && null !== $data['shipping']) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Em411\Allegro\Api\Model\ShippingExtended::class, 'json', $context));
            unset($data['shipping']);
        } elseif (\array_key_exists('shipping', $data) && null === $data['shipping']) {
            $object->setShipping(null);
        }
        if (\array_key_exists('submittedAt', $data) && null !== $data['submittedAt']) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['submittedAt']));
            unset($data['submittedAt']);
        } elseif (\array_key_exists('submittedAt', $data) && null === $data['submittedAt']) {
            $object->setSubmittedAt(null);
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
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        if ($data->isInitialized('handlingUnit') && null !== $data->getHandlingUnit()) {
            $dataArray['handlingUnit'] = $this->normalizer->normalize($data->getHandlingUnit(), 'json', $context);
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $dataArray['labels'] = $this->normalizer->normalize($data->getLabels(), 'json', $context);
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = $this->normalizer->normalize($data->getShipping(), 'json', $context);
        }
        if ($data->isInitialized('submittedAt') && null !== $data->getSubmittedAt()) {
            $dataArray['submittedAt'] = $data->getSubmittedAt()->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\AdvanceShipNoticeListItemResponse::class => false];
    }
}
