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

class SmartOfferClassificationReportConditionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem();
        if (\array_key_exists('fulfilled', $data) && \is_int($data['fulfilled'])) {
            $data['fulfilled'] = (bool) $data['fulfilled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('fulfilled', $data) && null !== $data['fulfilled']) {
            $object->setFulfilled($data['fulfilled']);
            unset($data['fulfilled']);
        } elseif (\array_key_exists('fulfilled', $data) && null === $data['fulfilled']) {
            $object->setFulfilled(null);
        }
        if (\array_key_exists('passedDeliveryMethods', $data) && null !== $data['passedDeliveryMethods']) {
            $values = [];
            foreach ($data['passedDeliveryMethods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\DeliveryMethodId::class, 'json', $context);
            }
            $object->setPassedDeliveryMethods($values);
            unset($data['passedDeliveryMethods']);
        } elseif (\array_key_exists('passedDeliveryMethods', $data) && null === $data['passedDeliveryMethods']) {
            $object->setPassedDeliveryMethods(null);
        }
        if (\array_key_exists('failedDeliveryMethods', $data) && null !== $data['failedDeliveryMethods']) {
            $values_1 = [];
            foreach ($data['failedDeliveryMethods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\DeliveryMethodId::class, 'json', $context);
            }
            $object->setFailedDeliveryMethods($values_1);
            unset($data['failedDeliveryMethods']);
        } elseif (\array_key_exists('failedDeliveryMethods', $data) && null === $data['failedDeliveryMethods']) {
            $object->setFailedDeliveryMethods(null);
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
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('fulfilled') && null !== $data->getFulfilled()) {
            $dataArray['fulfilled'] = $data->getFulfilled();
        }
        if ($data->isInitialized('passedDeliveryMethods') && null !== $data->getPassedDeliveryMethods()) {
            $values = [];
            foreach ($data->getPassedDeliveryMethods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['passedDeliveryMethods'] = $values;
        }
        if ($data->isInitialized('failedDeliveryMethods') && null !== $data->getFailedDeliveryMethods()) {
            $values_1 = [];
            foreach ($data->getFailedDeliveryMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['failedDeliveryMethods'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem::class => false];
    }
}
