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

class ProductParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ProductParameter::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ProductParameter::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ProductParameter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('rangeValue', $data) && null !== $data['rangeValue']) {
            $object->setRangeValue($this->denormalizer->denormalize($data['rangeValue'], \Em411\Allegro\Api\Model\ParameterRangeValue::class, 'json', $context));
            unset($data['rangeValue']);
        } elseif (\array_key_exists('rangeValue', $data) && null === $data['rangeValue']) {
            $object->setRangeValue(null);
        }
        if (\array_key_exists('values', $data) && null !== $data['values']) {
            $values = [];
            foreach ($data['values'] as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
            unset($data['values']);
        } elseif (\array_key_exists('values', $data) && null === $data['values']) {
            $object->setValues(null);
        }
        if (\array_key_exists('valuesIds', $data) && null !== $data['valuesIds']) {
            $values_1 = [];
            foreach ($data['valuesIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setValuesIds($values_1);
            unset($data['valuesIds']);
        } elseif (\array_key_exists('valuesIds', $data) && null === $data['valuesIds']) {
            $object->setValuesIds(null);
        }
        if (\array_key_exists('valuesLabels', $data) && null !== $data['valuesLabels']) {
            $values_2 = [];
            foreach ($data['valuesLabels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setValuesLabels($values_2);
            unset($data['valuesLabels']);
        } elseif (\array_key_exists('valuesLabels', $data) && null === $data['valuesLabels']) {
            $object->setValuesLabels(null);
        }
        if (\array_key_exists('unit', $data) && null !== $data['unit']) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        } elseif (\array_key_exists('unit', $data) && null === $data['unit']) {
            $object->setUnit(null);
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Em411\Allegro\Api\Model\ProductParameterOptions::class, 'json', $context));
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('rangeValue') && null !== $data->getRangeValue()) {
            $dataArray['rangeValue'] = $this->normalizer->normalize($data->getRangeValue(), 'json', $context);
        }
        if ($data->isInitialized('values') && null !== $data->getValues()) {
            $values = [];
            foreach ($data->getValues() as $value) {
                $values[] = $value;
            }
            $dataArray['values'] = $values;
        }
        if ($data->isInitialized('valuesIds') && null !== $data->getValuesIds()) {
            $values_1 = [];
            foreach ($data->getValuesIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['valuesIds'] = $values_1;
        }
        if ($data->isInitialized('valuesLabels') && null !== $data->getValuesLabels()) {
            $values_2 = [];
            foreach ($data->getValuesLabels() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['valuesLabels'] = $values_2;
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ProductParameter::class => false];
    }
}
