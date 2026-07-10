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

class DeliverySettingsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliverySettingsResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliverySettingsResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\DeliverySettingsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\DeliverySettingsResponseMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
        }
        if (\array_key_exists('freeDelivery', $data) && null !== $data['freeDelivery']) {
            $object->setFreeDelivery($this->denormalizer->denormalize($data['freeDelivery'], \Em411\Allegro\Api\Model\DeliverySettingsResponseFreeDelivery::class, 'json', $context));
            unset($data['freeDelivery']);
        } elseif (\array_key_exists('freeDelivery', $data) && null === $data['freeDelivery']) {
            $object->setFreeDelivery(null);
        }
        if (\array_key_exists('abroadFreeDelivery', $data) && null !== $data['abroadFreeDelivery']) {
            $object->setAbroadFreeDelivery($this->denormalizer->denormalize($data['abroadFreeDelivery'], \Em411\Allegro\Api\Model\DeliverySettingsResponseAbroadFreeDelivery::class, 'json', $context));
            unset($data['abroadFreeDelivery']);
        } elseif (\array_key_exists('abroadFreeDelivery', $data) && null === $data['abroadFreeDelivery']) {
            $object->setAbroadFreeDelivery(null);
        }
        if (\array_key_exists('joinPolicy', $data) && null !== $data['joinPolicy']) {
            $object->setJoinPolicy($this->denormalizer->denormalize($data['joinPolicy'], \Em411\Allegro\Api\Model\DeliverySettingsResponseJoinPolicy::class, 'json', $context));
            unset($data['joinPolicy']);
        } elseif (\array_key_exists('joinPolicy', $data) && null === $data['joinPolicy']) {
            $object->setJoinPolicy(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
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
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        if ($data->isInitialized('freeDelivery') && null !== $data->getFreeDelivery()) {
            $dataArray['freeDelivery'] = $this->normalizer->normalize($data->getFreeDelivery(), 'json', $context);
        }
        if ($data->isInitialized('abroadFreeDelivery') && null !== $data->getAbroadFreeDelivery()) {
            $dataArray['abroadFreeDelivery'] = $this->normalizer->normalize($data->getAbroadFreeDelivery(), 'json', $context);
        }
        $dataArray['joinPolicy'] = $this->normalizer->normalize($data->getJoinPolicy(), 'json', $context);
        $dataArray['updatedAt'] = $data->getUpdatedAt();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\DeliverySettingsResponse::class => false];
    }
}
