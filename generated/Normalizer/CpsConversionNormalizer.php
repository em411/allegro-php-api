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

class CpsConversionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CpsConversion::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CpsConversion::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CpsConversion();
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
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
        }
        if (\array_key_exists('lastModifiedAt', $data) && null !== $data['lastModifiedAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastModifiedAt']);
            if (false === $date) {
                if (\is_string($data['lastModifiedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastModifiedAt'])) {
                    try {
                        $date = new \DateTime($data['lastModifiedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastModifiedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastModifiedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setLastModifiedAt($date);
            unset($data['lastModifiedAt']);
        } elseif (\array_key_exists('lastModifiedAt', $data) && null === $data['lastModifiedAt']) {
            $object->setLastModifiedAt(null);
            unset($data['lastModifiedAt']);
        }
        if (\array_key_exists('orderCreatedAt', $data) && null !== $data['orderCreatedAt']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['orderCreatedAt']);
            if (false === $date_1) {
                if (\is_string($data['orderCreatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['orderCreatedAt'])) {
                    try {
                        $date_1 = new \DateTime($data['orderCreatedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['orderCreatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['orderCreatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setOrderCreatedAt($date_1);
            unset($data['orderCreatedAt']);
        } elseif (\array_key_exists('orderCreatedAt', $data) && null === $data['orderCreatedAt']) {
            $object->setOrderCreatedAt(null);
            unset($data['orderCreatedAt']);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
            unset($data['quantity']);
        }
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\CpsConversionMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
            unset($data['marketplace']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\CpsConversionOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('commission', $data) && null !== $data['commission']) {
            $object->setCommission($this->denormalizer->denormalize($data['commission'], \Em411\Allegro\Api\Model\CpsConversionCommission::class, 'json', $context));
            unset($data['commission']);
        } elseif (\array_key_exists('commission', $data) && null === $data['commission']) {
            $object->setCommission(null);
            unset($data['commission']);
        }
        if (\array_key_exists('publisherUrlParameters', $data) && null !== $data['publisherUrlParameters']) {
            $values = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data['publisherUrlParameters'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPublisherUrlParameters($values);
            unset($data['publisherUrlParameters']);
        } elseif (\array_key_exists('publisherUrlParameters', $data) && null === $data['publisherUrlParameters']) {
            $object->setPublisherUrlParameters(null);
            unset($data['publisherUrlParameters']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('lastModifiedAt') && null !== $data->getLastModifiedAt()) {
            $dataArray['lastModifiedAt'] = $data->getLastModifiedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('orderCreatedAt') && null !== $data->getOrderCreatedAt()) {
            $dataArray['orderCreatedAt'] = $data->getOrderCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = null === $data->getMarketplace() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMarketplace(), 'json', $context));
        }
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        }
        if ($data->isInitialized('commission') && null !== $data->getCommission()) {
            $dataArray['commission'] = null === $data->getCommission() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCommission(), 'json', $context));
        }
        if ($data->isInitialized('publisherUrlParameters') && null !== $data->getPublisherUrlParameters()) {
            $values = new \Em411\Allegro\Api\Runtime\JsonObject();
            foreach ($data->getPublisherUrlParameters() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['publisherUrlParameters'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CpsConversion::class => false];
    }
}
