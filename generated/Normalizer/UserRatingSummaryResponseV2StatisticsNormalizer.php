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

class UserRatingSummaryResponseV2StatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Statistics::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Statistics::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Statistics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('received', $data) && null !== $data['received']) {
            $object->setReceived($this->denormalizer->denormalize($data['received'], \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsReceived::class, 'json', $context));
            unset($data['received']);
        } elseif (\array_key_exists('received', $data) && null === $data['received']) {
            $object->setReceived(null);
        }
        if (\array_key_exists('excluded', $data) && null !== $data['excluded']) {
            $object->setExcluded($this->denormalizer->denormalize($data['excluded'], \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsExcluded::class, 'json', $context));
            unset($data['excluded']);
        } elseif (\array_key_exists('excluded', $data) && null === $data['excluded']) {
            $object->setExcluded(null);
        }
        if (\array_key_exists('removed', $data) && null !== $data['removed']) {
            $object->setRemoved($this->denormalizer->denormalize($data['removed'], \Em411\Allegro\Api\Model\UserRatingSummaryResponseV2StatisticsRemoved::class, 'json', $context));
            unset($data['removed']);
        } elseif (\array_key_exists('removed', $data) && null === $data['removed']) {
            $object->setRemoved(null);
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
        $dataArray['received'] = $this->normalizer->normalize($data->getReceived(), 'json', $context);
        $dataArray['excluded'] = $this->normalizer->normalize($data->getExcluded(), 'json', $context);
        $dataArray['removed'] = $this->normalizer->normalize($data->getRemoved(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\UserRatingSummaryResponseV2Statistics::class => false];
    }
}
