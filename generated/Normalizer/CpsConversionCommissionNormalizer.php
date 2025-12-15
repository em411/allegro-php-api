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

class CpsConversionCommissionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CpsConversionCommission::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CpsConversionCommission::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CpsConversionCommission();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('publisher', $data) && null !== $data['publisher']) {
            $object->setPublisher($this->denormalizer->denormalize($data['publisher'], \Em411\Allegro\Api\Model\CpsConversionCommissionPublisher::class, 'json', $context));
            unset($data['publisher']);
        } elseif (\array_key_exists('publisher', $data) && null === $data['publisher']) {
            $object->setPublisher(null);
        }
        if (\array_key_exists('allegro', $data) && null !== $data['allegro']) {
            $object->setAllegro($this->denormalizer->denormalize($data['allegro'], \Em411\Allegro\Api\Model\CpsConversionCommissionAllegro::class, 'json', $context));
            unset($data['allegro']);
        } elseif (\array_key_exists('allegro', $data) && null === $data['allegro']) {
            $object->setAllegro(null);
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
        if ($data->isInitialized('publisher') && null !== $data->getPublisher()) {
            $dataArray['publisher'] = $this->normalizer->normalize($data->getPublisher(), 'json', $context);
        }
        if ($data->isInitialized('allegro') && null !== $data->getAllegro()) {
            $dataArray['allegro'] = $this->normalizer->normalize($data->getAllegro(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\CpsConversionCommission::class => false];
    }
}
