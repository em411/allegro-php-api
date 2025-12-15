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

class SmartSellerClassificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SmartSellerClassificationReport::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SmartSellerClassificationReport::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SmartSellerClassificationReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('classification', $data) && null !== $data['classification']) {
            $object->setClassification($this->denormalizer->denormalize($data['classification'], \Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification::class, 'json', $context));
            unset($data['classification']);
        } elseif (\array_key_exists('classification', $data) && null === $data['classification']) {
            $object->setClassification(null);
        }
        if (\array_key_exists('conditions', $data) && null !== $data['conditions']) {
            $values = [];
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\SmartSellerClassificationReportConditionsItem::class, 'json', $context);
            }
            $object->setConditions($values);
            unset($data['conditions']);
        } elseif (\array_key_exists('conditions', $data) && null === $data['conditions']) {
            $object->setConditions(null);
        }
        if (\array_key_exists('excludedDeliveryMethods', $data) && null !== $data['excludedDeliveryMethods']) {
            $values_1 = [];
            foreach ($data['excludedDeliveryMethods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\SmartDeliveryMethod::class, 'json', $context);
            }
            $object->setExcludedDeliveryMethods($values_1);
            unset($data['excludedDeliveryMethods']);
        } elseif (\array_key_exists('excludedDeliveryMethods', $data) && null === $data['excludedDeliveryMethods']) {
            $object->setExcludedDeliveryMethods(null);
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
        if ($data->isInitialized('classification') && null !== $data->getClassification()) {
            $dataArray['classification'] = $this->normalizer->normalize($data->getClassification(), 'json', $context);
        }
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $values = [];
            foreach ($data->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conditions'] = $values;
        }
        if ($data->isInitialized('excludedDeliveryMethods') && null !== $data->getExcludedDeliveryMethods()) {
            $values_1 = [];
            foreach ($data->getExcludedDeliveryMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['excludedDeliveryMethods'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\SmartSellerClassificationReport::class => false];
    }
}
