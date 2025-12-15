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

class CreateAdvanceShipNoticeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeRequest::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CreateAdvanceShipNoticeRequest();
        if (\array_key_exists('declaredVolumeInCc', $data) && \is_int($data['declaredVolumeInCc'])) {
            $data['declaredVolumeInCc'] = (float) $data['declaredVolumeInCc'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ProductItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('handlingUnit', $data) && null !== $data['handlingUnit']) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['handlingUnit'], \Em411\Allegro\Api\Model\HandlingUnit::class, 'json', $context));
            unset($data['handlingUnit']);
        } elseif (\array_key_exists('handlingUnit', $data) && null === $data['handlingUnit']) {
            $object->setHandlingUnit(null);
        }
        if (\array_key_exists('shipping', $data) && null !== $data['shipping']) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Em411\Allegro\Api\Model\Shipping::class, 'json', $context));
            unset($data['shipping']);
        } elseif (\array_key_exists('shipping', $data) && null === $data['shipping']) {
            $object->setShipping(null);
        }
        if (\array_key_exists('declaredVolumeInCc', $data) && null !== $data['declaredVolumeInCc']) {
            $object->setDeclaredVolumeInCc($data['declaredVolumeInCc']);
            unset($data['declaredVolumeInCc']);
        } elseif (\array_key_exists('declaredVolumeInCc', $data) && null === $data['declaredVolumeInCc']) {
            $object->setDeclaredVolumeInCc(null);
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
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        if ($data->isInitialized('handlingUnit') && null !== $data->getHandlingUnit()) {
            $dataArray['handlingUnit'] = $this->normalizer->normalize($data->getHandlingUnit(), 'json', $context);
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = $this->normalizer->normalize($data->getShipping(), 'json', $context);
        }
        if ($data->isInitialized('declaredVolumeInCc') && null !== $data->getDeclaredVolumeInCc()) {
            $dataArray['declaredVolumeInCc'] = $data->getDeclaredVolumeInCc();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CreateAdvanceShipNoticeRequest::class => false];
    }
}
