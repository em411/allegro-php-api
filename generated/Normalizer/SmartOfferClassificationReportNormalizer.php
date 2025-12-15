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

class SmartOfferClassificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SmartOfferClassificationReport::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SmartOfferClassificationReport::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SmartOfferClassificationReport();
        if (\array_key_exists('scheduledForReclassification', $data) && \is_int($data['scheduledForReclassification'])) {
            $data['scheduledForReclassification'] = (bool) $data['scheduledForReclassification'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('classification', $data) && null !== $data['classification']) {
            $object->setClassification($this->denormalizer->denormalize($data['classification'], \Em411\Allegro\Api\Model\SmartOfferClassificationReportClassification::class, 'json', $context));
            unset($data['classification']);
        } elseif (\array_key_exists('classification', $data) && null === $data['classification']) {
            $object->setClassification(null);
        }
        if (\array_key_exists('scheduledForReclassification', $data) && null !== $data['scheduledForReclassification']) {
            $object->setScheduledForReclassification($data['scheduledForReclassification']);
            unset($data['scheduledForReclassification']);
        } elseif (\array_key_exists('scheduledForReclassification', $data) && null === $data['scheduledForReclassification']) {
            $object->setScheduledForReclassification(null);
        }
        if (\array_key_exists('smartDeliveryMethods', $data) && null !== $data['smartDeliveryMethods']) {
            $values = [];
            foreach ($data['smartDeliveryMethods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\SmartDeliveryMethod::class, 'json', $context);
            }
            $object->setSmartDeliveryMethods($values);
            unset($data['smartDeliveryMethods']);
        } elseif (\array_key_exists('smartDeliveryMethods', $data) && null === $data['smartDeliveryMethods']) {
            $object->setSmartDeliveryMethods(null);
        }
        if (\array_key_exists('conditions', $data) && null !== $data['conditions']) {
            $values_1 = [];
            foreach ($data['conditions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\SmartOfferClassificationReportConditionsItem::class, 'json', $context);
            }
            $object->setConditions($values_1);
            unset($data['conditions']);
        } elseif (\array_key_exists('conditions', $data) && null === $data['conditions']) {
            $object->setConditions(null);
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
        if ($data->isInitialized('scheduledForReclassification') && null !== $data->getScheduledForReclassification()) {
            $dataArray['scheduledForReclassification'] = $data->getScheduledForReclassification();
        }
        if ($data->isInitialized('smartDeliveryMethods') && null !== $data->getSmartDeliveryMethods()) {
            $values = [];
            foreach ($data->getSmartDeliveryMethods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['smartDeliveryMethods'] = $values;
        }
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $values_1 = [];
            foreach ($data->getConditions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['conditions'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\SmartOfferClassificationReport::class => false];
    }
}
