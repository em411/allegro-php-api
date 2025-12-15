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

class ShippingExtendedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ShippingExtended::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ShippingExtended::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (\array_key_exists('method', $data) && 'OWN_TRANSPORT' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\OwnTransportShipping', $format, $context);
        }
        if (\array_key_exists('method', $data) && 'COURIER_BY_SELLER' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\CourierBySellerShipping', $format, $context);
        }
        if (\array_key_exists('method', $data) && 'THIRD_PARTY_DELIVERY' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\ThirdPartyDeliveryShipping', $format, $context);
        }
        if (\array_key_exists('method', $data) && 'ALREADY_IN_WAREHOUSE' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\AlreadyInWarehouseShipping', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ShippingExtended();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->setMethod($data['method']);
            unset($data['method']);
        } elseif (\array_key_exists('method', $data) && null === $data['method']) {
            $object->setMethod(null);
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
        if (null !== $data->getMethod() && 'OWN_TRANSPORT' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getMethod() && 'COURIER_BY_SELLER' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getMethod() && 'THIRD_PARTY_DELIVERY' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getMethod() && 'ALREADY_IN_WAREHOUSE' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['method'] = $data->getMethod();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ShippingExtended::class => false];
    }
}
