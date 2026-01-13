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

class StringCategoryParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\StringCategoryParameter::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\StringCategoryParameter::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\StringCategoryParameter();
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('requiredForProduct', $data) && \is_int($data['requiredForProduct'])) {
            $data['requiredForProduct'] = (bool) $data['requiredForProduct'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('required', $data) && null !== $data['required']) {
            $object->setRequired($data['required']);
            unset($data['required']);
        } elseif (\array_key_exists('required', $data) && null === $data['required']) {
            $object->setRequired(null);
        }
        if (\array_key_exists('requiredForProduct', $data) && null !== $data['requiredForProduct']) {
            $object->setRequiredForProduct($data['requiredForProduct']);
            unset($data['requiredForProduct']);
        } elseif (\array_key_exists('requiredForProduct', $data) && null === $data['requiredForProduct']) {
            $object->setRequiredForProduct(null);
        }
        if (\array_key_exists('requiredIf', $data) && null !== $data['requiredIf']) {
            $object->setRequiredIf($this->denormalizer->denormalize($data['requiredIf'], \Em411\Allegro\Api\Model\CategoryParameterRequirementConditions::class, 'json', $context));
            unset($data['requiredIf']);
        } elseif (\array_key_exists('requiredIf', $data) && null === $data['requiredIf']) {
            $object->setRequiredIf(null);
        }
        if (\array_key_exists('displayedIf', $data) && null !== $data['displayedIf']) {
            $object->setDisplayedIf($this->denormalizer->denormalize($data['displayedIf'], \Em411\Allegro\Api\Model\CategoryParameterDisplayConditions::class, 'json', $context));
            unset($data['displayedIf']);
        } elseif (\array_key_exists('displayedIf', $data) && null === $data['displayedIf']) {
            $object->setDisplayedIf(null);
        }
        if (\array_key_exists('unit', $data) && null !== $data['unit']) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        } elseif (\array_key_exists('unit', $data) && null === $data['unit']) {
            $object->setUnit(null);
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Em411\Allegro\Api\Model\CategoryParameterOptions::class, 'json', $context));
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
        }
        if (\array_key_exists('formerData', $data) && null !== $data['formerData']) {
            $object->setFormerData($this->denormalizer->denormalize($data['formerData'], \Em411\Allegro\Api\Model\FormerCategoryParameterData::class, 'json', $context));
            unset($data['formerData']);
        } elseif (\array_key_exists('formerData', $data) && null === $data['formerData']) {
            $object->setFormerData(null);
        }
        if (\array_key_exists('restrictions', $data) && null !== $data['restrictions']) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Em411\Allegro\Api\Model\StringCategoryParameterrestrictions::class, 'json', $context));
            unset($data['restrictions']);
        } elseif (\array_key_exists('restrictions', $data) && null === $data['restrictions']) {
            $object->setRestrictions(null);
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
            $dataArray['requiredIf'] = $this->normalizer->normalize($data->getRequiredIf(), 'json', $context);
        }
        if ($data->isInitialized('displayedIf') && null !== $data->getDisplayedIf()) {
            $dataArray['displayedIf'] = $this->normalizer->normalize($data->getDisplayedIf(), 'json', $context);
        }
        if ($data->isInitialized('unit')) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        if ($data->isInitialized('formerData') && null !== $data->getFormerData()) {
            $dataArray['formerData'] = $this->normalizer->normalize($data->getFormerData(), 'json', $context);
        }
        if ($data->isInitialized('restrictions') && null !== $data->getRestrictions()) {
            $dataArray['restrictions'] = $this->normalizer->normalize($data->getRestrictions(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\StringCategoryParameter::class => false];
    }
}
