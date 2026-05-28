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

class DeliveryOptionDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliveryOptionDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliveryOptionDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\DeliveryOptionDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryType', $data) && null !== $data['deliveryType']) {
            $object->setDeliveryType($data['deliveryType']);
            unset($data['deliveryType']);
        } elseif (\array_key_exists('deliveryType', $data) && null === $data['deliveryType']) {
            $object->setDeliveryType(null);
        }
        if (\array_key_exists('paymentType', $data) && null !== $data['paymentType']) {
            $object->setPaymentType($data['paymentType']);
            unset($data['paymentType']);
        } elseif (\array_key_exists('paymentType', $data) && null === $data['paymentType']) {
            $object->setPaymentType(null);
        }
        if (\array_key_exists('packageType', $data) && null !== $data['packageType']) {
            $object->setPackageType($data['packageType']);
            unset($data['packageType']);
        } elseif (\array_key_exists('packageType', $data) && null === $data['packageType']) {
            $object->setPackageType(null);
        }
        if (\array_key_exists('originCountry', $data) && null !== $data['originCountry']) {
            $object->setOriginCountry($data['originCountry']);
            unset($data['originCountry']);
        } elseif (\array_key_exists('originCountry', $data) && null === $data['originCountry']) {
            $object->setOriginCountry(null);
        }
        if (\array_key_exists('destinationCountry', $data) && null !== $data['destinationCountry']) {
            $object->setDestinationCountry($data['destinationCountry']);
            unset($data['destinationCountry']);
        } elseif (\array_key_exists('destinationCountry', $data) && null === $data['destinationCountry']) {
            $object->setDestinationCountry(null);
        }
        if (\array_key_exists('limits', $data) && null !== $data['limits']) {
            $object->setLimits($this->denormalizer->denormalize($data['limits'], \Em411\Allegro\Api\Model\DeliveryOptionDtoLimits::class, 'json', $context));
            unset($data['limits']);
        } elseif (\array_key_exists('limits', $data) && null === $data['limits']) {
            $object->setLimits(null);
        }
        if (\array_key_exists('additionalServices', $data) && null !== $data['additionalServices']) {
            $values = [];
            foreach ($data['additionalServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\AdditionalServiceDto::class, 'json', $context);
            }
            $object->setAdditionalServices($values);
            unset($data['additionalServices']);
        } elseif (\array_key_exists('additionalServices', $data) && null === $data['additionalServices']) {
            $object->setAdditionalServices(null);
        }
        if (\array_key_exists('additionalProperties', $data) && null !== $data['additionalProperties']) {
            $values_1 = [];
            foreach ($data['additionalProperties'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\AdditionalPropertyDto::class, 'json', $context);
            }
            $object->setAdditionalProperties($values_1);
            unset($data['additionalProperties']);
        } elseif (\array_key_exists('additionalProperties', $data) && null === $data['additionalProperties']) {
            $object->setAdditionalProperties(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('deliveryType') && null !== $data->getDeliveryType()) {
            $dataArray['deliveryType'] = $data->getDeliveryType();
        }
        if ($data->isInitialized('paymentType') && null !== $data->getPaymentType()) {
            $dataArray['paymentType'] = $data->getPaymentType();
        }
        if ($data->isInitialized('packageType') && null !== $data->getPackageType()) {
            $dataArray['packageType'] = $data->getPackageType();
        }
        if ($data->isInitialized('originCountry') && null !== $data->getOriginCountry()) {
            $dataArray['originCountry'] = $data->getOriginCountry();
        }
        if ($data->isInitialized('destinationCountry') && null !== $data->getDestinationCountry()) {
            $dataArray['destinationCountry'] = $data->getDestinationCountry();
        }
        if ($data->isInitialized('limits') && null !== $data->getLimits()) {
            $dataArray['limits'] = $this->normalizer->normalize($data->getLimits(), 'json', $context);
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values = [];
            foreach ($data->getAdditionalServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalServices'] = $values;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $values_1 = [];
            foreach ($data->getAdditionalProperties() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalProperties'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\DeliveryOptionDto::class => false];
    }
}
