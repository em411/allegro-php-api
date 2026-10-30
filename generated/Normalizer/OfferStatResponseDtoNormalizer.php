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

class OfferStatResponseDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferStatResponseDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferStatResponseDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\OfferStatResponseDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\OfferStatModelDto::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('eventStatsTotal', $data) && null !== $data['eventStatsTotal']) {
            $values = [];
            foreach ($data['eventStatsTotal'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ClassifiedEventStat::class, 'json', $context);
            }
            $object->setEventStatsTotal($values);
            unset($data['eventStatsTotal']);
        } elseif (\array_key_exists('eventStatsTotal', $data) && null === $data['eventStatsTotal']) {
            $object->setEventStatsTotal(null);
            unset($data['eventStatsTotal']);
        }
        if (\array_key_exists('eventsPerDay', $data) && null !== $data['eventsPerDay']) {
            $values_1 = [];
            foreach ($data['eventsPerDay'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ClassifiedDailyEventStatResponseDto::class, 'json', $context);
            }
            $object->setEventsPerDay($values_1);
            unset($data['eventsPerDay']);
        } elseif (\array_key_exists('eventsPerDay', $data) && null === $data['eventsPerDay']) {
            $object->setEventsPerDay(null);
            unset($data['eventsPerDay']);
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
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        }
        if ($data->isInitialized('eventStatsTotal') && null !== $data->getEventStatsTotal()) {
            $values = [];
            foreach ($data->getEventStatsTotal() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['eventStatsTotal'] = $values;
        }
        if ($data->isInitialized('eventsPerDay') && null !== $data->getEventsPerDay()) {
            $values_1 = [];
            foreach ($data->getEventsPerDay() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['eventsPerDay'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\OfferStatResponseDto::class => false];
    }
}
