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

class FlexibleBundleDiscountDTONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTO::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTO::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\FlexibleBundleDiscountDTO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('bundle', $data) && null !== $data['bundle']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['bundle'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setBundle($values);
            unset($data['bundle']);
        } elseif (\array_key_exists('bundle', $data) && null === $data['bundle']) {
            $object->setBundle(null);
        }
        if (\array_key_exists('slot', $data) && null !== $data['slot']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['slot'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setSlot($values_1);
            unset($data['slot']);
        } elseif (\array_key_exists('slot', $data) && null === $data['slot']) {
            $object->setSlot(null);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('bundle')) {
            $values = [];
            foreach ($data->getBundle() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['bundle'] = $values;
        }
        if ($data->isInitialized('slot')) {
            $values_1 = [];
            foreach ($data->getSlot() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['slot'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\FlexibleBundleDiscountDTO::class => false];
    }
}
