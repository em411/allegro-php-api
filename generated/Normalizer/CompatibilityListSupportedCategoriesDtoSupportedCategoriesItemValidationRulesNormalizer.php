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

class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maxRows', $data) && null !== $data['maxRows']) {
            $object->setMaxRows($data['maxRows']);
            unset($data['maxRows']);
        } elseif (\array_key_exists('maxRows', $data) && null === $data['maxRows']) {
            $object->setMaxRows(null);
        }
        if (\array_key_exists('maxCharactersPerLine', $data) && null !== $data['maxCharactersPerLine']) {
            $object->setMaxCharactersPerLine($data['maxCharactersPerLine']);
            unset($data['maxCharactersPerLine']);
        } elseif (\array_key_exists('maxCharactersPerLine', $data) && null === $data['maxCharactersPerLine']) {
            $object->setMaxCharactersPerLine(null);
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
        if ($data->isInitialized('maxRows') && null !== $data->getMaxRows()) {
            $dataArray['maxRows'] = $data->getMaxRows();
        }
        if ($data->isInitialized('maxCharactersPerLine') && null !== $data->getMaxCharactersPerLine()) {
            $dataArray['maxCharactersPerLine'] = $data->getMaxCharactersPerLine();
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
        return [\Em411\Allegro\Api\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class => false];
    }
}
