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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('proposedPrice', $data) && null !== $data['proposedPrice']) {
            $object->setProposedPrice($this->denormalizer->denormalize($data['proposedPrice'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class, 'json', $context));
            unset($data['proposedPrice']);
        } elseif (\array_key_exists('proposedPrice', $data) && null === $data['proposedPrice']) {
            $object->setProposedPrice(null);
        }
        if (\array_key_exists('minimalPriceReduction', $data) && null !== $data['minimalPriceReduction']) {
            $object->setMinimalPriceReduction($this->denormalizer->denormalize($data['minimalPriceReduction'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class, 'json', $context));
            unset($data['minimalPriceReduction']);
        } elseif (\array_key_exists('minimalPriceReduction', $data) && null === $data['minimalPriceReduction']) {
            $object->setMinimalPriceReduction(null);
        }
        if (\array_key_exists('maximumSellingPrice', $data) && null !== $data['maximumSellingPrice']) {
            $object->setMaximumSellingPrice($this->denormalizer->denormalize($data['maximumSellingPrice'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class, 'json', $context));
            unset($data['maximumSellingPrice']);
        } elseif (\array_key_exists('maximumSellingPrice', $data) && null === $data['maximumSellingPrice']) {
            $object->setMaximumSellingPrice(null);
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
            $dataArray['proposedPrice'] = $this->normalizer->normalize($data->getProposedPrice(), 'json', $context);
        }
        if ($data->isInitialized('minimalPriceReduction') && null !== $data->getMinimalPriceReduction()) {
            $dataArray['minimalPriceReduction'] = $this->normalizer->normalize($data->getMinimalPriceReduction(), 'json', $context);
        }
        if ($data->isInitialized('maximumSellingPrice') && null !== $data->getMaximumSellingPrice()) {
            $dataArray['maximumSellingPrice'] = $this->normalizer->normalize($data->getMaximumSellingPrice(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class => false];
    }
}
