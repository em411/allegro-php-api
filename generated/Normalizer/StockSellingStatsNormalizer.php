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

class StockSellingStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StockSellingStats::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StockSellingStats::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StockSellingStats();
        if (\array_key_exists('lastWeekAverage', $data) && \is_int($data['lastWeekAverage'])) {
            $data['lastWeekAverage'] = (float) $data['lastWeekAverage'];
        }
        if (\array_key_exists('lastFourteenDaysAverage', $data) && \is_int($data['lastFourteenDaysAverage'])) {
            $data['lastFourteenDaysAverage'] = (float) $data['lastFourteenDaysAverage'];
        }
        if (\array_key_exists('lastThirtyDaysSum', $data) && \is_int($data['lastThirtyDaysSum'])) {
            $data['lastThirtyDaysSum'] = (float) $data['lastThirtyDaysSum'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lastWeekAverage', $data) && null !== $data['lastWeekAverage']) {
            $object->setLastWeekAverage($data['lastWeekAverage']);
            unset($data['lastWeekAverage']);
        } elseif (\array_key_exists('lastWeekAverage', $data) && null === $data['lastWeekAverage']) {
            $object->setLastWeekAverage(null);
        }
        if (\array_key_exists('lastFourteenDaysAverage', $data) && null !== $data['lastFourteenDaysAverage']) {
            $object->setLastFourteenDaysAverage($data['lastFourteenDaysAverage']);
            unset($data['lastFourteenDaysAverage']);
        } elseif (\array_key_exists('lastFourteenDaysAverage', $data) && null === $data['lastFourteenDaysAverage']) {
            $object->setLastFourteenDaysAverage(null);
        }
        if (\array_key_exists('lastThirtyDaysSum', $data) && null !== $data['lastThirtyDaysSum']) {
            $object->setLastThirtyDaysSum($data['lastThirtyDaysSum']);
            unset($data['lastThirtyDaysSum']);
        } elseif (\array_key_exists('lastThirtyDaysSum', $data) && null === $data['lastThirtyDaysSum']) {
            $object->setLastThirtyDaysSum(null);
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
        if ($data->isInitialized('lastWeekAverage') && null !== $data->getLastWeekAverage()) {
            $dataArray['lastWeekAverage'] = $data->getLastWeekAverage();
        }
        if ($data->isInitialized('lastFourteenDaysAverage') && null !== $data->getLastFourteenDaysAverage()) {
            $dataArray['lastFourteenDaysAverage'] = $data->getLastFourteenDaysAverage();
        }
        if ($data->isInitialized('lastThirtyDaysSum') && null !== $data->getLastThirtyDaysSum()) {
            $dataArray['lastThirtyDaysSum'] = $data->getLastThirtyDaysSum();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\StockSellingStats::class => false];
    }
}
