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

class BaseSaleProductResponseDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\BaseSaleProductResponseDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\BaseSaleProductResponseDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\BaseSaleProductResponseDto();
        if (\array_key_exists('hasProtectedBrand', $data) && \is_int($data['hasProtectedBrand'])) {
            $data['hasProtectedBrand'] = (bool) $data['hasProtectedBrand'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Em411\Allegro\Api\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \Em411\Allegro\Api\Model\ProductCategoryWithPath::class, 'json', $context));
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ImageUrl::class, 'json', $context);
            }
            $object->setImages($values);
            unset($data['images']);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
        }
        if (\array_key_exists('parameters', $data) && null !== $data['parameters']) {
            $values_1 = [];
            foreach ($data['parameters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ProductParameterDto::class, 'json', $context);
            }
            $object->setParameters($values_1);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && null === $data['parameters']) {
            $object->setParameters(null);
        }
        if (\array_key_exists('aiCoCreatedContent', $data) && null !== $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent($this->denormalizer->denormalize($data['aiCoCreatedContent'], \Em411\Allegro\Api\Model\AiCoCreatedContent::class, 'json', $context));
            unset($data['aiCoCreatedContent']);
        } elseif (\array_key_exists('aiCoCreatedContent', $data) && null === $data['aiCoCreatedContent']) {
            $object->setAiCoCreatedContent(null);
        }
        if (\array_key_exists('trustedContent', $data) && null !== $data['trustedContent']) {
            $object->setTrustedContent($this->denormalizer->denormalize($data['trustedContent'], \Em411\Allegro\Api\Model\TrustedContent::class, 'json', $context));
            unset($data['trustedContent']);
        } elseif (\array_key_exists('trustedContent', $data) && null === $data['trustedContent']) {
            $object->setTrustedContent(null);
        }
        if (\array_key_exists('hasProtectedBrand', $data) && null !== $data['hasProtectedBrand']) {
            $object->setHasProtectedBrand($data['hasProtectedBrand']);
            unset($data['hasProtectedBrand']);
        } elseif (\array_key_exists('hasProtectedBrand', $data) && null === $data['hasProtectedBrand']) {
            $object->setHasProtectedBrand(null);
        }
        if (\array_key_exists('productSafety', $data) && null !== $data['productSafety']) {
            $object->setProductSafety($this->denormalizer->denormalize($data['productSafety'], \Em411\Allegro\Api\Model\SaleProductSafetyDto::class, 'json', $context));
            unset($data['productSafety']);
        } elseif (\array_key_exists('productSafety', $data) && null === $data['productSafety']) {
            $object->setProductSafety(null);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\BaseSaleProductResponseDtoPublication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['images'] = $values;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_1 = [];
            foreach ($data->getParameters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['parameters'] = $values_1;
        }
        if ($data->isInitialized('aiCoCreatedContent') && null !== $data->getAiCoCreatedContent()) {
            $dataArray['aiCoCreatedContent'] = $this->normalizer->normalize($data->getAiCoCreatedContent(), 'json', $context);
        }
        if ($data->isInitialized('trustedContent') && null !== $data->getTrustedContent()) {
            $dataArray['trustedContent'] = $this->normalizer->normalize($data->getTrustedContent(), 'json', $context);
        }
        if ($data->isInitialized('hasProtectedBrand') && null !== $data->getHasProtectedBrand()) {
            $dataArray['hasProtectedBrand'] = $data->getHasProtectedBrand();
        }
        if ($data->isInitialized('productSafety')) {
            $dataArray['productSafety'] = $this->normalizer->normalize($data->getProductSafety(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\BaseSaleProductResponseDto::class => false];
    }
}
