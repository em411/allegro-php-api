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

class AllegroParcelTrackingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AllegroParcelTrackingStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AllegroParcelTrackingStatus::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\AllegroParcelTrackingStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('terminal', $data) && \is_int($data['terminal'])) {
            $data['terminal'] = (bool) $data['terminal'];
        }
        if (\array_key_exists('occurredAt', $data) && null !== $data['occurredAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']);
            if (false === $date) {
                if (\is_string($data['occurredAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['occurredAt'])) {
                    try {
                        $date = new \DateTime($data['occurredAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['occurredAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['occurredAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setOccurredAt($date);
            unset($data['occurredAt']);
        } elseif (\array_key_exists('occurredAt', $data) && null === $data['occurredAt']) {
            $object->setOccurredAt(null);
            unset($data['occurredAt']);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
            unset($data['code']);
        }
        if (\array_key_exists('details', $data) && null !== $data['details']) {
            $object->setDetails($data['details']);
            unset($data['details']);
        } elseif (\array_key_exists('details', $data) && null === $data['details']) {
            $object->setDetails(null);
            unset($data['details']);
        }
        if (\array_key_exists('terminal', $data) && null !== $data['terminal']) {
            $object->setTerminal($data['terminal']);
            unset($data['terminal']);
        } elseif (\array_key_exists('terminal', $data) && null === $data['terminal']) {
            $object->setTerminal(null);
            unset($data['terminal']);
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
        $dataArray['occurredAt'] = $data->getOccurredAt()->format('Y-m-d\TH:i:sP');
        $dataArray['code'] = $data->getCode();
        if ($data->isInitialized('details') && null !== $data->getDetails()) {
            $dataArray['details'] = $data->getDetails();
        }
        if ($data->isInitialized('terminal') && null !== $data->getTerminal()) {
            $dataArray['terminal'] = $data->getTerminal();
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
        return [\Em411\Allegro\Api\Model\AllegroParcelTrackingStatus::class => false];
    }
}
