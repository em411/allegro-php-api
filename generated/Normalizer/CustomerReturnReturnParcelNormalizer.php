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

class CustomerReturnReturnParcelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CustomerReturnReturnParcel::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CustomerReturnReturnParcel::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CustomerReturnReturnParcel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('waybill', $data) && null !== $data['waybill']) {
            $object->setWaybill($data['waybill']);
            unset($data['waybill']);
        } elseif (\array_key_exists('waybill', $data) && null === $data['waybill']) {
            $object->setWaybill(null);
        }
        if (\array_key_exists('transportingWaybill', $data) && null !== $data['transportingWaybill']) {
            $object->setTransportingWaybill($data['transportingWaybill']);
            unset($data['transportingWaybill']);
        } elseif (\array_key_exists('transportingWaybill', $data) && null === $data['transportingWaybill']) {
            $object->setTransportingWaybill(null);
        }
        if (\array_key_exists('carrierId', $data) && null !== $data['carrierId']) {
            $object->setCarrierId($data['carrierId']);
            unset($data['carrierId']);
        } elseif (\array_key_exists('carrierId', $data) && null === $data['carrierId']) {
            $object->setCarrierId(null);
        }
        if (\array_key_exists('transportingCarrierId', $data) && null !== $data['transportingCarrierId']) {
            $object->setTransportingCarrierId($data['transportingCarrierId']);
            unset($data['transportingCarrierId']);
        } elseif (\array_key_exists('transportingCarrierId', $data) && null === $data['transportingCarrierId']) {
            $object->setTransportingCarrierId(null);
        }
        if (\array_key_exists('sender', $data) && null !== $data['sender']) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], \Em411\Allegro\Api\Model\CustomerReturnParcelSender::class, 'json', $context));
            unset($data['sender']);
        } elseif (\array_key_exists('sender', $data) && null === $data['sender']) {
            $object->setSender(null);
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
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('waybill') && null !== $data->getWaybill()) {
            $dataArray['waybill'] = $data->getWaybill();
        }
        if ($data->isInitialized('transportingWaybill')) {
            $dataArray['transportingWaybill'] = $data->getTransportingWaybill();
        }
        if ($data->isInitialized('carrierId') && null !== $data->getCarrierId()) {
            $dataArray['carrierId'] = $data->getCarrierId();
        }
        if ($data->isInitialized('transportingCarrierId')) {
            $dataArray['transportingCarrierId'] = $data->getTransportingCarrierId();
        }
        if ($data->isInitialized('sender') && null !== $data->getSender()) {
            $dataArray['sender'] = $this->normalizer->normalize($data->getSender(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CustomerReturnReturnParcel::class => false];
    }
}
