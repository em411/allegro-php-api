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

class GetSaleProductsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\GetSaleProductsResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\GetSaleProductsResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\GetSaleProductsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('products', $data) && null !== $data['products']) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\BaseSaleProductResponseDto::class, 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        } elseif (\array_key_exists('products', $data) && null === $data['products']) {
            $object->setProducts(null);
        }
        if (\array_key_exists('categories', $data) && null !== $data['categories']) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], \Em411\Allegro\Api\Model\SaleProductResponseCategoriesDto::class, 'json', $context));
            unset($data['categories']);
        } elseif (\array_key_exists('categories', $data) && null === $data['categories']) {
            $object->setCategories(null);
        }
        if (\array_key_exists('filters', $data) && null !== $data['filters']) {
            $values_1 = [];
            foreach ($data['filters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ListingResponseFilters::class, 'json', $context);
            }
            $object->setFilters($values_1);
            unset($data['filters']);
        } elseif (\array_key_exists('filters', $data) && null === $data['filters']) {
            $object->setFilters(null);
        }
        if (\array_key_exists('nextPage', $data) && null !== $data['nextPage']) {
            $object->setNextPage($this->denormalizer->denormalize($data['nextPage'], \Em411\Allegro\Api\Model\GetSaleProductsResponseNextPage::class, 'json', $context));
            unset($data['nextPage']);
        } elseif (\array_key_exists('nextPage', $data) && null === $data['nextPage']) {
            $object->setNextPage(null);
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
        $values = [];
        foreach ($data->getProducts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['products'] = $values;
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $dataArray['categories'] = $this->normalizer->normalize($data->getCategories(), 'json', $context);
        }
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $values_1 = [];
            foreach ($data->getFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['filters'] = $values_1;
        }
        if ($data->isInitialized('nextPage') && null !== $data->getNextPage()) {
            $dataArray['nextPage'] = $this->normalizer->normalize($data->getNextPage(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\GetSaleProductsResponse::class => false];
    }
}
