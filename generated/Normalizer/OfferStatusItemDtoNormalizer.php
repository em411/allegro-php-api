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
        if (\array_key_exists('declaredPriceReduction', $data) && null !== $data['declaredPriceReduction']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['declaredPriceReduction'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setDeclaredPriceReduction($values_1);
            unset($data['declaredPriceReduction']);
        } elseif (\array_key_exists('declaredPriceReduction', $data) && null === $data['declaredPriceReduction']) {
            $object->setDeclaredPriceReduction(null);
        }
        if (\array_key_exists('actualPriceReduction', $data) && null !== $data['actualPriceReduction']) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['actualPriceReduction'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setActualPriceReduction($values_2);
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
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_3;
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
        if ($data->isInitialized('declaredPriceReduction')) {
            $values_1 = [];
            foreach ($data->getDeclaredPriceReduction() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['declaredPriceReduction'] = $values_1;
        }
        if ($data->isInitialized('actualPriceReduction')) {
            $values_2 = [];
            foreach ($data->getActualPriceReduction() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['actualPriceReduction'] = $values_2;
        }
        if ($data->isInitialized('discountedAt')) {
            $dataArray['discountedAt'] = $data->getDiscountedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('excludedAt')) {
            $dataArray['excludedAt'] = $data->getExcludedAt()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferStatusItemDto::class => false];
    }
}
