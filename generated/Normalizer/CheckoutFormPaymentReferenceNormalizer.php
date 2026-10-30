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

class CheckoutFormPaymentReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CheckoutFormPaymentReference();
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
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('provider', $data) && null !== $data['provider']) {
            $object->setProvider($data['provider']);
            unset($data['provider']);
        } elseif (\array_key_exists('provider', $data) && null === $data['provider']) {
            $object->setProvider(null);
            unset($data['provider']);
        }
        if (\array_key_exists('finishedAt', $data) && null !== $data['finishedAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finishedAt']);
            if (false === $date) {
                if (\is_string($data['finishedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['finishedAt'])) {
                    try {
                        $date = new \DateTime($data['finishedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['finishedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['finishedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setFinishedAt($date);
            unset($data['finishedAt']);
        } elseif (\array_key_exists('finishedAt', $data) && null === $data['finishedAt']) {
            $object->setFinishedAt(null);
            unset($data['finishedAt']);
        }
        if (\array_key_exists('paidAmount', $data) && null !== $data['paidAmount']) {
            $object->setPaidAmount($this->denormalizer->denormalize($data['paidAmount'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['paidAmount']);
        } elseif (\array_key_exists('paidAmount', $data) && null === $data['paidAmount']) {
            $object->setPaidAmount(null);
            unset($data['paidAmount']);
        }
        if (\array_key_exists('reconciliation', $data) && null !== $data['reconciliation']) {
            $object->setReconciliation($this->denormalizer->denormalize($data['reconciliation'], \Em411\Allegro\Api\Model\Price::class, 'json', $context));
            unset($data['reconciliation']);
        } elseif (\array_key_exists('reconciliation', $data) && null === $data['reconciliation']) {
            $object->setReconciliation(null);
            unset($data['reconciliation']);
        }
        if (\array_key_exists('features', $data) && null !== $data['features']) {
            $values = [];
            foreach ($data['features'] as $value) {
                $values[] = $value;
            }
            $object->setFeatures($values);
            unset($data['features']);
        } elseif (\array_key_exists('features', $data) && null === $data['features']) {
            $object->setFeatures(null);
            unset($data['features']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('provider') && null !== $data->getProvider()) {
            $dataArray['provider'] = $data->getProvider();
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finishedAt'] = $data->getFinishedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('paidAmount') && null !== $data->getPaidAmount()) {
            $dataArray['paidAmount'] = null === $data->getPaidAmount() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPaidAmount(), 'json', $context));
        }
        if ($data->isInitialized('reconciliation') && null !== $data->getReconciliation()) {
            $dataArray['reconciliation'] = null === $data->getReconciliation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReconciliation(), 'json', $context));
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values = [];
            foreach ($data->getFeatures() as $value) {
                $values[] = $value;
            }
            $dataArray['features'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CheckoutFormPaymentReference::class => false];
    }
}
