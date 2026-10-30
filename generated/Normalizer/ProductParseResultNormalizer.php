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

class ProductParseResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ProductParseResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ProductParseResult::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\ProductParseResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('productId', $data) && null !== $data['productId']) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        } elseif (\array_key_exists('productId', $data) && null === $data['productId']) {
            $object->setProductId(null);
            unset($data['productId']);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ParsedItemResponse::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
            unset($data['items']);
        }
        if (\array_key_exists('errors', $data) && null !== $data['errors']) {
            $values_1 = [];
            foreach ($data['errors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ParseDiagnosticResponse::class, 'json', $context);
            }
            $object->setErrors($values_1);
            unset($data['errors']);
        } elseif (\array_key_exists('errors', $data) && null === $data['errors']) {
            $object->setErrors(null);
            unset($data['errors']);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values_2 = [];
            foreach ($data['warnings'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\ParseDiagnosticResponse::class, 'json', $context);
            }
            $object->setWarnings($values_2);
            unset($data['warnings']);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
            unset($data['warnings']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productId') && null !== $data->getProductId()) {
            $dataArray['productId'] = $data->getProductId();
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['items'] = $values;
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values_1 = [];
            foreach ($data->getErrors() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['errors'] = $values_1;
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values_2 = [];
            foreach ($data->getWarnings() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['warnings'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ProductParseResult::class => false];
    }
}
