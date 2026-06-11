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

class FlexibleBundleSlotDTONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\FlexibleBundleSlotDTO::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\FlexibleBundleSlotDTO::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\FlexibleBundleSlotDTO();
        if (\array_key_exists('entryPoint', $data) && \is_int($data['entryPoint'])) {
            $data['entryPoint'] = (bool) $data['entryPoint'];
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
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($data['order']);
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('entryPoint', $data) && null !== $data['entryPoint']) {
            $object->setEntryPoint($data['entryPoint']);
            unset($data['entryPoint']);
        } elseif (\array_key_exists('entryPoint', $data) && null === $data['entryPoint']) {
            $object->setEntryPoint(null);
        }
        if (\array_key_exists('requiredQuantity', $data) && null !== $data['requiredQuantity']) {
            $object->setRequiredQuantity($data['requiredQuantity']);
            unset($data['requiredQuantity']);
        } elseif (\array_key_exists('requiredQuantity', $data) && null === $data['requiredQuantity']) {
            $object->setRequiredQuantity(null);
        }
        if (\array_key_exists('offers', $data) && null !== $data['offers']) {
            $values = [];
            foreach ($data['offers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\FlexibleBundleOfferDTO::class, 'json', $context);
            }
            $object->setOffers($values);
            unset($data['offers']);
        } elseif (\array_key_exists('offers', $data) && null === $data['offers']) {
            $object->setOffers(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['order'] = $data->getOrder();
        $dataArray['entryPoint'] = $data->getEntryPoint();
        $dataArray['requiredQuantity'] = $data->getRequiredQuantity();
        $values = [];
        foreach ($data->getOffers() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['offers'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\FlexibleBundleSlotDTO::class => false];
    }
}
