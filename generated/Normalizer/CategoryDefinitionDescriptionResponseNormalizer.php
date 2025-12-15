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

class CategoryDefinitionDescriptionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryDefinitionDescriptionResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryDefinitionDescriptionResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CategoryDefinitionDescriptionResponse();
        if (\array_key_exists('editable', $data) && \is_int($data['editable'])) {
            $data['editable'] = (bool) $data['editable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hint', $data) && null !== $data['hint']) {
            $object->setHint($data['hint']);
            unset($data['hint']);
        } elseif (\array_key_exists('hint', $data) && null === $data['hint']) {
            $object->setHint(null);
        }
        if (\array_key_exists('editable', $data) && null !== $data['editable']) {
            $object->setEditable($data['editable']);
            unset($data['editable']);
        } elseif (\array_key_exists('editable', $data) && null === $data['editable']) {
            $object->setEditable(null);
        }
        if (\array_key_exists('default', $data) && null !== $data['default']) {
            $object->setDefault($data['default']);
            unset($data['default']);
        } elseif (\array_key_exists('default', $data) && null === $data['default']) {
            $object->setDefault(null);
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
        if ($data->isInitialized('hint')) {
            $dataArray['hint'] = $data->getHint();
        }
        if ($data->isInitialized('editable') && null !== $data->getEditable()) {
            $dataArray['editable'] = $data->getEditable();
        }
        if ($data->isInitialized('default')) {
            $dataArray['default'] = $data->getDefault();
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
        return [\Em411\Allegro\Api\Model\CategoryDefinitionDescriptionResponse::class => false];
    }
}
