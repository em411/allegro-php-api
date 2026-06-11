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

class FlexibleBundleListingDTONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\FlexibleBundleListingDTO::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\FlexibleBundleListingDTO::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\FlexibleBundleListingDTO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('createdBy', $data) && null !== $data['createdBy']) {
            $object->setCreatedBy($data['createdBy']);
            unset($data['createdBy']);
        } elseif (\array_key_exists('createdBy', $data) && null === $data['createdBy']) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('slotsRepresentatives', $data) && null !== $data['slotsRepresentatives']) {
            $values = [];
            foreach ($data['slotsRepresentatives'] as $value) {
                $values[] = $value;
            }
            $object->setSlotsRepresentatives($values);
            unset($data['slotsRepresentatives']);
        } elseif (\array_key_exists('slotsRepresentatives', $data) && null === $data['slotsRepresentatives']) {
            $object->setSlotsRepresentatives(null);
        }
        if (\array_key_exists('discount', $data) && null !== $data['discount']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['discount'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setDiscount($values_1);
            unset($data['discount']);
        } elseif (\array_key_exists('discount', $data) && null === $data['discount']) {
            $object->setDiscount(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['createdBy'] = $data->getCreatedBy();
        $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $values = [];
        foreach ($data->getSlotsRepresentatives() as $value) {
            $values[] = $value;
        }
        $dataArray['slotsRepresentatives'] = $values;
        if ($data->isInitialized('discount')) {
            $values_1 = [];
            foreach ($data->getDiscount() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['discount'] = $values_1;
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\FlexibleBundleListingDTO::class => false];
    }
}
