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

class OfferRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferRating::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferRating::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferRating();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('averageScore', $data) && null !== $data['averageScore']) {
            $object->setAverageScore($data['averageScore']);
            unset($data['averageScore']);
        } elseif (\array_key_exists('averageScore', $data) && null === $data['averageScore']) {
            $object->setAverageScore(null);
        }
        if (\array_key_exists('scoreDistribution', $data) && null !== $data['scoreDistribution']) {
            $values = [];
            foreach ($data['scoreDistribution'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\OfferRatingScoreDistributionItem::class, 'json', $context);
            }
            $object->setScoreDistribution($values);
            unset($data['scoreDistribution']);
        } elseif (\array_key_exists('scoreDistribution', $data) && null === $data['scoreDistribution']) {
            $object->setScoreDistribution(null);
        }
        if (\array_key_exists('totalResponses', $data) && null !== $data['totalResponses']) {
            $object->setTotalResponses($data['totalResponses']);
            unset($data['totalResponses']);
        } elseif (\array_key_exists('totalResponses', $data) && null === $data['totalResponses']) {
            $object->setTotalResponses(null);
        }
        if (\array_key_exists('sizeFeedback', $data) && null !== $data['sizeFeedback']) {
            $values_1 = [];
            foreach ($data['sizeFeedback'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\OfferRatingSizeFeedbackItem::class, 'json', $context);
            }
            $object->setSizeFeedback($values_1);
            unset($data['sizeFeedback']);
        } elseif (\array_key_exists('sizeFeedback', $data) && null === $data['sizeFeedback']) {
            $object->setSizeFeedback(null);
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
        if ($data->isInitialized('averageScore') && null !== $data->getAverageScore()) {
            $dataArray['averageScore'] = $data->getAverageScore();
        }
        if ($data->isInitialized('scoreDistribution') && null !== $data->getScoreDistribution()) {
            $values = [];
            foreach ($data->getScoreDistribution() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['scoreDistribution'] = $values;
        }
        if ($data->isInitialized('totalResponses') && null !== $data->getTotalResponses()) {
            $dataArray['totalResponses'] = $data->getTotalResponses();
        }
        if ($data->isInitialized('sizeFeedback') && null !== $data->getSizeFeedback()) {
            $values_1 = [];
            foreach ($data->getSizeFeedback() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sizeFeedback'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\OfferRating::class => false];
    }
}
