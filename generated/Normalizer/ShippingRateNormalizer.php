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

class ShippingRateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ShippingRate::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ShippingRate::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ShippingRate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryMethod', $data) && null !== $data['deliveryMethod']) {
            $object->setDeliveryMethod($this->denormalizer->denormalize($data['deliveryMethod'], \Em411\Allegro\Api\Model\ShippingRateDeliveryMethod::class, 'json', $context));
            unset($data['deliveryMethod']);
        } elseif (\array_key_exists('deliveryMethod', $data) && null === $data['deliveryMethod']) {
            $object->setDeliveryMethod(null);
        }
        if (\array_key_exists('maxQuantityPerPackage', $data) && null !== $data['maxQuantityPerPackage']) {
            $object->setMaxQuantityPerPackage($data['maxQuantityPerPackage']);
            unset($data['maxQuantityPerPackage']);
        } elseif (\array_key_exists('maxQuantityPerPackage', $data) && null === $data['maxQuantityPerPackage']) {
            $object->setMaxQuantityPerPackage(null);
        }
        if (\array_key_exists('maxPackageWeight', $data) && null !== $data['maxPackageWeight']) {
            $object->setMaxPackageWeight($this->denormalizer->denormalize($data['maxPackageWeight'], \Em411\Allegro\Api\Model\ShippingRateMaxPackageWeight::class, 'json', $context));
            unset($data['maxPackageWeight']);
        } elseif (\array_key_exists('maxPackageWeight', $data) && null === $data['maxPackageWeight']) {
            $object->setMaxPackageWeight(null);
        }
        if (\array_key_exists('firstItemRate', $data) && null !== $data['firstItemRate']) {
            $object->setFirstItemRate($this->denormalizer->denormalize($data['firstItemRate'], \Em411\Allegro\Api\Model\ShippingRateFirstItemRate::class, 'json', $context));
            unset($data['firstItemRate']);
        } elseif (\array_key_exists('firstItemRate', $data) && null === $data['firstItemRate']) {
            $object->setFirstItemRate(null);
        }
        if (\array_key_exists('nextItemRate', $data) && null !== $data['nextItemRate']) {
            $object->setNextItemRate($this->denormalizer->denormalize($data['nextItemRate'], \Em411\Allegro\Api\Model\ShippingRateNextItemRate::class, 'json', $context));
            unset($data['nextItemRate']);
        } elseif (\array_key_exists('nextItemRate', $data) && null === $data['nextItemRate']) {
            $object->setNextItemRate(null);
        }
        if (\array_key_exists('shippingTime', $data) && null !== $data['shippingTime']) {
            $object->setShippingTime($this->denormalizer->denormalize($data['shippingTime'], \Em411\Allegro\Api\Model\ShippingRateShippingTime::class, 'json', $context));
            unset($data['shippingTime']);
        } elseif (\array_key_exists('shippingTime', $data) && null === $data['shippingTime']) {
            $object->setShippingTime(null);
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
        $dataArray['deliveryMethod'] = $this->normalizer->normalize($data->getDeliveryMethod(), 'json', $context);
        $dataArray['maxQuantityPerPackage'] = $data->getMaxQuantityPerPackage();
        if ($data->isInitialized('maxPackageWeight') && null !== $data->getMaxPackageWeight()) {
            $dataArray['maxPackageWeight'] = $this->normalizer->normalize($data->getMaxPackageWeight(), 'json', $context);
        }
        $dataArray['firstItemRate'] = $this->normalizer->normalize($data->getFirstItemRate(), 'json', $context);
        $dataArray['nextItemRate'] = $this->normalizer->normalize($data->getNextItemRate(), 'json', $context);
        if ($data->isInitialized('shippingTime') && null !== $data->getShippingTime()) {
            $dataArray['shippingTime'] = $this->normalizer->normalize($data->getShippingTime(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\ShippingRate::class => false];
    }
}
