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

class InitializeRefundNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\InitializeRefund::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\InitializeRefund::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\InitializeRefund();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('payment', $data) && null !== $data['payment']) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Em411\Allegro\Api\Model\RefundPayment::class, 'json', $context));
            unset($data['payment']);
        } elseif (\array_key_exists('payment', $data) && null === $data['payment']) {
            $object->setPayment(null);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Em411\Allegro\Api\Model\RefundOrder::class, 'json', $context));
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('commandId', $data) && null !== $data['commandId']) {
            $object->setCommandId($data['commandId']);
            unset($data['commandId']);
        } elseif (\array_key_exists('commandId', $data) && null === $data['commandId']) {
            $object->setCommandId(null);
        }
        if (\array_key_exists('reason', $data) && null !== $data['reason']) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        } elseif (\array_key_exists('reason', $data) && null === $data['reason']) {
            $object->setReason(null);
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
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\InitializeRefundDelivery::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('overpaid', $data) && null !== $data['overpaid']) {
            $object->setOverpaid($this->denormalizer->denormalize($data['overpaid'], \Em411\Allegro\Api\Model\InitializeRefundOverpaid::class, 'json', $context));
            unset($data['overpaid']);
        } elseif (\array_key_exists('overpaid', $data) && null === $data['overpaid']) {
            $object->setOverpaid(null);
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
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Em411\Allegro\Api\Model\InitializeRefundAdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
        }
        if (\array_key_exists('sellerComment', $data) && null !== $data['sellerComment']) {
            $object->setSellerComment($data['sellerComment']);
            unset($data['sellerComment']);
        } elseif (\array_key_exists('sellerComment', $data) && null === $data['sellerComment']) {
            $object->setSellerComment(null);
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
        $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        $dataArray['commandId'] = $data->getCommandId();
        $dataArray['reason'] = $data->getReason();
        if ($data->isInitialized('lineItems') && null !== $data->getLineItems()) {
            $values = [];
            foreach ($data->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['lineItems'] = $values;
        }
        if ($data->isInitialized('deposits') && null !== $data->getDeposits()) {
            $values_1 = [];
            foreach ($data->getDeposits() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['deposits'] = $values_1;
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('overpaid') && null !== $data->getOverpaid()) {
            $dataArray['overpaid'] = $this->normalizer->normalize($data->getOverpaid(), 'json', $context);
        }
        if ($data->isInitialized('surcharges') && null !== $data->getSurcharges()) {
            $values_2 = [];
            foreach ($data->getSurcharges() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['surcharges'] = $values_2;
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        if ($data->isInitialized('sellerComment') && null !== $data->getSellerComment()) {
            $dataArray['sellerComment'] = $data->getSellerComment();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\InitializeRefund::class => false];
    }
}
