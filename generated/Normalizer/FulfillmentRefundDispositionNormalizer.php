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

class FulfillmentRefundDispositionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\FulfillmentRefundDisposition::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\FulfillmentRefundDisposition::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\FulfillmentRefundDisposition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('refund', $data) && null !== $data['refund']) {
            $object->setRefund($this->denormalizer->denormalize($data['refund'], \Em411\Allegro\Api\Model\FulfillmentRefundDispositionRefund::class, 'json', $context));
            unset($data['refund']);
        } elseif (\array_key_exists('refund', $data) && null === $data['refund']) {
            $object->setRefund(null);
        }
        if (\array_key_exists('stockStatus', $data) && null !== $data['stockStatus']) {
            $object->setStockStatus($data['stockStatus']);
            unset($data['stockStatus']);
        } elseif (\array_key_exists('stockStatus', $data) && null === $data['stockStatus']) {
            $object->setStockStatus(null);
        }
        if (\array_key_exists('verificationStatus', $data) && null !== $data['verificationStatus']) {
            $object->setVerificationStatus($data['verificationStatus']);
            unset($data['verificationStatus']);
        } elseif (\array_key_exists('verificationStatus', $data) && null === $data['verificationStatus']) {
            $object->setVerificationStatus(null);
        }
        if (\array_key_exists('accountableForNonSellability', $data) && null !== $data['accountableForNonSellability']) {
            $object->setAccountableForNonSellability($data['accountableForNonSellability']);
            unset($data['accountableForNonSellability']);
        } elseif (\array_key_exists('accountableForNonSellability', $data) && null === $data['accountableForNonSellability']) {
            $object->setAccountableForNonSellability(null);
        }
        if (\array_key_exists('orderId', $data) && null !== $data['orderId']) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        } elseif (\array_key_exists('orderId', $data) && null === $data['orderId']) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('offerId', $data) && null !== $data['offerId']) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
        } elseif (\array_key_exists('offerId', $data) && null === $data['offerId']) {
            $object->setOfferId(null);
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\FulfillmentRefundDispositionProduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\FulfillmentRefundDispositionBuyer::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
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
        if ($data->isInitialized('refund') && null !== $data->getRefund()) {
            $dataArray['refund'] = $this->normalizer->normalize($data->getRefund(), 'json', $context);
        }
        if ($data->isInitialized('stockStatus') && null !== $data->getStockStatus()) {
            $dataArray['stockStatus'] = $data->getStockStatus();
        }
        if ($data->isInitialized('verificationStatus')) {
            $dataArray['verificationStatus'] = $data->getVerificationStatus();
        }
        if ($data->isInitialized('accountableForNonSellability') && null !== $data->getAccountableForNonSellability()) {
            $dataArray['accountableForNonSellability'] = $data->getAccountableForNonSellability();
        }
        if ($data->isInitialized('orderId') && null !== $data->getOrderId()) {
            $dataArray['orderId'] = $data->getOrderId();
        }
        if ($data->isInitialized('offerId') && null !== $data->getOfferId()) {
            $dataArray['offerId'] = $data->getOfferId();
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('buyer') && null !== $data->getBuyer()) {
            $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
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
        return [\Em411\Allegro\Api\Model\FulfillmentRefundDisposition::class => false];
    }
}
