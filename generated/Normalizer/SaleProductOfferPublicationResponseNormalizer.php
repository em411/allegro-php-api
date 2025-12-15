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

class SaleProductOfferPublicationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse();
        if (\array_key_exists('republish', $data) && \is_int($data['republish'])) {
            $data['republish'] = (bool) $data['republish'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('startingAt', $data) && null !== $data['startingAt']) {
            $object->setStartingAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startingAt']));
            unset($data['startingAt']);
        } elseif (\array_key_exists('startingAt', $data) && null === $data['startingAt']) {
            $object->setStartingAt(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('republish', $data) && null !== $data['republish']) {
            $object->setRepublish($data['republish']);
            unset($data['republish']);
        } elseif (\array_key_exists('republish', $data) && null === $data['republish']) {
            $object->setRepublish(null);
        }
        if (\array_key_exists('endingAt', $data) && null !== $data['endingAt']) {
            $object->setEndingAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endingAt']));
            unset($data['endingAt']);
        } elseif (\array_key_exists('endingAt', $data) && null === $data['endingAt']) {
            $object->setEndingAt(null);
        }
        if (\array_key_exists('endedBy', $data) && null !== $data['endedBy']) {
            $object->setEndedBy($data['endedBy']);
            unset($data['endedBy']);
        } elseif (\array_key_exists('endedBy', $data) && null === $data['endedBy']) {
            $object->setEndedBy(null);
        }
        if (\array_key_exists('marketplaces', $data) && null !== $data['marketplaces']) {
            $object->setMarketplaces($this->denormalizer->denormalize($data['marketplaces'], \Em411\Allegro\Api\Model\SaleProductOfferPublicationMarketplacesResponse::class, 'json', $context));
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
        if ($data->isInitialized('duration') && null !== $data->getDuration()) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('startingAt') && null !== $data->getStartingAt()) {
            $dataArray['startingAt'] = $data->getStartingAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('republish') && null !== $data->getRepublish()) {
            $dataArray['republish'] = $data->getRepublish();
        }
        if ($data->isInitialized('endingAt') && null !== $data->getEndingAt()) {
            $dataArray['endingAt'] = $data->getEndingAt()->format('Y-m-d\TH:i:sP');
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
        return [\Em411\Allegro\Api\Model\SaleProductOfferPublicationResponse::class => false];
    }
}
