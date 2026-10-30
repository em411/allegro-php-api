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

class SmartSellerClassificationReportClassificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fulfilled', $data) && \is_int($data['fulfilled'])) {
            $data['fulfilled'] = (bool) $data['fulfilled'];
        }
        if (\array_key_exists('fulfilled', $data) && null !== $data['fulfilled']) {
            $object->setFulfilled($data['fulfilled']);
            unset($data['fulfilled']);
        } elseif (\array_key_exists('fulfilled', $data) && null === $data['fulfilled']) {
            $object->setFulfilled(null);
            unset($data['fulfilled']);
        }
        if (\array_key_exists('lastChanged', $data) && null !== $data['lastChanged']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastChanged']);
            if (false === $date) {
                if (\is_string($data['lastChanged']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastChanged'])) {
                    try {
                        $date = new \DateTime($data['lastChanged']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastChanged'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastChanged'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setLastChanged($date);
            unset($data['lastChanged']);
        } elseif (\array_key_exists('lastChanged', $data) && null === $data['lastChanged']) {
            $object->setLastChanged(null);
            unset($data['lastChanged']);
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
        if ($data->isInitialized('fulfilled') && null !== $data->getFulfilled()) {
            $dataArray['fulfilled'] = $data->getFulfilled();
        }
        if ($data->isInitialized('lastChanged') && null !== $data->getLastChanged()) {
            $dataArray['lastChanged'] = $data->getLastChanged()->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SmartSellerClassificationReportClassification::class => false];
    }
}
