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

class LabelRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\LabelRequestDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\LabelRequestDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\LabelRequestDto();
        if (\array_key_exists('cutLine', $data) && \is_int($data['cutLine'])) {
            $data['cutLine'] = (bool) $data['cutLine'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentIds', $data) && null !== $data['shipmentIds']) {
            $values = [];
            foreach ($data['shipmentIds'] as $value) {
                $values[] = $value;
            }
            $object->setShipmentIds($values);
            unset($data['shipmentIds']);
        } elseif (\array_key_exists('shipmentIds', $data) && null === $data['shipmentIds']) {
            $object->setShipmentIds(null);
        }
        if (\array_key_exists('pageSize', $data) && null !== $data['pageSize']) {
            $object->setPageSize($data['pageSize']);
            unset($data['pageSize']);
        } elseif (\array_key_exists('pageSize', $data) && null === $data['pageSize']) {
            $object->setPageSize(null);
        }
        if (\array_key_exists('cutLine', $data) && null !== $data['cutLine']) {
            $object->setCutLine($data['cutLine']);
            unset($data['cutLine']);
        } elseif (\array_key_exists('cutLine', $data) && null === $data['cutLine']) {
            $object->setCutLine(null);
        }
        if (\array_key_exists('summaryReport', $data) && null !== $data['summaryReport']) {
            $object->setSummaryReport($this->denormalizer->denormalize($data['summaryReport'], \Em411\Allegro\Api\Model\LabelRequestDtoSummaryReport::class, 'json', $context));
            unset($data['summaryReport']);
        } elseif (\array_key_exists('summaryReport', $data) && null === $data['summaryReport']) {
            $object->setSummaryReport(null);
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
        $values = [];
        foreach ($data->getShipmentIds() as $value) {
            $values[] = $value;
        }
        $dataArray['shipmentIds'] = $values;
        if ($data->isInitialized('pageSize') && null !== $data->getPageSize()) {
            $dataArray['pageSize'] = $data->getPageSize();
        }
        if ($data->isInitialized('cutLine') && null !== $data->getCutLine()) {
            $dataArray['cutLine'] = $data->getCutLine();
        }
        if ($data->isInitialized('summaryReport') && null !== $data->getSummaryReport()) {
            $dataArray['summaryReport'] = $this->normalizer->normalize($data->getSummaryReport(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\LabelRequestDto::class => false];
    }
}
