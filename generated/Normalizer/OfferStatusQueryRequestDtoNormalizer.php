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

class OfferStatusQueryRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferStatusQueryRequestDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferStatusQueryRequestDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\OfferStatusQueryRequestDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\OfferStatusQueryRequestDtoOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
        }
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\OfferStatusQueryRequestDtoMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
        }
        if (\array_key_exists('limit', $data) && null !== $data['limit']) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        } elseif (\array_key_exists('limit', $data) && null === $data['limit']) {
            $object->setLimit(null);
        }
        if (\array_key_exists('offset', $data) && null !== $data['offset']) {
            $object->setOffset($data['offset']);
            unset($data['offset']);
        } elseif (\array_key_exists('offset', $data) && null === $data['offset']) {
            $object->setOffset(null);
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
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        }
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('offset') && null !== $data->getOffset()) {
            $dataArray['offset'] = $data->getOffset();
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
        return [\Em411\Allegro\Api\Model\OfferStatusQueryRequestDto::class => false];
    }
}
