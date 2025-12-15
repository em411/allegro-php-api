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

class SalesQualityForDayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SalesQualityForDay::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SalesQualityForDay::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SalesQualityForDay();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }
        if (\array_key_exists('maxScore', $data) && \is_int($data['maxScore'])) {
            $data['maxScore'] = (float) $data['maxScore'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resultFor', $data) && null !== $data['resultFor']) {
            $object->setResultFor(\DateTime::createFromFormat('Y-m-d', $data['resultFor'])->setTime(0, 0, 0));
            unset($data['resultFor']);
        } elseif (\array_key_exists('resultFor', $data) && null === $data['resultFor']) {
            $object->setResultFor(null);
        }
        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $object->setScore($data['score']);
            unset($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $object->setScore(null);
        }
        if (\array_key_exists('grade', $data) && null !== $data['grade']) {
            $object->setGrade($data['grade']);
            unset($data['grade']);
        } elseif (\array_key_exists('grade', $data) && null === $data['grade']) {
            $object->setGrade(null);
        }
        if (\array_key_exists('maxScore', $data) && null !== $data['maxScore']) {
            $object->setMaxScore($data['maxScore']);
            unset($data['maxScore']);
        } elseif (\array_key_exists('maxScore', $data) && null === $data['maxScore']) {
            $object->setMaxScore(null);
        }
        if (\array_key_exists('metrics', $data) && null !== $data['metrics']) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\SalesQualityMetric::class, 'json', $context);
            }
            $object->setMetrics($values);
            unset($data['metrics']);
        } elseif (\array_key_exists('metrics', $data) && null === $data['metrics']) {
            $object->setMetrics(null);
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
        $dataArray['resultFor'] = $data->getResultFor()->format('Y-m-d');
        $dataArray['score'] = $data->getScore();
        $dataArray['grade'] = $data->getGrade();
        $dataArray['maxScore'] = $data->getMaxScore();
        $values = [];
        foreach ($data->getMetrics() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['metrics'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SalesQualityForDay::class => false];
    }
}
