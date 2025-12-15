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

class CategoryParameterOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryParameterOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryParameterOptions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CategoryParameterOptions();
        if (\array_key_exists('variantsAllowed', $data) && \is_int($data['variantsAllowed'])) {
            $data['variantsAllowed'] = (bool) $data['variantsAllowed'];
        }
        if (\array_key_exists('variantsEqual', $data) && \is_int($data['variantsEqual'])) {
            $data['variantsEqual'] = (bool) $data['variantsEqual'];
        }
        if (\array_key_exists('describesProduct', $data) && \is_int($data['describesProduct'])) {
            $data['describesProduct'] = (bool) $data['describesProduct'];
        }
        if (\array_key_exists('customValuesEnabled', $data) && \is_int($data['customValuesEnabled'])) {
            $data['customValuesEnabled'] = (bool) $data['customValuesEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variantsAllowed', $data) && null !== $data['variantsAllowed']) {
            $object->setVariantsAllowed($data['variantsAllowed']);
            unset($data['variantsAllowed']);
        } elseif (\array_key_exists('variantsAllowed', $data) && null === $data['variantsAllowed']) {
            $object->setVariantsAllowed(null);
        }
        if (\array_key_exists('variantsEqual', $data) && null !== $data['variantsEqual']) {
            $object->setVariantsEqual($data['variantsEqual']);
            unset($data['variantsEqual']);
        } elseif (\array_key_exists('variantsEqual', $data) && null === $data['variantsEqual']) {
            $object->setVariantsEqual(null);
        }
        if (\array_key_exists('ambiguousValueId', $data) && null !== $data['ambiguousValueId']) {
            $object->setAmbiguousValueId($data['ambiguousValueId']);
            unset($data['ambiguousValueId']);
        } elseif (\array_key_exists('ambiguousValueId', $data) && null === $data['ambiguousValueId']) {
            $object->setAmbiguousValueId(null);
        }
        if (\array_key_exists('dependsOnParameterId', $data) && null !== $data['dependsOnParameterId']) {
            $object->setDependsOnParameterId($data['dependsOnParameterId']);
            unset($data['dependsOnParameterId']);
        } elseif (\array_key_exists('dependsOnParameterId', $data) && null === $data['dependsOnParameterId']) {
            $object->setDependsOnParameterId(null);
        }
        if (\array_key_exists('describesProduct', $data) && null !== $data['describesProduct']) {
            $object->setDescribesProduct($data['describesProduct']);
            unset($data['describesProduct']);
        } elseif (\array_key_exists('describesProduct', $data) && null === $data['describesProduct']) {
            $object->setDescribesProduct(null);
        }
        if (\array_key_exists('customValuesEnabled', $data) && null !== $data['customValuesEnabled']) {
            $object->setCustomValuesEnabled($data['customValuesEnabled']);
            unset($data['customValuesEnabled']);
        } elseif (\array_key_exists('customValuesEnabled', $data) && null === $data['customValuesEnabled']) {
            $object->setCustomValuesEnabled(null);
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
        if ($data->isInitialized('variantsAllowed') && null !== $data->getVariantsAllowed()) {
            $dataArray['variantsAllowed'] = $data->getVariantsAllowed();
        }
        if ($data->isInitialized('variantsEqual') && null !== $data->getVariantsEqual()) {
            $dataArray['variantsEqual'] = $data->getVariantsEqual();
        }
        if ($data->isInitialized('ambiguousValueId')) {
            $dataArray['ambiguousValueId'] = $data->getAmbiguousValueId();
        }
        if ($data->isInitialized('dependsOnParameterId')) {
            $dataArray['dependsOnParameterId'] = $data->getDependsOnParameterId();
        }
        if ($data->isInitialized('describesProduct') && null !== $data->getDescribesProduct()) {
            $dataArray['describesProduct'] = $data->getDescribesProduct();
        }
        if ($data->isInitialized('customValuesEnabled') && null !== $data->getCustomValuesEnabled()) {
            $dataArray['customValuesEnabled'] = $data->getCustomValuesEnabled();
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
        return [\Em411\Allegro\Api\Model\CategoryParameterOptions::class => false];
    }
}
