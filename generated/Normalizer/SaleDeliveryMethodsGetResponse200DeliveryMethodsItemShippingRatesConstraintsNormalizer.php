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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints();
        if (\array_key_exists('allowed', $data) && \is_int($data['allowed'])) {
            $data['allowed'] = (bool) $data['allowed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowed', $data) && null !== $data['allowed']) {
            $object->setAllowed($data['allowed']);
            unset($data['allowed']);
        } elseif (\array_key_exists('allowed', $data) && null === $data['allowed']) {
            $object->setAllowed(null);
        }
        if (\array_key_exists('maxQuantityPerPackage', $data) && null !== $data['maxQuantityPerPackage']) {
            $object->setMaxQuantityPerPackage($this->denormalizer->denormalize($data['maxQuantityPerPackage'], \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage::class, 'json', $context));
            unset($data['maxQuantityPerPackage']);
        } elseif (\array_key_exists('maxQuantityPerPackage', $data) && null === $data['maxQuantityPerPackage']) {
            $object->setMaxQuantityPerPackage(null);
        }
        if (\array_key_exists('maxPackageWeight', $data) && null !== $data['maxPackageWeight']) {
            $object->setMaxPackageWeight($this->denormalizer->denormalize($data['maxPackageWeight'], \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class, 'json', $context));
            unset($data['maxPackageWeight']);
        } elseif (\array_key_exists('maxPackageWeight', $data) && null === $data['maxPackageWeight']) {
            $object->setMaxPackageWeight(null);
        }
        if (\array_key_exists('firstItemRate', $data) && null !== $data['firstItemRate']) {
            $object->setFirstItemRate($this->denormalizer->denormalize($data['firstItemRate'], \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate::class, 'json', $context));
            unset($data['firstItemRate']);
        } elseif (\array_key_exists('firstItemRate', $data) && null === $data['firstItemRate']) {
            $object->setFirstItemRate(null);
        }
        if (\array_key_exists('nextItemRate', $data) && null !== $data['nextItemRate']) {
            $object->setNextItemRate($this->denormalizer->denormalize($data['nextItemRate'], \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate::class, 'json', $context));
            unset($data['nextItemRate']);
        } elseif (\array_key_exists('nextItemRate', $data) && null === $data['nextItemRate']) {
            $object->setNextItemRate(null);
        }
        if (\array_key_exists('shippingTime', $data) && null !== $data['shippingTime']) {
            $object->setShippingTime($this->denormalizer->denormalize($data['shippingTime'], \Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class, 'json', $context));
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
        if ($data->isInitialized('allowed') && null !== $data->getAllowed()) {
            $dataArray['allowed'] = $data->getAllowed();
        }
        if ($data->isInitialized('maxQuantityPerPackage') && null !== $data->getMaxQuantityPerPackage()) {
            $dataArray['maxQuantityPerPackage'] = $this->normalizer->normalize($data->getMaxQuantityPerPackage(), 'json', $context);
        }
        if ($data->isInitialized('maxPackageWeight') && null !== $data->getMaxPackageWeight()) {
            $dataArray['maxPackageWeight'] = $this->normalizer->normalize($data->getMaxPackageWeight(), 'json', $context);
        }
        if ($data->isInitialized('firstItemRate') && null !== $data->getFirstItemRate()) {
            $dataArray['firstItemRate'] = $this->normalizer->normalize($data->getFirstItemRate(), 'json', $context);
        }
        if ($data->isInitialized('nextItemRate') && null !== $data->getNextItemRate()) {
            $dataArray['nextItemRate'] = $this->normalizer->normalize($data->getNextItemRate(), 'json', $context);
        }
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
        return [\Em411\Allegro\Api\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class => false];
    }
}
