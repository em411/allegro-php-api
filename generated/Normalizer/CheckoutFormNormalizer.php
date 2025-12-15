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

class CheckoutFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutForm::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutForm::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CheckoutForm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('messageToSeller', $data) && null !== $data['messageToSeller']) {
            $object->setMessageToSeller($data['messageToSeller']);
            unset($data['messageToSeller']);
        } elseif (\array_key_exists('messageToSeller', $data) && null === $data['messageToSeller']) {
            $object->setMessageToSeller(null);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\CheckoutFormBuyerReference::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
        }
        if (\array_key_exists('payment', $data) && null !== $data['payment']) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class, 'json', $context));
            unset($data['payment']);
        } elseif (\array_key_exists('payment', $data) && null === $data['payment']) {
            $object->setPayment(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('fulfillment', $data) && null !== $data['fulfillment']) {
            $object->setFulfillment($this->denormalizer->denormalize($data['fulfillment'], \Em411\Allegro\Api\Model\CheckoutFormFulfillment::class, 'json', $context));
            unset($data['fulfillment']);
        } elseif (\array_key_exists('fulfillment', $data) && null === $data['fulfillment']) {
            $object->setFulfillment(null);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryReference::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \Em411\Allegro\Api\Model\CheckoutFormInvoiceInfo::class, 'json', $context));
            unset($data['invoice']);
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('lineItems', $data) && null !== $data['lineItems']) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CheckoutFormLineItem::class, 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['lineItems']);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('surcharges', $data) && null !== $data['surcharges']) {
            $values_1 = [];
            foreach ($data['surcharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class, 'json', $context);
            }
            $object->setSurcharges($values_1);
            unset($data['surcharges']);
        } elseif (\array_key_exists('surcharges', $data) && null === $data['surcharges']) {
            $object->setSurcharges(null);
        }
        if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
            $values_2 = [];
            foreach ($data['discounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\CheckoutFormDiscount::class, 'json', $context);
            }
            $object->setDiscounts($values_2);
            unset($data['discounts']);
        } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
            $object->setDiscounts(null);
        }
        if (\array_key_exists('note', $data) && null !== $data['note']) {
            $object->setNote($this->denormalizer->denormalize($data['note'], \Em411\Allegro\Api\Model\CheckoutFormNoteReference::class, 'json', $context));
            unset($data['note']);
        } elseif (\array_key_exists('note', $data) && null === $data['note']) {
            $object->setNote(null);
        }
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\CheckoutFormMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
        }
        if (\array_key_exists('summary', $data) && null !== $data['summary']) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], \Em411\Allegro\Api\Model\CheckoutFormSummary::class, 'json', $context));
            unset($data['summary']);
        } elseif (\array_key_exists('summary', $data) && null === $data['summary']) {
            $object->setSummary(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('revision', $data) && null !== $data['revision']) {
            $object->setRevision($data['revision']);
            unset($data['revision']);
        } elseif (\array_key_exists('revision', $data) && null === $data['revision']) {
            $object->setRevision(null);
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
        if ($data->isInitialized('messageToSeller') && null !== $data->getMessageToSeller()) {
            $dataArray['messageToSeller'] = $data->getMessageToSeller();
        }
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('fulfillment') && null !== $data->getFulfillment()) {
            $dataArray['fulfillment'] = $this->normalizer->normalize($data->getFulfillment(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('invoice') && null !== $data->getInvoice()) {
            $dataArray['invoice'] = $this->normalizer->normalize($data->getInvoice(), 'json', $context);
        }
        $values = [];
        foreach ($data->getLineItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['lineItems'] = $values;
        $values_1 = [];
        foreach ($data->getSurcharges() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['surcharges'] = $values_1;
        $values_2 = [];
        foreach ($data->getDiscounts() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['discounts'] = $values_2;
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $this->normalizer->normalize($data->getNote(), 'json', $context);
        }
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        }
        $dataArray['summary'] = $this->normalizer->normalize($data->getSummary(), 'json', $context);
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('revision') && null !== $data->getRevision()) {
            $dataArray['revision'] = $data->getRevision();
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
        return [\Em411\Allegro\Api\Model\CheckoutForm::class => false];
    }
}
