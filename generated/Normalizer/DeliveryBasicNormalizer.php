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

class DeliveryBasicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliveryBasic::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliveryBasic::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\DeliveryBasic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalInfo', $data) && null !== $data['additionalInfo']) {
            $object->setAdditionalInfo($data['additionalInfo']);
            unset($data['additionalInfo']);
        } elseif (\array_key_exists('additionalInfo', $data) && null === $data['additionalInfo']) {
            $object->setAdditionalInfo(null);
        }
        if (\array_key_exists('handlingTime', $data) && null !== $data['handlingTime']) {
            $object->setHandlingTime($data['handlingTime']);
            unset($data['handlingTime']);
        } elseif (\array_key_exists('handlingTime', $data) && null === $data['handlingTime']) {
            $object->setHandlingTime(null);
        }
        if (\array_key_exists('shippingRates', $data) && null !== $data['shippingRates']) {
            $object->setShippingRates($this->denormalizer->denormalize($data['shippingRates'], \Em411\Allegro\Api\Model\JustId::class, 'json', $context));
            unset($data['shippingRates']);
        } elseif (\array_key_exists('shippingRates', $data) && null === $data['shippingRates']) {
            $object->setShippingRates(null);
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
        if ($data->isInitialized('additionalInfo') && null !== $data->getAdditionalInfo()) {
            $dataArray['additionalInfo'] = $data->getAdditionalInfo();
        }
        if ($data->isInitialized('handlingTime') && null !== $data->getHandlingTime()) {
            $dataArray['handlingTime'] = $data->getHandlingTime();
        }
        if ($data->isInitialized('shippingRates') && null !== $data->getShippingRates()) {
            $dataArray['shippingRates'] = $this->normalizer->normalize($data->getShippingRates(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\DeliveryBasic::class => false];
    }
}
