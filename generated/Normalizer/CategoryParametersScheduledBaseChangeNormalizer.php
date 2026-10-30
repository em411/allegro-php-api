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

class CategoryParametersScheduledBaseChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChange::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChange::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data) && 'REQUIREMENT_CHANGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\RequirementChange', $format, $context);
        }
        if (\array_key_exists('scheduledAt', $data) && null !== $data['scheduledAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['scheduledAt']);
            if (false === $date) {
                if (\is_string($data['scheduledAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['scheduledAt'])) {
                    try {
                        $date = new \DateTime($data['scheduledAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['scheduledAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['scheduledAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setScheduledAt($date);
            unset($data['scheduledAt']);
        } elseif (\array_key_exists('scheduledAt', $data) && null === $data['scheduledAt']) {
            $object->setScheduledAt(null);
            unset($data['scheduledAt']);
        }
        if (\array_key_exists('scheduledFor', $data) && null !== $data['scheduledFor']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['scheduledFor']);
            if (false === $date_1) {
                if (\is_string($data['scheduledFor']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['scheduledFor'])) {
                    try {
                        $date_1 = new \DateTime($data['scheduledFor']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['scheduledFor'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['scheduledFor'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setScheduledFor($date_1);
            unset($data['scheduledFor']);
        } elseif (\array_key_exists('scheduledFor', $data) && null === $data['scheduledFor']) {
            $object->setScheduledFor(null);
            unset($data['scheduledFor']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getType() && 'REQUIREMENT_CHANGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['scheduledAt'] = $data->getScheduledAt()->format('Y-m-d\TH:i:sP');
        $dataArray['scheduledFor'] = $data->getScheduledFor()->format('Y-m-d\TH:i:sP');
        $dataArray['type'] = $data->getType();
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CategoryParametersScheduledBaseChange::class => false];
    }
}
