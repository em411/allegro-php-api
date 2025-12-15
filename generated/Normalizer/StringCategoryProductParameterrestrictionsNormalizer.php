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

class StringCategoryProductParameterrestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StringCategoryProductParameterrestrictions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StringCategoryProductParameterrestrictions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StringCategoryProductParameterrestrictions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minLength', $data) && null !== $data['minLength']) {
            $object->setMinLength($data['minLength']);
            unset($data['minLength']);
        } elseif (\array_key_exists('minLength', $data) && null === $data['minLength']) {
            $object->setMinLength(null);
        }
        if (\array_key_exists('maxLength', $data) && null !== $data['maxLength']) {
            $object->setMaxLength($data['maxLength']);
            unset($data['maxLength']);
        } elseif (\array_key_exists('maxLength', $data) && null === $data['maxLength']) {
            $object->setMaxLength(null);
        }
        if (\array_key_exists('allowedNumberOfValues', $data) && null !== $data['allowedNumberOfValues']) {
            $object->setAllowedNumberOfValues($data['allowedNumberOfValues']);
            unset($data['allowedNumberOfValues']);
        } elseif (\array_key_exists('allowedNumberOfValues', $data) && null === $data['allowedNumberOfValues']) {
            $object->setAllowedNumberOfValues(null);
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
        if ($data->isInitialized('minLength') && null !== $data->getMinLength()) {
            $dataArray['minLength'] = $data->getMinLength();
        }
        if ($data->isInitialized('maxLength') && null !== $data->getMaxLength()) {
            $dataArray['maxLength'] = $data->getMaxLength();
        }
        if ($data->isInitialized('allowedNumberOfValues') && null !== $data->getAllowedNumberOfValues()) {
            $dataArray['allowedNumberOfValues'] = $data->getAllowedNumberOfValues();
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
        return [\Em411\Allegro\Api\Model\StringCategoryProductParameterrestrictions::class => false];
    }
}
