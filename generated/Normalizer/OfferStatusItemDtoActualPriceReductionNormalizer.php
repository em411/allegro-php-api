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

class OfferStatusItemDtoActualPriceReductionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferStatusItemDtoActualPriceReduction::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferStatusItemDtoActualPriceReduction::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferStatusItemDtoActualPriceReduction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sellerMaxDeclaredPercentage', $data) && null !== $data['sellerMaxDeclaredPercentage']) {
            $object->setSellerMaxDeclaredPercentage($data['sellerMaxDeclaredPercentage']);
            unset($data['sellerMaxDeclaredPercentage']);
        } elseif (\array_key_exists('sellerMaxDeclaredPercentage', $data) && null === $data['sellerMaxDeclaredPercentage']) {
            $object->setSellerMaxDeclaredPercentage(null);
        }
        if (\array_key_exists('sellerMaxDeclaredDiscount', $data) && null !== $data['sellerMaxDeclaredDiscount']) {
            $object->setSellerMaxDeclaredDiscount($this->denormalizer->denormalize($data['sellerMaxDeclaredDiscount'], \Em411\Allegro\Api\Model\ActualPriceReductionDtoSellerMaxDeclaredDiscount::class, 'json', $context));
            unset($data['sellerMaxDeclaredDiscount']);
        } elseif (\array_key_exists('sellerMaxDeclaredDiscount', $data) && null === $data['sellerMaxDeclaredDiscount']) {
            $object->setSellerMaxDeclaredDiscount(null);
        }
        if (\array_key_exists('sellerDiscount', $data) && null !== $data['sellerDiscount']) {
            $object->setSellerDiscount($this->denormalizer->denormalize($data['sellerDiscount'], \Em411\Allegro\Api\Model\ActualPriceReductionDtoSellerDiscount::class, 'json', $context));
            unset($data['sellerDiscount']);
        } elseif (\array_key_exists('sellerDiscount', $data) && null === $data['sellerDiscount']) {
            $object->setSellerDiscount(null);
        }
        if (\array_key_exists('allegroDiscount', $data) && null !== $data['allegroDiscount']) {
            $object->setAllegroDiscount($this->denormalizer->denormalize($data['allegroDiscount'], \Em411\Allegro\Api\Model\ActualPriceReductionDtoAllegroDiscount::class, 'json', $context));
            unset($data['allegroDiscount']);
        } elseif (\array_key_exists('allegroDiscount', $data) && null === $data['allegroDiscount']) {
            $object->setAllegroDiscount(null);
        }
        if (\array_key_exists('finalPriceForTheBuyer', $data) && null !== $data['finalPriceForTheBuyer']) {
            $object->setFinalPriceForTheBuyer($this->denormalizer->denormalize($data['finalPriceForTheBuyer'], \Em411\Allegro\Api\Model\ActualPriceReductionDtoFinalPriceForTheBuyer::class, 'json', $context));
            unset($data['finalPriceForTheBuyer']);
        } elseif (\array_key_exists('finalPriceForTheBuyer', $data) && null === $data['finalPriceForTheBuyer']) {
            $object->setFinalPriceForTheBuyer(null);
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
        $dataArray['sellerMaxDeclaredPercentage'] = $data->getSellerMaxDeclaredPercentage();
        $dataArray['sellerMaxDeclaredDiscount'] = $this->normalizer->normalize($data->getSellerMaxDeclaredDiscount(), 'json', $context);
        $dataArray['sellerDiscount'] = $this->normalizer->normalize($data->getSellerDiscount(), 'json', $context);
        $dataArray['allegroDiscount'] = $this->normalizer->normalize($data->getAllegroDiscount(), 'json', $context);
        $dataArray['finalPriceForTheBuyer'] = $this->normalizer->normalize($data->getFinalPriceForTheBuyer(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferStatusItemDtoActualPriceReduction::class => false];
    }
}
