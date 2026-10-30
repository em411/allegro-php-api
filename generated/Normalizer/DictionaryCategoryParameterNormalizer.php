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

class DictionaryCategoryParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DictionaryCategoryParameter::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DictionaryCategoryParameter::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\DictionaryCategoryParameter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('requiredForProduct', $data) && \is_int($data['requiredForProduct'])) {
            $data['requiredForProduct'] = (bool) $data['requiredForProduct'];
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
        if (\array_key_exists('requiredForProduct', $data) && null !== $data['requiredForProduct']) {
            $object->setRequiredForProduct($data['requiredForProduct']);
            unset($data['requiredForProduct']);
        } elseif (\array_key_exists('requiredForProduct', $data) && null === $data['requiredForProduct']) {
            $object->setRequiredForProduct(null);
            unset($data['requiredForProduct']);
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
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Em411\Allegro\Api\Model\CategoryParameterOptions::class, 'json', $context));
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
            unset($data['options']);
        }
        if (\array_key_exists('formerData', $data) && null !== $data['formerData']) {
            $object->setFormerData($this->denormalizer->denormalize($data['formerData'], \Em411\Allegro\Api\Model\FormerCategoryParameterData::class, 'json', $context));
            unset($data['formerData']);
        } elseif (\array_key_exists('formerData', $data) && null === $data['formerData']) {
            $object->setFormerData(null);
            unset($data['formerData']);
        }
        if (\array_key_exists('restrictions', $data) && null !== $data['restrictions']) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Em411\Allegro\Api\Model\DictionaryCategoryParameterRestrictions::class, 'json', $context));
            unset($data['restrictions']);
        } elseif (\array_key_exists('restrictions', $data) && null === $data['restrictions']) {
            $object->setRestrictions(null);
            unset($data['restrictions']);
        }
        if (\array_key_exists('dictionary', $data) && null !== $data['dictionary']) {
            $values = [];
            foreach ($data['dictionary'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem::class, 'json', $context);
            }
            $object->setDictionary($values);
            unset($data['dictionary']);
        } elseif (\array_key_exists('dictionary', $data) && null === $data['dictionary']) {
            $object->setDictionary(null);
            unset($data['dictionary']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if ($data->isInitialized('requiredForProduct') && null !== $data->getRequiredForProduct()) {
            $dataArray['requiredForProduct'] = $data->getRequiredForProduct();
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
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = null === $data->getOptions() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOptions(), 'json', $context));
        }
        if ($data->isInitialized('formerData') && null !== $data->getFormerData()) {
            $dataArray['formerData'] = null === $data->getFormerData() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getFormerData(), 'json', $context));
        }
        if ($data->isInitialized('restrictions') && null !== $data->getRestrictions()) {
            $dataArray['restrictions'] = null === $data->getRestrictions() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getRestrictions(), 'json', $context));
        }
        if ($data->isInitialized('dictionary') && null !== $data->getDictionary()) {
            $values = [];
            foreach ($data->getDictionary() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['dictionary'] = $values;
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
        return [\Em411\Allegro\Api\Model\DictionaryCategoryParameter::class => false];
    }
}
