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

class ProductSetElementSafetyInformationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ProductSetElementSafetyInformationRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ProductSetElementSafetyInformationRequest::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\ProductSetElementSafetyInformationRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('safetyInformation', $data) && null !== $data['safetyInformation']) {
            $value = $data['safetyInformation'];
            if (\is_array($data['safetyInformation']) && (\array_key_exists('type', $data['safetyInformation']) && 'TEXT' == $data['safetyInformation']['type']) && \array_key_exists('description', $data['safetyInformation']) && (isset($data['safetyInformation']['type']) && 'TEXT' == $data['safetyInformation']['type'])) {
                $value = $this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\TextSafetyInformation::class, 'json', $context);
            } elseif (\is_array($data['safetyInformation']) && (\array_key_exists('type', $data['safetyInformation']) && 'ATTACHMENTS' == $data['safetyInformation']['type']) && \array_key_exists('attachments', $data['safetyInformation']) && (isset($data['safetyInformation']['type']) && 'ATTACHMENTS' == $data['safetyInformation']['type'])) {
                $value = $this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\AttachmentsSafetyInformation::class, 'json', $context);
            }
            $object->setSafetyInformation($value);
            unset($data['safetyInformation']);
        } elseif (\array_key_exists('safetyInformation', $data) && null === $data['safetyInformation']) {
            $object->setSafetyInformation(null);
            unset($data['safetyInformation']);
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
        if ($data->isInitialized('safetyInformation') && null !== $data->getSafetyInformation()) {
            $value = $data->getSafetyInformation();
            if (\is_object($data->getSafetyInformation())) {
                $value = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
            } elseif (\is_object($data->getSafetyInformation())) {
                $value = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
            }
            $dataArray['safetyInformation'] = $value;
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
        return [\Em411\Allegro\Api\Model\ProductSetElementSafetyInformationRequest::class => false];
    }
}
