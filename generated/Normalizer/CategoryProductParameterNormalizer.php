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

class CategoryProductParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryProductParameter::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryProductParameter::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CategoryProductParameter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data) && 'integer' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\IntegerCategoryProductParameter', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'float' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\FloatCategoryProductParameter', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'string' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\StringCategoryProductParameter', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'dictionary' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\DictionaryCategoryProductParameter', $format, $context);
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
            unset($data['name']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('required', $data) && null !== $data['required']) {
            $object->setRequired($data['required']);
            unset($data['required']);
        } elseif (\array_key_exists('required', $data) && null === $data['required']) {
            $object->setRequired(null);
            unset($data['required']);
        }
        if (\array_key_exists('requiredIf', $data) && null !== $data['requiredIf']) {
            $object->setRequiredIf($this->denormalizer->denormalize($data['requiredIf'], \Em411\Allegro\Api\Model\CategoryParameterRequirementConditions::class, 'json', $context));
            unset($data['requiredIf']);
        } elseif (\array_key_exists('requiredIf', $data) && null === $data['requiredIf']) {
            $object->setRequiredIf(null);
            unset($data['requiredIf']);
        }
        if (\array_key_exists('displayedIf', $data) && null !== $data['displayedIf']) {
            $object->setDisplayedIf($this->denormalizer->denormalize($data['displayedIf'], \Em411\Allegro\Api\Model\CategoryParameterDisplayConditions::class, 'json', $context));
            unset($data['displayedIf']);
        } elseif (\array_key_exists('displayedIf', $data) && null === $data['displayedIf']) {
            $object->setDisplayedIf(null);
            unset($data['displayedIf']);
        }
        if (\array_key_exists('unit', $data) && null !== $data['unit']) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        } elseif (\array_key_exists('unit', $data) && null === $data['unit']) {
            $object->setUnit(null);
            unset($data['unit']);
        }
        if (\array_key_exists('formerData', $data) && null !== $data['formerData']) {
            $object->setFormerData($this->denormalizer->denormalize($data['formerData'], \Em411\Allegro\Api\Model\FormerCategoryParameterData::class, 'json', $context));
            unset($data['formerData']);
        } elseif (\array_key_exists('formerData', $data) && null === $data['formerData']) {
            $object->setFormerData(null);
            unset($data['formerData']);
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
        if (null !== $data->getType() && 'integer' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'float' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'string' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'dictionary' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if ($data->isInitialized('requiredIf') && null !== $data->getRequiredIf()) {
            $dataArray['requiredIf'] = null === $data->getRequiredIf() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getRequiredIf(), 'json', $context));
        }
        if ($data->isInitialized('displayedIf') && null !== $data->getDisplayedIf()) {
            $dataArray['displayedIf'] = null === $data->getDisplayedIf() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDisplayedIf(), 'json', $context));
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('formerData') && null !== $data->getFormerData()) {
            $dataArray['formerData'] = null === $data->getFormerData() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getFormerData(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\CategoryProductParameter::class => false];
    }
}
