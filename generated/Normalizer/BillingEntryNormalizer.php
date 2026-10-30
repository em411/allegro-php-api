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

class BillingEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\BillingEntry::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\BillingEntry::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\BillingEntry();
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
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Em411\Allegro\Api\Model\BillingEntryType::class, 'json', $context));
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('asset', $data) && null !== $data['asset']) {
            $object->setAsset($data['asset']);
            unset($data['asset']);
        } elseif (\array_key_exists('asset', $data) && null === $data['asset']) {
            $object->setAsset(null);
            unset($data['asset']);
        }
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\BillingEntryOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->setValue($this->denormalizer->denormalize($data['value'], \Em411\Allegro\Api\Model\BillingEntryValue::class, 'json', $context));
            unset($data['value']);
        } elseif (\array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
            unset($data['value']);
        }
        if (\array_key_exists('tax', $data) && null !== $data['tax']) {
            $object->setTax($this->denormalizer->denormalize($data['tax'], \Em411\Allegro\Api\Model\BillingEntryTax::class, 'json', $context));
            unset($data['tax']);
        } elseif (\array_key_exists('tax', $data) && null === $data['tax']) {
            $object->setTax(null);
            unset($data['tax']);
        }
        if (\array_key_exists('balance', $data) && null !== $data['balance']) {
            $object->setBalance($this->denormalizer->denormalize($data['balance'], \Em411\Allegro\Api\Model\BillingEntryBalance::class, 'json', $context));
            unset($data['balance']);
        } elseif (\array_key_exists('balance', $data) && null === $data['balance']) {
            $object->setBalance(null);
            unset($data['balance']);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Em411\Allegro\Api\Model\BillingEntryOrder::class, 'json', $context));
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
            unset($data['order']);
        }
        if (\array_key_exists('additionalInfo', $data) && null !== $data['additionalInfo']) {
            $values = [];
            foreach ($data['additionalInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\BillingEntryAdditionalInfoItem::class, 'json', $context);
            }
            $object->setAdditionalInfo($values);
            unset($data['additionalInfo']);
        } elseif (\array_key_exists('additionalInfo', $data) && null === $data['additionalInfo']) {
            $object->setAdditionalInfo(null);
            unset($data['additionalInfo']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('occurredAt') && null !== $data->getOccurredAt()) {
            $dataArray['occurredAt'] = $data->getOccurredAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = null === $data->getType() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getType(), 'json', $context));
        }
        if ($data->isInitialized('asset') && null !== $data->getAsset()) {
            $dataArray['asset'] = $data->getAsset();
        }
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        }
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $dataArray['value'] = null === $data->getValue() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getValue(), 'json', $context));
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = null === $data->getTax() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getTax(), 'json', $context));
        }
        if ($data->isInitialized('balance') && null !== $data->getBalance()) {
            $dataArray['balance'] = null === $data->getBalance() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBalance(), 'json', $context));
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = null === $data->getOrder() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOrder(), 'json', $context));
        }
        if ($data->isInitialized('additionalInfo') && null !== $data->getAdditionalInfo()) {
            $values = [];
            foreach ($data->getAdditionalInfo() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['additionalInfo'] = $values;
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
        return [\Em411\Allegro\Api\Model\BillingEntry::class => false];
    }
}
