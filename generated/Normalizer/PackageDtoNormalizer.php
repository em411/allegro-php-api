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

class PackageDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PackageDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PackageDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PackageDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('waybill', $data) && null !== $data['waybill']) {
            $object->setWaybill($data['waybill']);
            unset($data['waybill']);
        } elseif (\array_key_exists('waybill', $data) && null === $data['waybill']) {
            $object->setWaybill(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('length', $data) && null !== $data['length']) {
            $object->setLength($this->denormalizer->denormalize($data['length'], \Em411\Allegro\Api\Model\DimensionValue::class, 'json', $context));
            unset($data['length']);
        } elseif (\array_key_exists('length', $data) && null === $data['length']) {
            $object->setLength(null);
        }
        if (\array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($this->denormalizer->denormalize($data['width'], \Em411\Allegro\Api\Model\DimensionValue::class, 'json', $context));
            unset($data['width']);
        } elseif (\array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($this->denormalizer->denormalize($data['height'], \Em411\Allegro\Api\Model\DimensionValue::class, 'json', $context));
            unset($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \Em411\Allegro\Api\Model\WeightValue::class, 'json', $context));
            unset($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('textOnLabel', $data) && null !== $data['textOnLabel']) {
            $object->setTextOnLabel($data['textOnLabel']);
            unset($data['textOnLabel']);
        } elseif (\array_key_exists('textOnLabel', $data) && null === $data['textOnLabel']) {
            $object->setTextOnLabel(null);
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
        if ($data->isInitialized('waybill') && null !== $data->getWaybill()) {
            $dataArray['waybill'] = $data->getWaybill();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('length') && null !== $data->getLength()) {
            $dataArray['length'] = $this->normalizer->normalize($data->getLength(), 'json', $context);
        }
        if ($data->isInitialized('width') && null !== $data->getWidth()) {
            $dataArray['width'] = $this->normalizer->normalize($data->getWidth(), 'json', $context);
        }
        if ($data->isInitialized('height') && null !== $data->getHeight()) {
            $dataArray['height'] = $this->normalizer->normalize($data->getHeight(), 'json', $context);
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $this->normalizer->normalize($data->getWeight(), 'json', $context);
        }
        if ($data->isInitialized('textOnLabel') && null !== $data->getTextOnLabel()) {
            $dataArray['textOnLabel'] = $data->getTextOnLabel();
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
        return [\Em411\Allegro\Api\Model\PackageDto::class => false];
    }
}
