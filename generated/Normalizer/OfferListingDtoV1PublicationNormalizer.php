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

class OfferListingDtoV1PublicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferListingDtoV1Publication::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferListingDtoV1Publication::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferListingDtoV1Publication();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('startingAt', $data) && null !== $data['startingAt']) {
            $object->setStartingAt($data['startingAt']);
            unset($data['startingAt']);
        } elseif (\array_key_exists('startingAt', $data) && null === $data['startingAt']) {
            $object->setStartingAt(null);
        }
        if (\array_key_exists('startedAt', $data) && null !== $data['startedAt']) {
            $object->setStartedAt($data['startedAt']);
            unset($data['startedAt']);
        } elseif (\array_key_exists('startedAt', $data) && null === $data['startedAt']) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('endingAt', $data) && null !== $data['endingAt']) {
            $object->setEndingAt($data['endingAt']);
            unset($data['endingAt']);
        } elseif (\array_key_exists('endingAt', $data) && null === $data['endingAt']) {
            $object->setEndingAt(null);
        }
        if (\array_key_exists('endedAt', $data) && null !== $data['endedAt']) {
            $object->setEndedAt($data['endedAt']);
            unset($data['endedAt']);
        } elseif (\array_key_exists('endedAt', $data) && null === $data['endedAt']) {
            $object->setEndedAt(null);
        }
        if (\array_key_exists('marketplaces', $data) && null !== $data['marketplaces']) {
            $object->setMarketplaces($this->denormalizer->denormalize($data['marketplaces'], \Em411\Allegro\Api\Model\OfferListingDtoV1PublicationMarketplaces::class, 'json', $context));
            unset($data['marketplaces']);
        } elseif (\array_key_exists('marketplaces', $data) && null === $data['marketplaces']) {
            $object->setMarketplaces(null);
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
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('startingAt') && null !== $data->getStartingAt()) {
            $dataArray['startingAt'] = $data->getStartingAt();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['startedAt'] = $data->getStartedAt();
        }
        if ($data->isInitialized('endingAt') && null !== $data->getEndingAt()) {
            $dataArray['endingAt'] = $data->getEndingAt();
        }
        if ($data->isInitialized('endedAt') && null !== $data->getEndedAt()) {
            $dataArray['endedAt'] = $data->getEndedAt();
        }
        if ($data->isInitialized('marketplaces') && null !== $data->getMarketplaces()) {
            $dataArray['marketplaces'] = $this->normalizer->normalize($data->getMarketplaces(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\OfferListingDtoV1Publication::class => false];
    }
}
