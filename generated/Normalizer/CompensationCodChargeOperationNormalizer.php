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

class CompensationCodChargeOperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CompensationCodChargeOperation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CompensationCodChargeOperation::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CompensationCodChargeOperation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('group', $data) && null !== $data['group']) {
            $object->setGroup($data['group']);
            unset($data['group']);
        } elseif (\array_key_exists('group', $data) && null === $data['group']) {
            $object->setGroup(null);
            unset($data['group']);
        }
        if (\array_key_exists('wallet', $data) && null !== $data['wallet']) {
            $object->setWallet($this->denormalizer->denormalize($data['wallet'], \Em411\Allegro\Api\Model\Wallet::class, 'json', $context));
            unset($data['wallet']);
        } elseif (\array_key_exists('wallet', $data) && null === $data['wallet']) {
            $object->setWallet(null);
            unset($data['wallet']);
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->setValue($this->denormalizer->denormalize($data['value'], \Em411\Allegro\Api\Model\OperationValue::class, 'json', $context));
            unset($data['value']);
        } elseif (\array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
            unset($data['value']);
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
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('payment', $data) && null !== $data['payment']) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Em411\Allegro\Api\Model\OperationPayment::class, 'json', $context));
            unset($data['payment']);
        } elseif (\array_key_exists('payment', $data) && null === $data['payment']) {
            $object->setPayment(null);
            unset($data['payment']);
        }
        if (\array_key_exists('deduction', $data) && null !== $data['deduction']) {
            $object->setDeduction($this->denormalizer->denormalize($data['deduction'], \Em411\Allegro\Api\Model\Deduction::class, 'json', $context));
            unset($data['deduction']);
        } elseif (\array_key_exists('deduction', $data) && null === $data['deduction']) {
            $object->setDeduction(null);
            unset($data['deduction']);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        $dataArray['group'] = $data->getGroup();
        $dataArray['wallet'] = null === $data->getWallet() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getWallet(), 'json', $context));
        $dataArray['value'] = null === $data->getValue() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getValue(), 'json', $context));
        $dataArray['occurredAt'] = $data->getOccurredAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = null === $data->getPayment() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPayment(), 'json', $context));
        }
        if ($data->isInitialized('deduction') && null !== $data->getDeduction()) {
            $dataArray['deduction'] = null === $data->getDeduction() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDeduction(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\CompensationCodChargeOperation::class => false];
    }
}
