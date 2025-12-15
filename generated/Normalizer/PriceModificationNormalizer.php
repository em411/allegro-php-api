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

class PriceModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PriceModification::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PriceModification::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (\array_key_exists('type', $data) && 'FIXED_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PriceModificationFixedPrice', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'INCREASE_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PriceModificationValueChangeIncrease', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'DECREASE_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PriceModificationValueChangeDecrease', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'INCREASE_PERCENTAGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PriceModificationPercentageChangeIncrease', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'DECREASE_PERCENTAGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PriceModificationPercentageChangeDecrease', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PriceModification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
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
        if (null !== $data->getType() && 'FIXED_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'INCREASE_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'DECREASE_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'INCREASE_PERCENTAGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'DECREASE_PERCENTAGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('marketplaceId')) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
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
        return [\Em411\Allegro\Api\Model\PriceModification::class => false];
    }
}
