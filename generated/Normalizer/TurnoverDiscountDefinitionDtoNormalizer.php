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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\TurnoverDiscountDefinitionDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cumulatingFromDate', $data) && null !== $data['cumulatingFromDate']) {
            $object->setCumulatingFromDate(\DateTime::createFromFormat('Y-m-d', $data['cumulatingFromDate'])->setTime(0, 0, 0));
            unset($data['cumulatingFromDate']);
        } elseif (\array_key_exists('cumulatingFromDate', $data) && null === $data['cumulatingFromDate']) {
            $object->setCumulatingFromDate(null);
        }
        if (\array_key_exists('cumulatingToDate', $data) && null !== $data['cumulatingToDate']) {
            $object->setCumulatingToDate(\DateTime::createFromFormat('Y-m-d', $data['cumulatingToDate'])->setTime(0, 0, 0));
            unset($data['cumulatingToDate']);
        } elseif (\array_key_exists('cumulatingToDate', $data) && null === $data['cumulatingToDate']) {
            $object->setCumulatingToDate(null);
        }
        if (\array_key_exists('spendingFromDate', $data) && null !== $data['spendingFromDate']) {
            $object->setSpendingFromDate(\DateTime::createFromFormat('Y-m-d', $data['spendingFromDate'])->setTime(0, 0, 0));
            unset($data['spendingFromDate']);
        } elseif (\array_key_exists('spendingFromDate', $data) && null === $data['spendingFromDate']) {
            $object->setSpendingFromDate(null);
        }
        if (\array_key_exists('spendingToDate', $data) && null !== $data['spendingToDate']) {
            $object->setSpendingToDate(\DateTime::createFromFormat('Y-m-d', $data['spendingToDate'])->setTime(0, 0, 0));
            unset($data['spendingToDate']);
        } elseif (\array_key_exists('spendingToDate', $data) && null === $data['spendingToDate']) {
            $object->setSpendingToDate(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
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
        if ($data->isInitialized('cumulatingToDate')) {
            $dataArray['cumulatingToDate'] = $data->getCumulatingToDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('spendingFromDate') && null !== $data->getSpendingFromDate()) {
            $dataArray['spendingFromDate'] = $data->getSpendingFromDate()->format('Y-m-d');
        }
        if ($data->isInitialized('spendingToDate')) {
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['thresholds'] = $values;
        }
        foreach ($data as $key => $value_1) {
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
