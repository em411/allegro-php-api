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

class MyBidResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\MyBidResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\MyBidResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\MyBidResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('minimalPriceMet', $data) && \is_int($data['minimalPriceMet'])) {
            $data['minimalPriceMet'] = (bool) $data['minimalPriceMet'];
        }
        if (\array_key_exists('highBidder', $data) && \is_int($data['highBidder'])) {
            $data['highBidder'] = (bool) $data['highBidder'];
        }
        if (\array_key_exists('maxAmount', $data) && null !== $data['maxAmount']) {
            $object->setMaxAmount($this->denormalizer->denormalize($data['maxAmount'], \Em411\Allegro\Api\Model\MaxPrice::class, 'json', $context));
            unset($data['maxAmount']);
        } elseif (\array_key_exists('maxAmount', $data) && null === $data['maxAmount']) {
            $object->setMaxAmount(null);
            unset($data['maxAmount']);
        }
        if (\array_key_exists('minimalPriceMet', $data) && null !== $data['minimalPriceMet']) {
            $object->setMinimalPriceMet($data['minimalPriceMet']);
            unset($data['minimalPriceMet']);
        } elseif (\array_key_exists('minimalPriceMet', $data) && null === $data['minimalPriceMet']) {
            $object->setMinimalPriceMet(null);
            unset($data['minimalPriceMet']);
        }
        if (\array_key_exists('highBidder', $data) && null !== $data['highBidder']) {
            $object->setHighBidder($data['highBidder']);
            unset($data['highBidder']);
        } elseif (\array_key_exists('highBidder', $data) && null === $data['highBidder']) {
            $object->setHighBidder(null);
            unset($data['highBidder']);
        }
        if (\array_key_exists('auction', $data) && null !== $data['auction']) {
            $object->setAuction($this->denormalizer->denormalize($data['auction'], \Em411\Allegro\Api\Model\MyBidResponseAuction::class, 'json', $context));
            unset($data['auction']);
        } elseif (\array_key_exists('auction', $data) && null === $data['auction']) {
            $object->setAuction(null);
            unset($data['auction']);
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
        $dataArray['maxAmount'] = null === $data->getMaxAmount() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMaxAmount(), 'json', $context));
        if ($data->isInitialized('minimalPriceMet') && null !== $data->getMinimalPriceMet()) {
            $dataArray['minimalPriceMet'] = $data->getMinimalPriceMet();
        }
        $dataArray['highBidder'] = $data->getHighBidder();
        $dataArray['auction'] = null === $data->getAuction() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAuction(), 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\MyBidResponse::class => false];
    }
}
