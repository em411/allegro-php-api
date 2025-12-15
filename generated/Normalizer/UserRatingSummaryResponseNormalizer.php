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

class UserRatingSummaryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\UserRatingSummaryResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\UserRatingSummaryResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\UserRatingSummaryResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('averageRates', $data) && null !== $data['averageRates']) {
            $object->setAverageRates($this->denormalizer->denormalize($data['averageRates'], \Em411\Allegro\Api\Model\AverageRates::class, 'json', $context));
            unset($data['averageRates']);
        } elseif (\array_key_exists('averageRates', $data) && null === $data['averageRates']) {
            $object->setAverageRates(null);
        }
        if (\array_key_exists('notRecommended', $data) && null !== $data['notRecommended']) {
            $object->setNotRecommended($this->denormalizer->denormalize($data['notRecommended'], \Em411\Allegro\Api\Model\UserRatingSummaryResponseNotRecommended::class, 'json', $context));
            unset($data['notRecommended']);
        } elseif (\array_key_exists('notRecommended', $data) && null === $data['notRecommended']) {
            $object->setNotRecommended(null);
        }
        if (\array_key_exists('recommended', $data) && null !== $data['recommended']) {
            $object->setRecommended($this->denormalizer->denormalize($data['recommended'], \Em411\Allegro\Api\Model\UserRatingSummaryResponseRecommended::class, 'json', $context));
            unset($data['recommended']);
        } elseif (\array_key_exists('recommended', $data) && null === $data['recommended']) {
            $object->setRecommended(null);
        }
        if (\array_key_exists('recommendedPercentage', $data) && null !== $data['recommendedPercentage']) {
            $object->setRecommendedPercentage($data['recommendedPercentage']);
            unset($data['recommendedPercentage']);
        } elseif (\array_key_exists('recommendedPercentage', $data) && null === $data['recommendedPercentage']) {
            $object->setRecommendedPercentage(null);
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
        if ($data->isInitialized('averageRates') && null !== $data->getAverageRates()) {
            $dataArray['averageRates'] = $this->normalizer->normalize($data->getAverageRates(), 'json', $context);
        }
        $dataArray['notRecommended'] = $this->normalizer->normalize($data->getNotRecommended(), 'json', $context);
        $dataArray['recommended'] = $this->normalizer->normalize($data->getRecommended(), 'json', $context);
        $dataArray['recommendedPercentage'] = $data->getRecommendedPercentage();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\UserRatingSummaryResponse::class => false];
    }
}
