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

class FloatCategoryParameterrestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\FloatCategoryParameterrestrictions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\FloatCategoryParameterrestrictions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\FloatCategoryParameterrestrictions();
        if (\array_key_exists('min', $data) && \is_int($data['min'])) {
            $data['min'] = (float) $data['min'];
        }
        if (\array_key_exists('max', $data) && \is_int($data['max'])) {
            $data['max'] = (float) $data['max'];
        }
        if (\array_key_exists('range', $data) && \is_int($data['range'])) {
            $data['range'] = (bool) $data['range'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('min', $data) && null !== $data['min']) {
            $object->setMin($data['min']);
            unset($data['min']);
        } elseif (\array_key_exists('min', $data) && null === $data['min']) {
            $object->setMin(null);
        }
        if (\array_key_exists('max', $data) && null !== $data['max']) {
            $object->setMax($data['max']);
            unset($data['max']);
        } elseif (\array_key_exists('max', $data) && null === $data['max']) {
            $object->setMax(null);
        }
        if (\array_key_exists('range', $data) && null !== $data['range']) {
            $object->setRange($data['range']);
            unset($data['range']);
        } elseif (\array_key_exists('range', $data) && null === $data['range']) {
            $object->setRange(null);
        }
        if (\array_key_exists('precision', $data) && null !== $data['precision']) {
            $object->setPrecision($data['precision']);
            unset($data['precision']);
        } elseif (\array_key_exists('precision', $data) && null === $data['precision']) {
            $object->setPrecision(null);
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
        if ($data->isInitialized('min') && null !== $data->getMin()) {
            $dataArray['min'] = $data->getMin();
        }
        if ($data->isInitialized('max') && null !== $data->getMax()) {
            $dataArray['max'] = $data->getMax();
        }
        if ($data->isInitialized('range') && null !== $data->getRange()) {
            $dataArray['range'] = $data->getRange();
        }
        if ($data->isInitialized('precision') && null !== $data->getPrecision()) {
            $dataArray['precision'] = $data->getPrecision();
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
        return [\Em411\Allegro\Api\Model\FloatCategoryParameterrestrictions::class => false];
    }
}
