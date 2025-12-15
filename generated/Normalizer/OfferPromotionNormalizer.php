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

class OfferPromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferPromotion::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferPromotion::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferPromotion();
        if (\array_key_exists('emphasized', $data) && \is_int($data['emphasized'])) {
            $data['emphasized'] = (bool) $data['emphasized'];
        }
        if (\array_key_exists('bold', $data) && \is_int($data['bold'])) {
            $data['bold'] = (bool) $data['bold'];
        }
        if (\array_key_exists('highlight', $data) && \is_int($data['highlight'])) {
            $data['highlight'] = (bool) $data['highlight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('emphasized', $data) && null !== $data['emphasized']) {
            $object->setEmphasized($data['emphasized']);
            unset($data['emphasized']);
        } elseif (\array_key_exists('emphasized', $data) && null === $data['emphasized']) {
            $object->setEmphasized(null);
        }
        if (\array_key_exists('bold', $data) && null !== $data['bold']) {
            $object->setBold($data['bold']);
            unset($data['bold']);
        } elseif (\array_key_exists('bold', $data) && null === $data['bold']) {
            $object->setBold(null);
        }
        if (\array_key_exists('highlight', $data) && null !== $data['highlight']) {
            $object->setHighlight($data['highlight']);
            unset($data['highlight']);
        } elseif (\array_key_exists('highlight', $data) && null === $data['highlight']) {
            $object->setHighlight(null);
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
        if ($data->isInitialized('emphasized') && null !== $data->getEmphasized()) {
            $dataArray['emphasized'] = $data->getEmphasized();
        }
        if ($data->isInitialized('bold') && null !== $data->getBold()) {
            $dataArray['bold'] = $data->getBold();
        }
        if ($data->isInitialized('highlight') && null !== $data->getHighlight()) {
            $dataArray['highlight'] = $data->getHighlight();
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
        return [\Em411\Allegro\Api\Model\OfferPromotion::class => false];
    }
}
