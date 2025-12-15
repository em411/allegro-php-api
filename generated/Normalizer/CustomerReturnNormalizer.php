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

class CustomerReturnNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CustomerReturn::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CustomerReturn::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CustomerReturn();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && null === $data['referenceNumber']) {
            $object->setReferenceNumber(null);
        }
        if (\array_key_exists('orderId', $data) && null !== $data['orderId']) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        } elseif (\array_key_exists('orderId', $data) && null === $data['orderId']) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\CustomerReturnBuyer::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CustomerReturnItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('refund', $data) && null !== $data['refund']) {
            $object->setRefund($this->denormalizer->denormalize($data['refund'], \Em411\Allegro\Api\Model\CustomerReturnRefund::class, 'json', $context));
            unset($data['refund']);
        } elseif (\array_key_exists('refund', $data) && null === $data['refund']) {
            $object->setRefund(null);
        }
        if (\array_key_exists('parcels', $data) && null !== $data['parcels']) {
            $values_1 = [];
            foreach ($data['parcels'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\CustomerReturnReturnParcel::class, 'json', $context);
            }
            $object->setParcels($values_1);
            unset($data['parcels']);
        } elseif (\array_key_exists('parcels', $data) && null === $data['parcels']) {
            $object->setParcels(null);
        }
        if (\array_key_exists('rejection', $data) && null !== $data['rejection']) {
            $object->setRejection($this->denormalizer->denormalize($data['rejection'], \Em411\Allegro\Api\Model\CustomerReturnRejection::class, 'json', $context));
            unset($data['rejection']);
        } elseif (\array_key_exists('rejection', $data) && null === $data['rejection']) {
            $object->setRejection(null);
        }
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
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
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('orderId') && null !== $data->getOrderId()) {
            $dataArray['orderId'] = $data->getOrderId();
        }
        if ($data->isInitialized('buyer') && null !== $data->getBuyer()) {
            $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['items'] = $values;
        }
        if ($data->isInitialized('refund') && null !== $data->getRefund()) {
            $dataArray['refund'] = $this->normalizer->normalize($data->getRefund(), 'json', $context);
        }
        if ($data->isInitialized('parcels') && null !== $data->getParcels()) {
            $values_1 = [];
            foreach ($data->getParcels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['parcels'] = $values_1;
        }
        if ($data->isInitialized('rejection') && null !== $data->getRejection()) {
            $dataArray['rejection'] = $this->normalizer->normalize($data->getRejection(), 'json', $context);
        }
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
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
        return [\Em411\Allegro\Api\Model\CustomerReturn::class => false];
    }
}
