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

class StockQuantityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StockQuantity::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StockQuantity::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StockQuantity();
        if (\array_key_exists('available', $data) && \is_int($data['available'])) {
            $data['available'] = (float) $data['available'];
        }
        if (\array_key_exists('onOrder', $data) && \is_int($data['onOrder'])) {
            $data['onOrder'] = (float) $data['onOrder'];
        }
        if (\array_key_exists('onHold', $data) && \is_int($data['onHold'])) {
            $data['onHold'] = (float) $data['onHold'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('available', $data) && null !== $data['available']) {
            $object->setAvailable($data['available']);
            unset($data['available']);
        } elseif (\array_key_exists('available', $data) && null === $data['available']) {
            $object->setAvailable(null);
        }
        if (\array_key_exists('onOrder', $data) && null !== $data['onOrder']) {
            $object->setOnOrder($data['onOrder']);
            unset($data['onOrder']);
        } elseif (\array_key_exists('onOrder', $data) && null === $data['onOrder']) {
            $object->setOnOrder(null);
        }
        if (\array_key_exists('onHold', $data) && null !== $data['onHold']) {
            $object->setOnHold($data['onHold']);
            unset($data['onHold']);
        } elseif (\array_key_exists('onHold', $data) && null === $data['onHold']) {
            $object->setOnHold(null);
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
        if ($data->isInitialized('available') && null !== $data->getAvailable()) {
            $dataArray['available'] = $data->getAvailable();
        }
        if ($data->isInitialized('onOrder') && null !== $data->getOnOrder()) {
            $dataArray['onOrder'] = $data->getOnOrder();
        }
        if ($data->isInitialized('onHold') && null !== $data->getOnHold()) {
            $dataArray['onHold'] = $data->getOnHold();
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
        return [\Em411\Allegro\Api\Model\StockQuantity::class => false];
    }
}
