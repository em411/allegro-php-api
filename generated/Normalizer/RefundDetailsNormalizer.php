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

class RefundDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\RefundDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\RefundDetails::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\RefundDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('payment', $data) && null !== $data['payment']) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Em411\Allegro\Api\Model\RefundPayment::class, 'json', $context));
            unset($data['payment']);
        } elseif (\array_key_exists('payment', $data) && null === $data['payment']) {
            $object->setPayment(null);
            unset($data['payment']);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Em411\Allegro\Api\Model\RefundOrder::class, 'json', $context));
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
            unset($data['order']);
        }
        if (\array_key_exists('reason', $data) && null !== $data['reason']) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        } elseif (\array_key_exists('reason', $data) && null === $data['reason']) {
            $object->setReason(null);
            unset($data['reason']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date) {
                if (\is_string($data['createdAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdAt'])) {
                    try {
                        $date = new \DateTime($data['createdAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCreatedAt($date);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
            unset($data['createdAt']);
        }
        if (\array_key_exists('totalValue', $data) && null !== $data['totalValue']) {
            $object->setTotalValue($this->denormalizer->denormalize($data['totalValue'], \Em411\Allegro\Api\Model\RefundTotalValue::class, 'json', $context));
            unset($data['totalValue']);
        } elseif (\array_key_exists('totalValue', $data) && null === $data['totalValue']) {
            $object->setTotalValue(null);
            unset($data['totalValue']);
        }
        if (\array_key_exists('lineItems', $data) && null !== $data['lineItems']) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\RefundLineItem::class, 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['lineItems']);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
            unset($data['lineItems']);
        }
        if (\array_key_exists('deposits', $data) && null !== $data['deposits']) {
            $values_1 = [];
            foreach ($data['deposits'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\RefundLineItemDeposit::class, 'json', $context);
            }
            $object->setDeposits($values_1);
            unset($data['deposits']);
        } elseif (\array_key_exists('deposits', $data) && null === $data['deposits']) {
            $object->setDeposits(null);
            unset($data['deposits']);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\RefundDetailsDelivery::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
            unset($data['delivery']);
        }
        if (\array_key_exists('overpaid', $data) && null !== $data['overpaid']) {
            $object->setOverpaid($this->denormalizer->denormalize($data['overpaid'], \Em411\Allegro\Api\Model\RefundDetailsOverpaid::class, 'json', $context));
            unset($data['overpaid']);
        } elseif (\array_key_exists('overpaid', $data) && null === $data['overpaid']) {
            $object->setOverpaid(null);
            unset($data['overpaid']);
        }
        if (\array_key_exists('surcharges', $data) && null !== $data['surcharges']) {
            $values_2 = [];
            foreach ($data['surcharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\PaymentsSurcharge::class, 'json', $context);
            }
            $object->setSurcharges($values_2);
            unset($data['surcharges']);
        } elseif (\array_key_exists('surcharges', $data) && null === $data['surcharges']) {
            $object->setSurcharges(null);
            unset($data['surcharges']);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Em411\Allegro\Api\Model\RefundDetailsAdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('sellerComment', $data) && null !== $data['sellerComment']) {
            $object->setSellerComment($data['sellerComment']);
            unset($data['sellerComment']);
        } elseif (\array_key_exists('sellerComment', $data) && null === $data['sellerComment']) {
            $object->setSellerComment(null);
            unset($data['sellerComment']);
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
        $dataArray['payment'] = null === $data->getPayment() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPayment(), 'json', $context));
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = null === $data->getOrder() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOrder(), 'json', $context));
        }
        $dataArray['reason'] = $data->getReason();
        $dataArray['status'] = $data->getStatus();
        $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['totalValue'] = null === $data->getTotalValue() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getTotalValue(), 'json', $context));
        if ($data->isInitialized('lineItems') && null !== $data->getLineItems()) {
            $values = [];
            foreach ($data->getLineItems() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['lineItems'] = $values;
        }
        if ($data->isInitialized('deposits') && null !== $data->getDeposits()) {
            $values_1 = [];
            foreach ($data->getDeposits() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['deposits'] = $values_1;
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = null === $data->getDelivery() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDelivery(), 'json', $context));
        }
        if ($data->isInitialized('overpaid') && null !== $data->getOverpaid()) {
            $dataArray['overpaid'] = null === $data->getOverpaid() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOverpaid(), 'json', $context));
        }
        if ($data->isInitialized('surcharges') && null !== $data->getSurcharges()) {
            $values_2 = [];
            foreach ($data->getSurcharges() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['surcharges'] = $values_2;
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = null === $data->getAdditionalServices() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalServices(), 'json', $context));
        }
        if ($data->isInitialized('sellerComment') && null !== $data->getSellerComment()) {
            $dataArray['sellerComment'] = $data->getSellerComment();
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
        return [\Em411\Allegro\Api\Model\RefundDetails::class => false];
    }
}
