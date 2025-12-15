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

class CheckoutFormDeliveryReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormDeliveryReference::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormDeliveryReference::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CheckoutFormDeliveryReference();
        if (\array_key_exists('smart', $data) && \is_int($data['smart'])) {
            $data['smart'] = (bool) $data['smart'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryAddress::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->setMethod($this->denormalizer->denormalize($data['method'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryMethod::class, 'json', $context));
            unset($data['method']);
        } elseif (\array_key_exists('method', $data) && null === $data['method']) {
            $object->setMethod(null);
        }
        if (\array_key_exists('pickupPoint', $data) && null !== $data['pickupPoint']) {
            $object->setPickupPoint($this->denormalizer->denormalize($data['pickupPoint'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryPickupPoint::class, 'json', $context));
            unset($data['pickupPoint']);
        } elseif (\array_key_exists('pickupPoint', $data) && null === $data['pickupPoint']) {
            $object->setPickupPoint(null);
        }
        if (\array_key_exists('cost', $data) && null !== $data['cost']) {
            $object->setCost($this->denormalizer->denormalize($data['cost'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['cost']);
        } elseif (\array_key_exists('cost', $data) && null === $data['cost']) {
            $object->setCost(null);
        }
        if (\array_key_exists('time', $data) && null !== $data['time']) {
            $object->setTime($this->denormalizer->denormalize($data['time'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryTime::class, 'json', $context));
            unset($data['time']);
        } elseif (\array_key_exists('time', $data) && null === $data['time']) {
            $object->setTime(null);
        }
        if (\array_key_exists('smart', $data) && null !== $data['smart']) {
            $object->setSmart($data['smart']);
            unset($data['smart']);
        } elseif (\array_key_exists('smart', $data) && null === $data['smart']) {
            $object->setSmart(null);
        }
        if (\array_key_exists('cancellation', $data) && null !== $data['cancellation']) {
            $object->setCancellation($this->denormalizer->denormalize($data['cancellation'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryCancellation::class, 'json', $context));
            unset($data['cancellation']);
        } elseif (\array_key_exists('cancellation', $data) && null === $data['cancellation']) {
            $object->setCancellation(null);
        }
        if (\array_key_exists('calculatedNumberOfPackages', $data) && null !== $data['calculatedNumberOfPackages']) {
            $object->setCalculatedNumberOfPackages($data['calculatedNumberOfPackages']);
            unset($data['calculatedNumberOfPackages']);
        } elseif (\array_key_exists('calculatedNumberOfPackages', $data) && null === $data['calculatedNumberOfPackages']) {
            $object->setCalculatedNumberOfPackages(null);
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
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('method') && null !== $data->getMethod()) {
            $dataArray['method'] = $this->normalizer->normalize($data->getMethod(), 'json', $context);
        }
        if ($data->isInitialized('pickupPoint') && null !== $data->getPickupPoint()) {
            $dataArray['pickupPoint'] = $this->normalizer->normalize($data->getPickupPoint(), 'json', $context);
        }
        if ($data->isInitialized('cost') && null !== $data->getCost()) {
            $dataArray['cost'] = $this->normalizer->normalize($data->getCost(), 'json', $context);
        }
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $this->normalizer->normalize($data->getTime(), 'json', $context);
        }
        if ($data->isInitialized('smart') && null !== $data->getSmart()) {
            $dataArray['smart'] = $data->getSmart();
        }
        if ($data->isInitialized('cancellation') && null !== $data->getCancellation()) {
            $dataArray['cancellation'] = $this->normalizer->normalize($data->getCancellation(), 'json', $context);
        }
        if ($data->isInitialized('calculatedNumberOfPackages') && null !== $data->getCalculatedNumberOfPackages()) {
            $dataArray['calculatedNumberOfPackages'] = $data->getCalculatedNumberOfPackages();
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
        return [\Em411\Allegro\Api\Model\CheckoutFormDeliveryReference::class => false];
    }
}
