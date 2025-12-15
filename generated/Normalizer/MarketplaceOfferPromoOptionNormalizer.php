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

class MarketplaceOfferPromoOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\MarketplaceOfferPromoOption::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\MarketplaceOfferPromoOption::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\MarketplaceOfferPromoOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
        }
        if (\array_key_exists('basePackage', $data) && null !== $data['basePackage']) {
            $object->setBasePackage($this->denormalizer->denormalize($data['basePackage'], \Em411\Allegro\Api\Model\OfferPromoOption::class, 'json', $context));
            unset($data['basePackage']);
        } elseif (\array_key_exists('basePackage', $data) && null === $data['basePackage']) {
            $object->setBasePackage(null);
        }
        if (\array_key_exists('extraPackages', $data) && null !== $data['extraPackages']) {
            $values = [];
            foreach ($data['extraPackages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\OfferPromoOption::class, 'json', $context);
            }
            $object->setExtraPackages($values);
            unset($data['extraPackages']);
        } elseif (\array_key_exists('extraPackages', $data) && null === $data['extraPackages']) {
            $object->setExtraPackages(null);
        }
        if (\array_key_exists('pendingChanges', $data) && null !== $data['pendingChanges']) {
            $object->setPendingChanges($this->denormalizer->denormalize($data['pendingChanges'], \Em411\Allegro\Api\Model\OfferPromoOptionsPendingChanges::class, 'json', $context));
            unset($data['pendingChanges']);
        } elseif (\array_key_exists('pendingChanges', $data) && null === $data['pendingChanges']) {
            $object->setPendingChanges(null);
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
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('basePackage') && null !== $data->getBasePackage()) {
            $dataArray['basePackage'] = $this->normalizer->normalize($data->getBasePackage(), 'json', $context);
        }
        if ($data->isInitialized('extraPackages') && null !== $data->getExtraPackages()) {
            $values = [];
            foreach ($data->getExtraPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['extraPackages'] = $values;
        }
        if ($data->isInitialized('pendingChanges') && null !== $data->getPendingChanges()) {
            $dataArray['pendingChanges'] = $this->normalizer->normalize($data->getPendingChanges(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\MarketplaceOfferPromoOption::class => false];
    }
}
