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

class AlleDiscountSubmittedOfferDtoPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('proposedPrice', $data) && null !== $data['proposedPrice']) {
            $object->setProposedPrice($this->denormalizer->denormalize($data['proposedPrice'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class, 'json', $context));
            unset($data['proposedPrice']);
        } elseif (\array_key_exists('proposedPrice', $data) && null === $data['proposedPrice']) {
            $object->setProposedPrice(null);
            unset($data['proposedPrice']);
        }
        if (\array_key_exists('minimalPriceReduction', $data) && null !== $data['minimalPriceReduction']) {
            $object->setMinimalPriceReduction($this->denormalizer->denormalize($data['minimalPriceReduction'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class, 'json', $context));
            unset($data['minimalPriceReduction']);
        } elseif (\array_key_exists('minimalPriceReduction', $data) && null === $data['minimalPriceReduction']) {
            $object->setMinimalPriceReduction(null);
            unset($data['minimalPriceReduction']);
        }
        if (\array_key_exists('maximumSellingPrice', $data) && null !== $data['maximumSellingPrice']) {
            $object->setMaximumSellingPrice($this->denormalizer->denormalize($data['maximumSellingPrice'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class, 'json', $context));
            unset($data['maximumSellingPrice']);
        } elseif (\array_key_exists('maximumSellingPrice', $data) && null === $data['maximumSellingPrice']) {
            $object->setMaximumSellingPrice(null);
            unset($data['maximumSellingPrice']);
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
        if ($data->isInitialized('proposedPrice') && null !== $data->getProposedPrice()) {
            $dataArray['proposedPrice'] = null === $data->getProposedPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProposedPrice(), 'json', $context));
        }
        if ($data->isInitialized('minimalPriceReduction') && null !== $data->getMinimalPriceReduction()) {
            $dataArray['minimalPriceReduction'] = null === $data->getMinimalPriceReduction() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMinimalPriceReduction(), 'json', $context));
        }
        if ($data->isInitialized('maximumSellingPrice') && null !== $data->getMaximumSellingPrice()) {
            $dataArray['maximumSellingPrice'] = null === $data->getMaximumSellingPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMaximumSellingPrice(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class => false];
    }
}
