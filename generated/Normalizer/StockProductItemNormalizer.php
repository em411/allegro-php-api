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

class StockProductItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StockProductItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StockProductItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\StockProductItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\StockProduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
            unset($data['product']);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Em411\Allegro\Api\Model\StockQuantity::class, 'json', $context));
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
            unset($data['quantity']);
        }
        if (\array_key_exists('sellingStats', $data) && null !== $data['sellingStats']) {
            $object->setSellingStats($this->denormalizer->denormalize($data['sellingStats'], \Em411\Allegro\Api\Model\StockSellingStats::class, 'json', $context));
            unset($data['sellingStats']);
        } elseif (\array_key_exists('sellingStats', $data) && null === $data['sellingStats']) {
            $object->setSellingStats(null);
            unset($data['sellingStats']);
        }
        if (\array_key_exists('reserve', $data) && null !== $data['reserve']) {
            $object->setReserve($this->denormalizer->denormalize($data['reserve'], \Em411\Allegro\Api\Model\ReserveInfo::class, 'json', $context));
            unset($data['reserve']);
        } elseif (\array_key_exists('reserve', $data) && null === $data['reserve']) {
            $object->setReserve(null);
            unset($data['reserve']);
        }
        if (\array_key_exists('storageFee', $data) && null !== $data['storageFee']) {
            $object->setStorageFee($this->denormalizer->denormalize($data['storageFee'], \Em411\Allegro\Api\Model\StockStorageFee::class, 'json', $context));
            unset($data['storageFee']);
        } elseif (\array_key_exists('storageFee', $data) && null === $data['storageFee']) {
            $object->setStorageFee(null);
            unset($data['storageFee']);
        }
        if (\array_key_exists('offerId', $data) && null !== $data['offerId']) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
        } elseif (\array_key_exists('offerId', $data) && null === $data['offerId']) {
            $object->setOfferId(null);
            unset($data['offerId']);
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
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = null === $data->getProduct() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProduct(), 'json', $context));
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = null === $data->getQuantity() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getQuantity(), 'json', $context));
        }
        if ($data->isInitialized('sellingStats') && null !== $data->getSellingStats()) {
            $dataArray['sellingStats'] = null === $data->getSellingStats() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSellingStats(), 'json', $context));
        }
        if ($data->isInitialized('reserve') && null !== $data->getReserve()) {
            $dataArray['reserve'] = null === $data->getReserve() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReserve(), 'json', $context));
        }
        if ($data->isInitialized('storageFee') && null !== $data->getStorageFee()) {
            $dataArray['storageFee'] = null === $data->getStorageFee() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getStorageFee(), 'json', $context));
        }
        if ($data->isInitialized('offerId') && null !== $data->getOfferId()) {
            $dataArray['offerId'] = $data->getOfferId();
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
        return [\Em411\Allegro\Api\Model\StockProductItem::class => false];
    }
}
