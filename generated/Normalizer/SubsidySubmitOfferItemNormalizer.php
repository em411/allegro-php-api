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

class SubsidySubmitOfferItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SubsidySubmitOfferItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SubsidySubmitOfferItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SubsidySubmitOfferItem();
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
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\SubsidySubmitOfferItemMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
            unset($data['marketplace']);
        }
        if (\array_key_exists('sellerDiscountDeclaration', $data) && null !== $data['sellerDiscountDeclaration']) {
            $object->setSellerDiscountDeclaration($this->denormalizer->denormalize($data['sellerDiscountDeclaration'], \Em411\Allegro\Api\Model\SubsidySubmitOfferItemSellerDiscountDeclaration::class, 'json', $context));
            unset($data['sellerDiscountDeclaration']);
        } elseif (\array_key_exists('sellerDiscountDeclaration', $data) && null === $data['sellerDiscountDeclaration']) {
            $object->setSellerDiscountDeclaration(null);
            unset($data['sellerDiscountDeclaration']);
        }
        if (\array_key_exists('completedAt', $data) && null !== $data['completedAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completedAt']);
            if (false === $date) {
                if (\is_string($data['completedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['completedAt'])) {
                    try {
                        $date = new \DateTime($data['completedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['completedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['completedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCompletedAt($date);
            unset($data['completedAt']);
        } elseif (\array_key_exists('completedAt', $data) && null === $data['completedAt']) {
            $object->setCompletedAt(null);
            unset($data['completedAt']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
        }
        if (\array_key_exists('errors', $data) && null !== $data['errors']) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\OfferError::class, 'json', $context);
            }
            $object->setErrors($values);
            unset($data['errors']);
        } elseif (\array_key_exists('errors', $data) && null === $data['errors']) {
            $object->setErrors(null);
            unset($data['errors']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['marketplace'] = null === $data->getMarketplace() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMarketplace(), 'json', $context));
        if ($data->isInitialized('sellerDiscountDeclaration') && null !== $data->getSellerDiscountDeclaration()) {
            $dataArray['sellerDiscountDeclaration'] = null === $data->getSellerDiscountDeclaration() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSellerDiscountDeclaration(), 'json', $context));
        }
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completedAt'] = $data->getCompletedAt()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values = [];
            foreach ($data->getErrors() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['errors'] = $values;
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
        return [\Em411\Allegro\Api\Model\SubsidySubmitOfferItem::class => false];
    }
}
