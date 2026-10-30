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

class TurnoverDiscountDefinitionDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cumulatingFromDate', $data) && null !== $data['cumulatingFromDate']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['cumulatingFromDate']);
            if (false === $date) {
                throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['cumulatingFromDate'], 'Y-m-d');
            }
            $object->setCumulatingFromDate($date->setTime(0, 0, 0));
            unset($data['cumulatingFromDate']);
        } elseif (\array_key_exists('cumulatingFromDate', $data) && null === $data['cumulatingFromDate']) {
            $object->setCumulatingFromDate(null);
            unset($data['cumulatingFromDate']);
        }
        if (\array_key_exists('cumulatingToDate', $data) && null !== $data['cumulatingToDate']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['cumulatingToDate']);
            if (false === $date_1) {
                throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['cumulatingToDate'], 'Y-m-d');
            }
            $object->setCumulatingToDate($date_1->setTime(0, 0, 0));
            unset($data['cumulatingToDate']);
        } elseif (\array_key_exists('cumulatingToDate', $data) && null === $data['cumulatingToDate']) {
            $object->setCumulatingToDate(null);
            unset($data['cumulatingToDate']);
        }
        if (\array_key_exists('spendingFromDate', $data) && null !== $data['spendingFromDate']) {
            $date_2 = \DateTime::createFromFormat('Y-m-d', $data['spendingFromDate']);
            if (false === $date_2) {
                throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['spendingFromDate'], 'Y-m-d');
            }
            $object->setSpendingFromDate($date_2->setTime(0, 0, 0));
            unset($data['spendingFromDate']);
        } elseif (\array_key_exists('spendingFromDate', $data) && null === $data['spendingFromDate']) {
            $object->setSpendingFromDate(null);
            unset($data['spendingFromDate']);
        }
        if (\array_key_exists('spendingToDate', $data) && null !== $data['spendingToDate']) {
            $date_3 = \DateTime::createFromFormat('Y-m-d', $data['spendingToDate']);
            if (false === $date_3) {
                throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['spendingToDate'], 'Y-m-d');
            }
            $object->setSpendingToDate($date_3->setTime(0, 0, 0));
            unset($data['spendingToDate']);
        } elseif (\array_key_exists('spendingToDate', $data) && null === $data['spendingToDate']) {
            $object->setSpendingToDate(null);
            unset($data['spendingToDate']);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $date_4 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date_4) {
                if (\is_string($data['createdAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdAt'])) {
                    try {
                        $date_4 = new \DateTime($data['createdAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCreatedAt($date_4);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $date_5 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']);
            if (false === $date_5) {
                if (\is_string($data['updatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['updatedAt'])) {
                    try {
                        $date_5 = new \DateTime($data['updatedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setUpdatedAt($date_5);
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('thresholds', $data) && null !== $data['thresholds']) {
            $values = [];
            foreach ($data['thresholds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\TurnoverDiscountThresholdDto::class, 'json', $context);
            }
            $object->setThresholds($values);
            unset($data['thresholds']);
        } elseif (\array_key_exists('thresholds', $data) && null === $data['thresholds']) {
            $object->setThresholds(null);
            unset($data['thresholds']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cumulatingFromDate') && null !== $data->getCumulatingFromDate()) {
            $dataArray['cumulatingFromDate'] = $data->getCumulatingFromDate()->format('Y-m-d');
        }
        if ($data->isInitialized('cumulatingToDate') && null !== $data->getCumulatingToDate()) {
            $dataArray['cumulatingToDate'] = $data->getCumulatingToDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('spendingFromDate') && null !== $data->getSpendingFromDate()) {
            $dataArray['spendingFromDate'] = $data->getSpendingFromDate()->format('Y-m-d');
        }
        if ($data->isInitialized('spendingToDate') && null !== $data->getSpendingToDate()) {
            $dataArray['spendingToDate'] = $data->getSpendingToDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('thresholds') && null !== $data->getThresholds()) {
            $values = [];
            foreach ($data->getThresholds() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['thresholds'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto::class => false];
    }
}
