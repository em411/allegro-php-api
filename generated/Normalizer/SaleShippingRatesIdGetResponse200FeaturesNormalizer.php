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

class SaleShippingRatesIdGetResponse200FeaturesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200Features::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200Features::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200Features();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('managedByAllegro', $data) && \is_int($data['managedByAllegro'])) {
            $data['managedByAllegro'] = (bool) $data['managedByAllegro'];
        }
        if (\array_key_exists('isFulfillment', $data) && \is_int($data['isFulfillment'])) {
            $data['isFulfillment'] = (bool) $data['isFulfillment'];
        }
        if (\array_key_exists('managedByAllegro', $data) && null !== $data['managedByAllegro']) {
            $object->setManagedByAllegro($data['managedByAllegro']);
            unset($data['managedByAllegro']);
        } elseif (\array_key_exists('managedByAllegro', $data) && null === $data['managedByAllegro']) {
            $object->setManagedByAllegro(null);
            unset($data['managedByAllegro']);
        }
        if (\array_key_exists('isFulfillment', $data) && null !== $data['isFulfillment']) {
            $object->setIsFulfillment($data['isFulfillment']);
            unset($data['isFulfillment']);
        } elseif (\array_key_exists('isFulfillment', $data) && null === $data['isFulfillment']) {
            $object->setIsFulfillment(null);
            unset($data['isFulfillment']);
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
        if ($data->isInitialized('managedByAllegro') && null !== $data->getManagedByAllegro()) {
            $dataArray['managedByAllegro'] = $data->getManagedByAllegro();
        }
        if ($data->isInitialized('isFulfillment') && null !== $data->getIsFulfillment()) {
            $dataArray['isFulfillment'] = $data->getIsFulfillment();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SaleShippingRatesIdGetResponse200Features::class => false];
    }
}
