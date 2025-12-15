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

class StockStorageFeeDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StockStorageFeeDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StockStorageFeeDetails::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StockStorageFeeDetails();
        if (\array_key_exists('chargedItemsQuantity', $data) && \is_int($data['chargedItemsQuantity'])) {
            $data['chargedItemsQuantity'] = (float) $data['chargedItemsQuantity'];
        }
        if (\array_key_exists('amountNet', $data) && \is_int($data['amountNet'])) {
            $data['amountNet'] = (float) $data['amountNet'];
        }
        if (\array_key_exists('amountGross', $data) && \is_int($data['amountGross'])) {
            $data['amountGross'] = (float) $data['amountGross'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('chargedItemsQuantity', $data) && null !== $data['chargedItemsQuantity']) {
            $object->setChargedItemsQuantity($data['chargedItemsQuantity']);
            unset($data['chargedItemsQuantity']);
        } elseif (\array_key_exists('chargedItemsQuantity', $data) && null === $data['chargedItemsQuantity']) {
            $object->setChargedItemsQuantity(null);
        }
        if (\array_key_exists('amountNet', $data) && null !== $data['amountNet']) {
            $object->setAmountNet($data['amountNet']);
            unset($data['amountNet']);
        } elseif (\array_key_exists('amountNet', $data) && null === $data['amountNet']) {
            $object->setAmountNet(null);
        }
        if (\array_key_exists('amountGross', $data) && null !== $data['amountGross']) {
            $object->setAmountGross($data['amountGross']);
            unset($data['amountGross']);
        } elseif (\array_key_exists('amountGross', $data) && null === $data['amountGross']) {
            $object->setAmountGross(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
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
        if ($data->isInitialized('chargedItemsQuantity') && null !== $data->getChargedItemsQuantity()) {
            $dataArray['chargedItemsQuantity'] = $data->getChargedItemsQuantity();
        }
        if ($data->isInitialized('amountNet') && null !== $data->getAmountNet()) {
            $dataArray['amountNet'] = $data->getAmountNet();
        }
        if ($data->isInitialized('amountGross') && null !== $data->getAmountGross()) {
            $dataArray['amountGross'] = $data->getAmountGross();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
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
        return [\Em411\Allegro\Api\Model\StockStorageFeeDetails::class => false];
    }
}
