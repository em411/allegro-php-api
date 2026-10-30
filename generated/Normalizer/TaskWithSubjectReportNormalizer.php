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

class TaskWithSubjectReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\TaskWithSubjectReport::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\TaskWithSubjectReport::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\TaskWithSubjectReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tasks', $data) && null !== $data['tasks']) {
            $values = [];
            foreach ($data['tasks'] as $value) {
                $value_1 = $value;
                if (\is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CommandTaskWithPriceSubject::class, 'json', $context);
                } elseif (\is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CommandTaskWithStockSubject::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setTasks($values);
            unset($data['tasks']);
        } elseif (\array_key_exists('tasks', $data) && null === $data['tasks']) {
            $object->setTasks(null);
            unset($data['tasks']);
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
        if ($data->isInitialized('tasks') && null !== $data->getTasks()) {
            $values = [];
            foreach ($data->getTasks() as $value) {
                $value_1 = $value;
                if (\is_object($value)) {
                    $value_1 = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                } elseif (\is_object($value)) {
                    $value_1 = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                }
                $values[] = $value_1;
            }
            $dataArray['tasks'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\TaskWithSubjectReport::class => false];
    }
}
