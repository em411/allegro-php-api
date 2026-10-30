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

class CheckoutFormDeliveryTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormDeliveryTime::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormDeliveryTime::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CheckoutFormDeliveryTime();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('from', $data) && null !== $data['from']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['from']);
            if (false === $date) {
                if (\is_string($data['from']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['from'])) {
                    try {
                        $date = new \DateTime($data['from']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['from'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['from'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setFrom($date);
            unset($data['from']);
        } elseif (\array_key_exists('from', $data) && null === $data['from']) {
            $object->setFrom(null);
            unset($data['from']);
        }
        if (\array_key_exists('to', $data) && null !== $data['to']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['to']);
            if (false === $date_1) {
                if (\is_string($data['to']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['to'])) {
                    try {
                        $date_1 = new \DateTime($data['to']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['to'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['to'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setTo($date_1);
            unset($data['to']);
        } elseif (\array_key_exists('to', $data) && null === $data['to']) {
            $object->setTo(null);
            unset($data['to']);
        }
        if (\array_key_exists('guaranteed', $data) && null !== $data['guaranteed']) {
            $object->setGuaranteed($this->denormalizer->denormalize($data['guaranteed'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryTimeGuaranteed::class, 'json', $context));
            unset($data['guaranteed']);
        } elseif (\array_key_exists('guaranteed', $data) && null === $data['guaranteed']) {
            $object->setGuaranteed(null);
            unset($data['guaranteed']);
        }
        if (\array_key_exists('dispatch', $data) && null !== $data['dispatch']) {
            $object->setDispatch($this->denormalizer->denormalize($data['dispatch'], \Em411\Allegro\Api\Model\CheckoutFormDeliveryTimeDispatch::class, 'json', $context));
            unset($data['dispatch']);
        } elseif (\array_key_exists('dispatch', $data) && null === $data['dispatch']) {
            $object->setDispatch(null);
            unset($data['dispatch']);
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
        if ($data->isInitialized('from') && null !== $data->getFrom()) {
            $dataArray['from'] = $data->getFrom()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('to') && null !== $data->getTo()) {
            $dataArray['to'] = $data->getTo()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('guaranteed') && null !== $data->getGuaranteed()) {
            $dataArray['guaranteed'] = null === $data->getGuaranteed() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getGuaranteed(), 'json', $context));
        }
        if ($data->isInitialized('dispatch') && null !== $data->getDispatch()) {
            $dataArray['dispatch'] = null === $data->getDispatch() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDispatch(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\CheckoutFormDeliveryTime::class => false];
    }
}
