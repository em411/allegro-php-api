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

class ListingResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ListingResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ListingResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ListingResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $object->setItems($this->denormalizer->denormalize($data['items'], \Em411\Allegro\Api\Model\ListingResponseOffers::class, 'json', $context));
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('categories', $data) && null !== $data['categories']) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], \Em411\Allegro\Api\Model\ListingResponseCategories::class, 'json', $context));
            unset($data['categories']);
        } elseif (\array_key_exists('categories', $data) && null === $data['categories']) {
            $object->setCategories(null);
        }
        if (\array_key_exists('filters', $data) && null !== $data['filters']) {
            $values = [];
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ListingResponseFilters::class, 'json', $context);
            }
            $object->setFilters($values);
            unset($data['filters']);
        } elseif (\array_key_exists('filters', $data) && null === $data['filters']) {
            $object->setFilters(null);
        }
        if (\array_key_exists('searchMeta', $data) && null !== $data['searchMeta']) {
            $object->setSearchMeta($this->denormalizer->denormalize($data['searchMeta'], \Em411\Allegro\Api\Model\ListingResponseSearchMeta::class, 'json', $context));
            unset($data['searchMeta']);
        } elseif (\array_key_exists('searchMeta', $data) && null === $data['searchMeta']) {
            $object->setSearchMeta(null);
        }
        if (\array_key_exists('sort', $data) && null !== $data['sort']) {
            $values_1 = [];
            foreach ($data['sort'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ListingResponseSort::class, 'json', $context);
            }
            $object->setSort($values_1);
            unset($data['sort']);
        } elseif (\array_key_exists('sort', $data) && null === $data['sort']) {
            $object->setSort(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $dataArray['items'] = $this->normalizer->normalize($data->getItems(), 'json', $context);
        }
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $dataArray['categories'] = $this->normalizer->normalize($data->getCategories(), 'json', $context);
        }
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $values = [];
            foreach ($data->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['filters'] = $values;
        }
        if ($data->isInitialized('searchMeta') && null !== $data->getSearchMeta()) {
            $dataArray['searchMeta'] = $this->normalizer->normalize($data->getSearchMeta(), 'json', $context);
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_1 = [];
            foreach ($data->getSort() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sort'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ListingResponse::class => false];
    }
}
