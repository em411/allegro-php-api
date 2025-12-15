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

class ShipmentCreateRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ShipmentCreateRequestDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ShipmentCreateRequestDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ShipmentCreateRequestDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryMethodId', $data) && null !== $data['deliveryMethodId']) {
            $object->setDeliveryMethodId($data['deliveryMethodId']);
            unset($data['deliveryMethodId']);
        } elseif (\array_key_exists('deliveryMethodId', $data) && null === $data['deliveryMethodId']) {
            $object->setDeliveryMethodId(null);
        }
        if (\array_key_exists('credentialsId', $data) && null !== $data['credentialsId']) {
            $object->setCredentialsId($data['credentialsId']);
            unset($data['credentialsId']);
        } elseif (\array_key_exists('credentialsId', $data) && null === $data['credentialsId']) {
            $object->setCredentialsId(null);
        }
        if (\array_key_exists('sender', $data) && null !== $data['sender']) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], \Em411\Allegro\Api\Model\SenderAddressDto::class, 'json', $context));
            unset($data['sender']);
        } elseif (\array_key_exists('sender', $data) && null === $data['sender']) {
            $object->setSender(null);
        }
        if (\array_key_exists('receiver', $data) && null !== $data['receiver']) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], \Em411\Allegro\Api\Model\ReceiverAddressDto::class, 'json', $context));
            unset($data['receiver']);
        } elseif (\array_key_exists('receiver', $data) && null === $data['receiver']) {
            $object->setReceiver(null);
        }
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && null === $data['referenceNumber']) {
            $object->setReferenceNumber(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\PackageRequestDto::class, 'json', $context);
            }
            $object->setPackages($values);
            unset($data['packages']);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], \Em411\Allegro\Api\Model\InsuranceDto::class, 'json', $context));
            unset($data['insurance']);
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('cashOnDelivery', $data) && null !== $data['cashOnDelivery']) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], \Em411\Allegro\Api\Model\CashOnDeliveryDto::class, 'json', $context));
            unset($data['cashOnDelivery']);
        } elseif (\array_key_exists('cashOnDelivery', $data) && null === $data['cashOnDelivery']) {
            $object->setCashOnDelivery(null);
        }
        if (\array_key_exists('labelFormat', $data) && null !== $data['labelFormat']) {
            $object->setLabelFormat($data['labelFormat']);
            unset($data['labelFormat']);
        } elseif (\array_key_exists('labelFormat', $data) && null === $data['labelFormat']) {
            $object->setLabelFormat(null);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $values_1 = [];
            foreach ($data['additionalServices'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAdditionalServices($values_1);
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
        }
        if (\array_key_exists('additionalProperties', $data) && null !== $data['additionalProperties']) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalProperties'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setAdditionalProperties($values_2);
            unset($data['additionalProperties']);
        } elseif (\array_key_exists('additionalProperties', $data) && null === $data['additionalProperties']) {
            $object->setAdditionalProperties(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deliveryMethodId'] = $data->getDeliveryMethodId();
        if ($data->isInitialized('credentialsId') && null !== $data->getCredentialsId()) {
            $dataArray['credentialsId'] = $data->getCredentialsId();
        }
        $dataArray['sender'] = $this->normalizer->normalize($data->getSender(), 'json', $context);
        $dataArray['receiver'] = $this->normalizer->normalize($data->getReceiver(), 'json', $context);
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        $values = [];
        foreach ($data->getPackages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['packages'] = $values;
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['insurance'] = $this->normalizer->normalize($data->getInsurance(), 'json', $context);
        }
        if ($data->isInitialized('cashOnDelivery') && null !== $data->getCashOnDelivery()) {
            $dataArray['cashOnDelivery'] = $this->normalizer->normalize($data->getCashOnDelivery(), 'json', $context);
        }
        if ($data->isInitialized('labelFormat') && null !== $data->getLabelFormat()) {
            $dataArray['labelFormat'] = $data->getLabelFormat();
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values_1 = [];
            foreach ($data->getAdditionalServices() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['additionalServices'] = $values_1;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $values_2 = [];
            foreach ($data->getAdditionalProperties() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['additionalProperties'] = $values_2;
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ShipmentCreateRequestDto::class => false];
    }
}
