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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StockProductItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\StockProduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Em411\Allegro\Api\Model\StockQuantity::class, 'json', $context));
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('sellingStats', $data) && null !== $data['sellingStats']) {
            $object->setSellingStats($this->denormalizer->denormalize($data['sellingStats'], \Em411\Allegro\Api\Model\StockSellingStats::class, 'json', $context));
            unset($data['sellingStats']);
        } elseif (\array_key_exists('sellingStats', $data) && null === $data['sellingStats']) {
            $object->setSellingStats(null);
        }
        if (\array_key_exists('reserve', $data) && null !== $data['reserve']) {
            $object->setReserve($this->denormalizer->denormalize($data['reserve'], \Em411\Allegro\Api\Model\ReserveInfo::class, 'json', $context));
            unset($data['reserve']);
        } elseif (\array_key_exists('reserve', $data) && null === $data['reserve']) {
            $object->setReserve(null);
        }
        if (\array_key_exists('storageFee', $data) && null !== $data['storageFee']) {
            $object->setStorageFee($this->denormalizer->denormalize($data['storageFee'], \Em411\Allegro\Api\Model\StockStorageFee::class, 'json', $context));
            unset($data['storageFee']);
        } elseif (\array_key_exists('storageFee', $data) && null === $data['storageFee']) {
            $object->setStorageFee(null);
        }
        if (\array_key_exists('offerId', $data) && null !== $data['offerId']) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
        } elseif (\array_key_exists('offerId', $data) && null === $data['offerId']) {
            $object->setOfferId(null);
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
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $this->normalizer->normalize($data->getQuantity(), 'json', $context);
        }
        if ($data->isInitialized('sellingStats') && null !== $data->getSellingStats()) {
            $dataArray['sellingStats'] = $this->normalizer->normalize($data->getSellingStats(), 'json', $context);
        }
        if ($data->isInitialized('reserve') && null !== $data->getReserve()) {
            $dataArray['reserve'] = $this->normalizer->normalize($data->getReserve(), 'json', $context);
        }
        if ($data->isInitialized('storageFee') && null !== $data->getStorageFee()) {
            $dataArray['storageFee'] = $this->normalizer->normalize($data->getStorageFee(), 'json', $context);
        }
        if ($data->isInitialized('offerId') && null !== $data->getOfferId()) {
            $dataArray['offerId'] = $data->getOfferId();
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
        return [\Em411\Allegro\Api\Model\StockProductItem::class => false];
    }
}
