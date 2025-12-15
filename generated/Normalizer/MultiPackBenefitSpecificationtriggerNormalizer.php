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

class MultiPackBenefitSpecificationtriggerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\MultiPackBenefitSpecificationtrigger::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\MultiPackBenefitSpecificationtrigger::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\MultiPackBenefitSpecificationtrigger();
        if (\array_key_exists('forEachQuantity', $data) && \is_int($data['forEachQuantity'])) {
            $data['forEachQuantity'] = (float) $data['forEachQuantity'];
        }
        if (\array_key_exists('discountedNumber', $data) && \is_int($data['discountedNumber'])) {
            $data['discountedNumber'] = (float) $data['discountedNumber'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('forEachQuantity', $data) && null !== $data['forEachQuantity']) {
            $object->setForEachQuantity($data['forEachQuantity']);
            unset($data['forEachQuantity']);
        } elseif (\array_key_exists('forEachQuantity', $data) && null === $data['forEachQuantity']) {
            $object->setForEachQuantity(null);
        }
        if (\array_key_exists('discountedNumber', $data) && null !== $data['discountedNumber']) {
            $object->setDiscountedNumber($data['discountedNumber']);
            unset($data['discountedNumber']);
        } elseif (\array_key_exists('discountedNumber', $data) && null === $data['discountedNumber']) {
            $object->setDiscountedNumber(null);
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
        $dataArray['forEachQuantity'] = $data->getForEachQuantity();
        $dataArray['discountedNumber'] = $data->getDiscountedNumber();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\MultiPackBenefitSpecificationtrigger::class => false];
    }
}
