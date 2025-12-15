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

class MarketplaceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\MarketplaceItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\MarketplaceItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\MarketplaceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('languages', $data) && null !== $data['languages']) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], \Em411\Allegro\Api\Model\MarketplaceItemLanguages::class, 'json', $context));
            unset($data['languages']);
        } elseif (\array_key_exists('languages', $data) && null === $data['languages']) {
            $object->setLanguages(null);
        }
        if (\array_key_exists('currencies', $data) && null !== $data['currencies']) {
            $object->setCurrencies($this->denormalizer->denormalize($data['currencies'], \Em411\Allegro\Api\Model\MarketplaceItemCurrencies::class, 'json', $context));
            unset($data['currencies']);
        } elseif (\array_key_exists('currencies', $data) && null === $data['currencies']) {
            $object->setCurrencies(null);
        }
        if (\array_key_exists('shippingCountries', $data) && null !== $data['shippingCountries']) {
            $values = [];
            foreach ($data['shippingCountries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\MarketplaceItemShippingCountry::class, 'json', $context);
            }
            $object->setShippingCountries($values);
            unset($data['shippingCountries']);
        } elseif (\array_key_exists('shippingCountries', $data) && null === $data['shippingCountries']) {
            $object->setShippingCountries(null);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('languages') && null !== $data->getLanguages()) {
            $dataArray['languages'] = $this->normalizer->normalize($data->getLanguages(), 'json', $context);
        }
        if ($data->isInitialized('currencies') && null !== $data->getCurrencies()) {
            $dataArray['currencies'] = $this->normalizer->normalize($data->getCurrencies(), 'json', $context);
        }
        if ($data->isInitialized('shippingCountries') && null !== $data->getShippingCountries()) {
            $values = [];
            foreach ($data->getShippingCountries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['shippingCountries'] = $values;
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
        return [\Em411\Allegro\Api\Model\MarketplaceItem::class => false];
    }
}
