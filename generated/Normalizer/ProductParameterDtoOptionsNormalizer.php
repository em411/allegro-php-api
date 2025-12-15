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

class ProductParameterDtoOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ProductParameterDtoOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ProductParameterDtoOptions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ProductParameterDtoOptions();
        if (\array_key_exists('identifiesProduct', $data) && \is_int($data['identifiesProduct'])) {
            $data['identifiesProduct'] = (bool) $data['identifiesProduct'];
        }
        if (\array_key_exists('isGTIN', $data) && \is_int($data['isGTIN'])) {
            $data['isGTIN'] = (bool) $data['isGTIN'];
        }
        if (\array_key_exists('isTrusted', $data) && \is_int($data['isTrusted'])) {
            $data['isTrusted'] = (bool) $data['isTrusted'];
        }
        if (\array_key_exists('isAiCoCreated', $data) && \is_int($data['isAiCoCreated'])) {
            $data['isAiCoCreated'] = (bool) $data['isAiCoCreated'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identifiesProduct', $data) && null !== $data['identifiesProduct']) {
            $object->setIdentifiesProduct($data['identifiesProduct']);
            unset($data['identifiesProduct']);
        } elseif (\array_key_exists('identifiesProduct', $data) && null === $data['identifiesProduct']) {
            $object->setIdentifiesProduct(null);
        }
        if (\array_key_exists('isGTIN', $data) && null !== $data['isGTIN']) {
            $object->setIsGTIN($data['isGTIN']);
            unset($data['isGTIN']);
        } elseif (\array_key_exists('isGTIN', $data) && null === $data['isGTIN']) {
            $object->setIsGTIN(null);
        }
        if (\array_key_exists('isTrusted', $data) && null !== $data['isTrusted']) {
            $object->setIsTrusted($data['isTrusted']);
            unset($data['isTrusted']);
        } elseif (\array_key_exists('isTrusted', $data) && null === $data['isTrusted']) {
            $object->setIsTrusted(null);
        }
        if (\array_key_exists('isAiCoCreated', $data) && null !== $data['isAiCoCreated']) {
            $object->setIsAiCoCreated($data['isAiCoCreated']);
            unset($data['isAiCoCreated']);
        } elseif (\array_key_exists('isAiCoCreated', $data) && null === $data['isAiCoCreated']) {
            $object->setIsAiCoCreated(null);
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
        $dataArray['identifiesProduct'] = $data->getIdentifiesProduct();
        if ($data->isInitialized('isGTIN') && null !== $data->getIsGTIN()) {
            $dataArray['isGTIN'] = $data->getIsGTIN();
        }
        if ($data->isInitialized('isTrusted') && null !== $data->getIsTrusted()) {
            $dataArray['isTrusted'] = $data->getIsTrusted();
        }
        if ($data->isInitialized('isAiCoCreated') && null !== $data->getIsAiCoCreated()) {
            $dataArray['isAiCoCreated'] = $data->getIsAiCoCreated();
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
        return [\Em411\Allegro\Api\Model\ProductParameterDtoOptions::class => false];
    }
}
