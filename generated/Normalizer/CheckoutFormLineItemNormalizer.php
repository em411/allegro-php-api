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

class CheckoutFormLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormLineItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormLineItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CheckoutFormLineItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (float) $data['quantity'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\OfferReference::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
            unset($data['quantity']);
        }
        if (\array_key_exists('originalPrice', $data) && null !== $data['originalPrice']) {
            $object->setOriginalPrice($this->denormalizer->denormalize($data['originalPrice'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['originalPrice']);
        } elseif (\array_key_exists('originalPrice', $data) && null === $data['originalPrice']) {
            $object->setOriginalPrice(null);
            unset($data['originalPrice']);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
            unset($data['price']);
        }
        if (\array_key_exists('deposit', $data) && null !== $data['deposit']) {
            $object->setDeposit($this->denormalizer->denormalize($data['deposit'], \Em411\Allegro\Api\Model\LineItemDeposit::class, 'json', $context));
            unset($data['deposit']);
        } elseif (\array_key_exists('deposit', $data) && null === $data['deposit']) {
            $object->setDeposit(null);
            unset($data['deposit']);
        }
        if (\array_key_exists('reconciliation', $data) && null !== $data['reconciliation']) {
            $object->setReconciliation($this->denormalizer->denormalize($data['reconciliation'], \Em411\Allegro\Api\Model\LineItemReconciliation::class, 'json', $context));
            unset($data['reconciliation']);
        } elseif (\array_key_exists('reconciliation', $data) && null === $data['reconciliation']) {
            $object->setReconciliation(null);
            unset($data['reconciliation']);
        }
        if (\array_key_exists('selectedAdditionalServices', $data) && null !== $data['selectedAdditionalServices']) {
            $values = [];
            foreach ($data['selectedAdditionalServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CheckoutFormAdditionalService::class, 'json', $context);
            }
            $object->setSelectedAdditionalServices($values);
            unset($data['selectedAdditionalServices']);
        } elseif (\array_key_exists('selectedAdditionalServices', $data) && null === $data['selectedAdditionalServices']) {
            $object->setSelectedAdditionalServices(null);
            unset($data['selectedAdditionalServices']);
        }
        if (\array_key_exists('vouchers', $data) && null !== $data['vouchers']) {
            $values_1 = [];
            foreach ($data['vouchers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\LineItemVoucher::class, 'json', $context);
            }
            $object->setVouchers($values_1);
            unset($data['vouchers']);
        } elseif (\array_key_exists('vouchers', $data) && null === $data['vouchers']) {
            $object->setVouchers(null);
            unset($data['vouchers']);
        }
        if (\array_key_exists('tax', $data) && null !== $data['tax']) {
            $object->setTax($this->denormalizer->denormalize($data['tax'], \Em411\Allegro\Api\Model\CheckoutFormLineItemTax::class, 'json', $context));
            unset($data['tax']);
        } elseif (\array_key_exists('tax', $data) && null === $data['tax']) {
            $object->setTax(null);
            unset($data['tax']);
        }
        if (\array_key_exists('boughtAt', $data) && null !== $data['boughtAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['boughtAt']);
            if (false === $date) {
                if (\is_string($data['boughtAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['boughtAt'])) {
                    try {
                        $date = new \DateTime($data['boughtAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['boughtAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['boughtAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setBoughtAt($date);
            unset($data['boughtAt']);
        } elseif (\array_key_exists('boughtAt', $data) && null === $data['boughtAt']) {
            $object->setBoughtAt(null);
            unset($data['boughtAt']);
        }
        if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
            $values_2 = [];
            foreach ($data['discounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\LineItemDiscount::class, 'json', $context);
            }
            $object->setDiscounts($values_2);
            unset($data['discounts']);
        } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
            $object->setDiscounts(null);
            unset($data['discounts']);
        }
        if (\array_key_exists('serialNumbers', $data) && null !== $data['serialNumbers']) {
            $object->setSerialNumbers($this->denormalizer->denormalize($data['serialNumbers'], \Em411\Allegro\Api\Model\CheckoutFormLineItemSerialNumbers::class, 'json', $context));
            unset($data['serialNumbers']);
        } elseif (\array_key_exists('serialNumbers', $data) && null === $data['serialNumbers']) {
            $object->setSerialNumbers(null);
            unset($data['serialNumbers']);
        }
        if (\array_key_exists('allegroAds', $data) && null !== $data['allegroAds']) {
            $object->setAllegroAds($this->denormalizer->denormalize($data['allegroAds'], \Em411\Allegro\Api\Model\LineItemAllegroAds::class, 'json', $context));
            unset($data['allegroAds']);
        } elseif (\array_key_exists('allegroAds', $data) && null === $data['allegroAds']) {
            $object->setAllegroAds(null);
            unset($data['allegroAds']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['originalPrice'] = null === $data->getOriginalPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOriginalPrice(), 'json', $context));
        $dataArray['price'] = null === $data->getPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPrice(), 'json', $context));
        if ($data->isInitialized('deposit') && null !== $data->getDeposit()) {
            $dataArray['deposit'] = null === $data->getDeposit() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDeposit(), 'json', $context));
        }
        if ($data->isInitialized('reconciliation') && null !== $data->getReconciliation()) {
            $dataArray['reconciliation'] = null === $data->getReconciliation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReconciliation(), 'json', $context));
        }
        if ($data->isInitialized('selectedAdditionalServices') && null !== $data->getSelectedAdditionalServices()) {
            $values = [];
            foreach ($data->getSelectedAdditionalServices() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['selectedAdditionalServices'] = $values;
        }
        if ($data->isInitialized('vouchers') && null !== $data->getVouchers()) {
            $values_1 = [];
            foreach ($data->getVouchers() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['vouchers'] = $values_1;
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = null === $data->getTax() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getTax(), 'json', $context));
        }
        if ($data->isInitialized('boughtAt') && null !== $data->getBoughtAt()) {
            $dataArray['boughtAt'] = $data->getBoughtAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $values_2 = [];
            foreach ($data->getDiscounts() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['discounts'] = $values_2;
        }
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $dataArray['serialNumbers'] = null === $data->getSerialNumbers() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSerialNumbers(), 'json', $context));
        }
        if ($data->isInitialized('allegroAds') && null !== $data->getAllegroAds()) {
            $dataArray['allegroAds'] = null === $data->getAllegroAds() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAllegroAds(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CheckoutFormLineItem::class => false];
    }
}
