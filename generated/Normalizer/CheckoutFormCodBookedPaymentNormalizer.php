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

class CheckoutFormCodBookedPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormCodBookedPayment::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormCodBookedPayment::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CheckoutFormCodBookedPayment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('paymentId', $data) && null !== $data['paymentId']) {
            $object->setPaymentId($data['paymentId']);
            unset($data['paymentId']);
        } elseif (\array_key_exists('paymentId', $data) && null === $data['paymentId']) {
            $object->setPaymentId(null);
            unset($data['paymentId']);
        }
        if (\array_key_exists('shipmentId', $data) && null !== $data['shipmentId']) {
            $object->setShipmentId($data['shipmentId']);
            unset($data['shipmentId']);
        } elseif (\array_key_exists('shipmentId', $data) && null === $data['shipmentId']) {
            $object->setShipmentId(null);
            unset($data['shipmentId']);
        }
        if (\array_key_exists('paidAmount', $data) && null !== $data['paidAmount']) {
            $object->setPaidAmount($this->denormalizer->denormalize($data['paidAmount'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['paidAmount']);
        } elseif (\array_key_exists('paidAmount', $data) && null === $data['paidAmount']) {
            $object->setPaidAmount(null);
            unset($data['paidAmount']);
        }
        if (\array_key_exists('paidAt', $data) && null !== $data['paidAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['paidAt']);
            if (false === $date) {
                if (\is_string($data['paidAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['paidAt'])) {
                    try {
                        $date = new \DateTime($data['paidAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['paidAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['paidAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setPaidAt($date);
            unset($data['paidAt']);
        } elseif (\array_key_exists('paidAt', $data) && null === $data['paidAt']) {
            $object->setPaidAt(null);
            unset($data['paidAt']);
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
        $dataArray['paymentId'] = $data->getPaymentId();
        if ($data->isInitialized('shipmentId') && null !== $data->getShipmentId()) {
            $dataArray['shipmentId'] = $data->getShipmentId();
        }
        $dataArray['paidAmount'] = null === $data->getPaidAmount() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPaidAmount(), 'json', $context));
        if ($data->isInitialized('paidAt') && null !== $data->getPaidAt()) {
            $dataArray['paidAt'] = $data->getPaidAt()->format('Y-m-d\TH:i:sP');
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
        return [\Em411\Allegro\Api\Model\CheckoutFormCodBookedPayment::class => false];
    }
}
