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

class DictionaryCategoryParameterDictionaryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->setValue($data['value']);
            unset($data['value']);
        } elseif (\array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
            unset($data['value']);
        }
        if (\array_key_exists('dependsOnValueIds', $data) && null !== $data['dependsOnValueIds']) {
            $values = [];
            foreach ($data['dependsOnValueIds'] as $value) {
                $values[] = $value;
            }
            $object->setDependsOnValueIds($values);
            unset($data['dependsOnValueIds']);
        } elseif (\array_key_exists('dependsOnValueIds', $data) && null === $data['dependsOnValueIds']) {
            $object->setDependsOnValueIds(null);
            unset($data['dependsOnValueIds']);
        }
        if (\array_key_exists('formerData', $data) && null !== $data['formerData']) {
            $object->setFormerData($this->denormalizer->denormalize($data['formerData'], \Em411\Allegro\Api\Model\FormerParameterValueData::class, 'json', $context));
            unset($data['formerData']);
        } elseif (\array_key_exists('formerData', $data) && null === $data['formerData']) {
            $object->setFormerData(null);
            unset($data['formerData']);
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
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $dataArray['value'] = $data->getValue();
        }
        if ($data->isInitialized('dependsOnValueIds') && null !== $data->getDependsOnValueIds()) {
            $values = [];
            foreach ($data->getDependsOnValueIds() as $value) {
                $values[] = $value;
            }
            $dataArray['dependsOnValueIds'] = $values;
        }
        if ($data->isInitialized('formerData') && null !== $data->getFormerData()) {
            $dataArray['formerData'] = null === $data->getFormerData() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getFormerData(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\DictionaryCategoryParameterDictionaryItem::class => false];
    }
}
