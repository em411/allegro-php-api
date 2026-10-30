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

class OfferSellingModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferSellingMode::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferSellingMode::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\OfferSellingMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('format', $data) && null !== $data['format']) {
            $object->setFormat($data['format']);
            unset($data['format']);
        } elseif (\array_key_exists('format', $data) && null === $data['format']) {
            $object->setFormat(null);
            unset($data['format']);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Em411\Allegro\Api\Model\OfferPrice::class, 'json', $context));
            unset($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
            unset($data['price']);
        }
        if (\array_key_exists('fixedPrice', $data) && null !== $data['fixedPrice']) {
            $object->setFixedPrice($this->denormalizer->denormalize($data['fixedPrice'], \Em411\Allegro\Api\Model\OfferFixedPrice::class, 'json', $context));
            unset($data['fixedPrice']);
        } elseif (\array_key_exists('fixedPrice', $data) && null === $data['fixedPrice']) {
            $object->setFixedPrice(null);
            unset($data['fixedPrice']);
        }
        if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
            $object->setPopularity($data['popularity']);
            unset($data['popularity']);
        } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
            $object->setPopularity(null);
            unset($data['popularity']);
        }
        if (\array_key_exists('popularityRange', $data) && null !== $data['popularityRange']) {
            $object->setPopularityRange($data['popularityRange']);
            unset($data['popularityRange']);
        } elseif (\array_key_exists('popularityRange', $data) && null === $data['popularityRange']) {
            $object->setPopularityRange(null);
            unset($data['popularityRange']);
        }
        if (\array_key_exists('bidCount', $data) && null !== $data['bidCount']) {
            $object->setBidCount($data['bidCount']);
            unset($data['bidCount']);
        } elseif (\array_key_exists('bidCount', $data) && null === $data['bidCount']) {
            $object->setBidCount(null);
            unset($data['bidCount']);
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
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = null === $data->getPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPrice(), 'json', $context));
        }
        if ($data->isInitialized('fixedPrice') && null !== $data->getFixedPrice()) {
            $dataArray['fixedPrice'] = null === $data->getFixedPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getFixedPrice(), 'json', $context));
        }
        if ($data->isInitialized('popularity') && null !== $data->getPopularity()) {
            $dataArray['popularity'] = $data->getPopularity();
        }
        if ($data->isInitialized('popularityRange') && null !== $data->getPopularityRange()) {
            $dataArray['popularityRange'] = $data->getPopularityRange();
        }
        if ($data->isInitialized('bidCount') && null !== $data->getBidCount()) {
            $dataArray['bidCount'] = $data->getBidCount();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferSellingMode::class => false];
    }
}
