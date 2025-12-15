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

class OfferDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferDelivery::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferDelivery::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferDelivery();
        if (\array_key_exists('availableForFree', $data) && \is_int($data['availableForFree'])) {
            $data['availableForFree'] = (bool) $data['availableForFree'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('availableForFree', $data) && null !== $data['availableForFree']) {
            $object->setAvailableForFree($data['availableForFree']);
            unset($data['availableForFree']);
        } elseif (\array_key_exists('availableForFree', $data) && null === $data['availableForFree']) {
            $object->setAvailableForFree(null);
        }
        if (\array_key_exists('lowestPrice', $data) && null !== $data['lowestPrice']) {
            $object->setLowestPrice($this->denormalizer->denormalize($data['lowestPrice'], \Em411\Allegro\Api\Model\OfferLowestPrice::class, 'json', $context));
            unset($data['lowestPrice']);
        } elseif (\array_key_exists('lowestPrice', $data) && null === $data['lowestPrice']) {
            $object->setLowestPrice(null);
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
        if ($data->isInitialized('availableForFree') && null !== $data->getAvailableForFree()) {
            $dataArray['availableForFree'] = $data->getAvailableForFree();
        }
        if ($data->isInitialized('lowestPrice') && null !== $data->getLowestPrice()) {
            $dataArray['lowestPrice'] = $this->normalizer->normalize($data->getLowestPrice(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\OfferDelivery::class => false];
    }
}
