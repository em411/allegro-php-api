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

class OfferListingDtoV1AdditionalMarketplaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplacePublication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
            unset($data['publication']);
        }
        if (\array_key_exists('sellingMode', $data) && null !== $data['sellingMode']) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceSellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        } elseif (\array_key_exists('sellingMode', $data) && null === $data['sellingMode']) {
            $object->setSellingMode(null);
            unset($data['sellingMode']);
        }
        if (\array_key_exists('stats', $data) && null !== $data['stats']) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceStats::class, 'json', $context));
            unset($data['stats']);
        } elseif (\array_key_exists('stats', $data) && null === $data['stats']) {
            $object->setStats(null);
            unset($data['stats']);
        }
        if (\array_key_exists('stock', $data) && null !== $data['stock']) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplaceStock::class, 'json', $context));
            unset($data['stock']);
        } elseif (\array_key_exists('stock', $data) && null === $data['stock']) {
            $object->setStock(null);
            unset($data['stock']);
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
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = null === $data->getPublication() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPublication(), 'json', $context));
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = null === $data->getSellingMode() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSellingMode(), 'json', $context));
        }
        if ($data->isInitialized('stats') && null !== $data->getStats()) {
            $dataArray['stats'] = null === $data->getStats() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getStats(), 'json', $context));
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = null === $data->getStock() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getStock(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\OfferListingDtoV1AdditionalMarketplace::class => false];
    }
}
