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

class OfferStatusItemDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferStatusItemDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferStatusItemDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferStatusItemDto();
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
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\OfferStatusItemDtoMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
        }
        if (\array_key_exists('basePrice', $data) && null !== $data['basePrice']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['basePrice'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setBasePrice($values);
            unset($data['basePrice']);
        } elseif (\array_key_exists('basePrice', $data) && null === $data['basePrice']) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('discount', $data) && null !== $data['discount']) {
            $object->setDiscount($this->denormalizer->denormalize($data['discount'], \Em411\Allegro\Api\Model\OfferStatusItemDtoDiscount::class, 'json', $context));
            unset($data['discount']);
        } elseif (\array_key_exists('discount', $data) && null === $data['discount']) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('recommendedPriceReduction', $data) && null !== $data['recommendedPriceReduction']) {
            $value_1 = $data['recommendedPriceReduction'];
            if (\is_array($data['recommendedPriceReduction']) && isset($data['recommendedPriceReduction']['sellerMaxDeclaredPercentage'])) {
                $value_1 = $this->denormalizer->denormalize($data['recommendedPriceReduction'], \Em411\Allegro\Api\Model\RecommendedPriceReductionDto::class, 'json', $context);
            } elseif (\is_array($data['recommendedPriceReduction']) && $this->isOnlyNumericKeys($data['recommendedPriceReduction'])) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['recommendedPriceReduction'] as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $object->setRecommendedPriceReduction($value_1);
            unset($data['recommendedPriceReduction']);
        } elseif (\array_key_exists('recommendedPriceReduction', $data) && null === $data['recommendedPriceReduction']) {
            $object->setRecommendedPriceReduction(null);
        }
        if (\array_key_exists('declaredPriceReduction', $data) && null !== $data['declaredPriceReduction']) {
            $value_3 = $data['declaredPriceReduction'];
            if (\is_array($data['declaredPriceReduction']) && isset($data['declaredPriceReduction']['sellerMaxDeclaredPercentage']) && isset($data['declaredPriceReduction']['sellerMaxDeclaredDiscount'])) {
                $value_3 = $this->denormalizer->denormalize($data['declaredPriceReduction'], \Em411\Allegro\Api\Model\DeclaredPriceReductionDto::class, 'json', $context);
            } elseif (\is_array($data['declaredPriceReduction']) && $this->isOnlyNumericKeys($data['declaredPriceReduction'])) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['declaredPriceReduction'] as $key_2 => $value_4) {
                    $values_2[$key_2] = $value_4;
                }
                $value_3 = $values_2;
            }
            $object->setDeclaredPriceReduction($value_3);
            unset($data['declaredPriceReduction']);
        } elseif (\array_key_exists('declaredPriceReduction', $data) && null === $data['declaredPriceReduction']) {
            $object->setDeclaredPriceReduction(null);
        }
        if (\array_key_exists('actualPriceReduction', $data) && null !== $data['actualPriceReduction']) {
            $value_5 = $data['actualPriceReduction'];
            if (\is_array($data['actualPriceReduction']) && isset($data['actualPriceReduction']['sellerMaxDeclaredPercentage']) && isset($data['actualPriceReduction']['sellerMaxDeclaredDiscount']) && isset($data['actualPriceReduction']['sellerDiscount']) && isset($data['actualPriceReduction']['allegroDiscount']) && isset($data['actualPriceReduction']['finalPriceForTheBuyer'])) {
                $value_5 = $this->denormalizer->denormalize($data['actualPriceReduction'], \Em411\Allegro\Api\Model\ActualPriceReductionDto::class, 'json', $context);
            } elseif (\is_array($data['actualPriceReduction']) && $this->isOnlyNumericKeys($data['actualPriceReduction'])) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['actualPriceReduction'] as $key_3 => $value_6) {
                    $values_3[$key_3] = $value_6;
                }
                $value_5 = $values_3;
            }
            $object->setActualPriceReduction($value_5);
            unset($data['actualPriceReduction']);
        } elseif (\array_key_exists('actualPriceReduction', $data) && null === $data['actualPriceReduction']) {
            $object->setActualPriceReduction(null);
        }
        if (\array_key_exists('discountedAt', $data) && null !== $data['discountedAt']) {
            $object->setDiscountedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['discountedAt']));
            unset($data['discountedAt']);
        } elseif (\array_key_exists('discountedAt', $data) && null === $data['discountedAt']) {
            $object->setDiscountedAt(null);
        }
        if (\array_key_exists('excludedAt', $data) && null !== $data['excludedAt']) {
            $object->setExcludedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['excludedAt']));
            unset($data['excludedAt']);
        } elseif (\array_key_exists('excludedAt', $data) && null === $data['excludedAt']) {
            $object->setExcludedAt(null);
        }
        foreach ($data as $key_4 => $value_7) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        if ($data->isInitialized('basePrice')) {
            $values = [];
            foreach ($data->getBasePrice() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['basePrice'] = $values;
        }
        $dataArray['discount'] = $this->normalizer->normalize($data->getDiscount(), 'json', $context);
        if ($data->isInitialized('recommendedPriceReduction') && null !== $data->getRecommendedPriceReduction()) {
            $value_1 = $data->getRecommendedPriceReduction();
            if (\is_object($data->getRecommendedPriceReduction())) {
                $value_1 = $this->normalizer->normalize($data->getRecommendedPriceReduction(), 'json', $context);
            } elseif (\is_object($data->getRecommendedPriceReduction())) {
                $values_1 = [];
                foreach ($data->getRecommendedPriceReduction() as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $dataArray['recommendedPriceReduction'] = $value_1;
        }
        if ($data->isInitialized('declaredPriceReduction') && null !== $data->getDeclaredPriceReduction()) {
            $value_3 = $data->getDeclaredPriceReduction();
            if (\is_object($data->getDeclaredPriceReduction())) {
                $value_3 = $this->normalizer->normalize($data->getDeclaredPriceReduction(), 'json', $context);
            } elseif (\is_object($data->getDeclaredPriceReduction())) {
                $values_2 = [];
                foreach ($data->getDeclaredPriceReduction() as $key_2 => $value_4) {
                    $values_2[$key_2] = $value_4;
                }
                $value_3 = $values_2;
            }
            $dataArray['declaredPriceReduction'] = $value_3;
        }
        if ($data->isInitialized('actualPriceReduction') && null !== $data->getActualPriceReduction()) {
            $value_5 = $data->getActualPriceReduction();
            if (\is_object($data->getActualPriceReduction())) {
                $value_5 = $this->normalizer->normalize($data->getActualPriceReduction(), 'json', $context);
            } elseif (\is_object($data->getActualPriceReduction())) {
                $values_3 = [];
                foreach ($data->getActualPriceReduction() as $key_3 => $value_6) {
                    $values_3[$key_3] = $value_6;
                }
                $value_5 = $values_3;
            }
            $dataArray['actualPriceReduction'] = $value_5;
        }
        if ($data->isInitialized('discountedAt')) {
            $dataArray['discountedAt'] = $data->getDiscountedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('excludedAt')) {
            $dataArray['excludedAt'] = $data->getExcludedAt()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key_4 => $value_7) {
            if (preg_match('/.*/', (string) $key_4)) {
                $dataArray[$key_4] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferStatusItemDto::class => false];
    }
}
