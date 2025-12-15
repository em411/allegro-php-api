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

class ReturnPolicyOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ReturnPolicyOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ReturnPolicyOptions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ReturnPolicyOptions();
        if (\array_key_exists('cashOnDeliveryNotAllowed', $data) && \is_int($data['cashOnDeliveryNotAllowed'])) {
            $data['cashOnDeliveryNotAllowed'] = (bool) $data['cashOnDeliveryNotAllowed'];
        }
        if (\array_key_exists('freeAccessoriesReturnRequired', $data) && \is_int($data['freeAccessoriesReturnRequired'])) {
            $data['freeAccessoriesReturnRequired'] = (bool) $data['freeAccessoriesReturnRequired'];
        }
        if (\array_key_exists('refundLoweredByReceivedDiscount', $data) && \is_int($data['refundLoweredByReceivedDiscount'])) {
            $data['refundLoweredByReceivedDiscount'] = (bool) $data['refundLoweredByReceivedDiscount'];
        }
        if (\array_key_exists('businessReturnAllowed', $data) && \is_int($data['businessReturnAllowed'])) {
            $data['businessReturnAllowed'] = (bool) $data['businessReturnAllowed'];
        }
        if (\array_key_exists('collectBySellerOnly', $data) && \is_int($data['collectBySellerOnly'])) {
            $data['collectBySellerOnly'] = (bool) $data['collectBySellerOnly'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cashOnDeliveryNotAllowed', $data) && null !== $data['cashOnDeliveryNotAllowed']) {
            $object->setCashOnDeliveryNotAllowed($data['cashOnDeliveryNotAllowed']);
            unset($data['cashOnDeliveryNotAllowed']);
        } elseif (\array_key_exists('cashOnDeliveryNotAllowed', $data) && null === $data['cashOnDeliveryNotAllowed']) {
            $object->setCashOnDeliveryNotAllowed(null);
        }
        if (\array_key_exists('freeAccessoriesReturnRequired', $data) && null !== $data['freeAccessoriesReturnRequired']) {
            $object->setFreeAccessoriesReturnRequired($data['freeAccessoriesReturnRequired']);
            unset($data['freeAccessoriesReturnRequired']);
        } elseif (\array_key_exists('freeAccessoriesReturnRequired', $data) && null === $data['freeAccessoriesReturnRequired']) {
            $object->setFreeAccessoriesReturnRequired(null);
        }
        if (\array_key_exists('refundLoweredByReceivedDiscount', $data) && null !== $data['refundLoweredByReceivedDiscount']) {
            $object->setRefundLoweredByReceivedDiscount($data['refundLoweredByReceivedDiscount']);
            unset($data['refundLoweredByReceivedDiscount']);
        } elseif (\array_key_exists('refundLoweredByReceivedDiscount', $data) && null === $data['refundLoweredByReceivedDiscount']) {
            $object->setRefundLoweredByReceivedDiscount(null);
        }
        if (\array_key_exists('businessReturnAllowed', $data) && null !== $data['businessReturnAllowed']) {
            $object->setBusinessReturnAllowed($data['businessReturnAllowed']);
            unset($data['businessReturnAllowed']);
        } elseif (\array_key_exists('businessReturnAllowed', $data) && null === $data['businessReturnAllowed']) {
            $object->setBusinessReturnAllowed(null);
        }
        if (\array_key_exists('collectBySellerOnly', $data) && null !== $data['collectBySellerOnly']) {
            $object->setCollectBySellerOnly($data['collectBySellerOnly']);
            unset($data['collectBySellerOnly']);
        } elseif (\array_key_exists('collectBySellerOnly', $data) && null === $data['collectBySellerOnly']) {
            $object->setCollectBySellerOnly(null);
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
        $dataArray['cashOnDeliveryNotAllowed'] = $data->getCashOnDeliveryNotAllowed();
        $dataArray['freeAccessoriesReturnRequired'] = $data->getFreeAccessoriesReturnRequired();
        $dataArray['refundLoweredByReceivedDiscount'] = $data->getRefundLoweredByReceivedDiscount();
        $dataArray['businessReturnAllowed'] = $data->getBusinessReturnAllowed();
        $dataArray['collectBySellerOnly'] = $data->getCollectBySellerOnly();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ReturnPolicyOptions::class => false];
    }
}
