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

class OfferPromoOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferPromoOption::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferPromoOption::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\OfferPromoOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('validFrom', $data) && null !== $data['validFrom']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['validFrom']);
            if (false === $date) {
                if (\is_string($data['validFrom']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['validFrom'])) {
                    try {
                        $date = new \DateTime($data['validFrom']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['validFrom'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['validFrom'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setValidFrom($date);
            unset($data['validFrom']);
        } elseif (\array_key_exists('validFrom', $data) && null === $data['validFrom']) {
            $object->setValidFrom(null);
            unset($data['validFrom']);
        }
        if (\array_key_exists('validTo', $data) && null !== $data['validTo']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['validTo']);
            if (false === $date_1) {
                if (\is_string($data['validTo']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['validTo'])) {
                    try {
                        $date_1 = new \DateTime($data['validTo']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['validTo'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['validTo'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setValidTo($date_1);
            unset($data['validTo']);
        } elseif (\array_key_exists('validTo', $data) && null === $data['validTo']) {
            $object->setValidTo(null);
            unset($data['validTo']);
        }
        if (\array_key_exists('nextCycleDate', $data) && null !== $data['nextCycleDate']) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['nextCycleDate']);
            if (false === $date_2) {
                if (\is_string($data['nextCycleDate']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['nextCycleDate'])) {
                    try {
                        $date_2 = new \DateTime($data['nextCycleDate']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['nextCycleDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['nextCycleDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setNextCycleDate($date_2);
            unset($data['nextCycleDate']);
        } elseif (\array_key_exists('nextCycleDate', $data) && null === $data['nextCycleDate']) {
            $object->setNextCycleDate(null);
            unset($data['nextCycleDate']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('validFrom') && null !== $data->getValidFrom()) {
            $dataArray['validFrom'] = $data->getValidFrom()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('validTo') && null !== $data->getValidTo()) {
            $dataArray['validTo'] = $data->getValidTo()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('nextCycleDate') && null !== $data->getNextCycleDate()) {
            $dataArray['nextCycleDate'] = $data->getNextCycleDate()->format('Y-m-d\TH:i:sP');
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
        return [\Em411\Allegro\Api\Model\OfferPromoOption::class => false];
    }
}
