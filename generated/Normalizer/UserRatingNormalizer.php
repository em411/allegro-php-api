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

class UserRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\UserRating::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\UserRating::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\UserRating();
        if (\array_key_exists('excludedFromAverageRates', $data) && \is_int($data['excludedFromAverageRates'])) {
            $data['excludedFromAverageRates'] = (bool) $data['excludedFromAverageRates'];
        }
        if (\array_key_exists('recommended', $data) && \is_int($data['recommended'])) {
            $data['recommended'] = (bool) $data['recommended'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('answer', $data) && null !== $data['answer']) {
            $object->setAnswer($this->denormalizer->denormalize($data['answer'], \Em411\Allegro\Api\Model\Answer::class, 'json', $context));
            unset($data['answer']);
        } elseif (\array_key_exists('answer', $data) && null === $data['answer']) {
            $object->setAnswer(null);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\User::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('editedAt', $data) && null !== $data['editedAt']) {
            $object->setEditedAt($data['editedAt']);
            unset($data['editedAt']);
        } elseif (\array_key_exists('editedAt', $data) && null === $data['editedAt']) {
            $object->setEditedAt(null);
        }
        if (\array_key_exists('excludedFromAverageRates', $data) && null !== $data['excludedFromAverageRates']) {
            $object->setExcludedFromAverageRates($data['excludedFromAverageRates']);
            unset($data['excludedFromAverageRates']);
        } elseif (\array_key_exists('excludedFromAverageRates', $data) && null === $data['excludedFromAverageRates']) {
            $object->setExcludedFromAverageRates(null);
        }
        if (\array_key_exists('excludedFromAverageRatesReason', $data) && null !== $data['excludedFromAverageRatesReason']) {
            $object->setExcludedFromAverageRatesReason($data['excludedFromAverageRatesReason']);
            unset($data['excludedFromAverageRatesReason']);
        } elseif (\array_key_exists('excludedFromAverageRatesReason', $data) && null === $data['excludedFromAverageRatesReason']) {
            $object->setExcludedFromAverageRatesReason(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('lastChangedAt', $data) && null !== $data['lastChangedAt']) {
            $object->setLastChangedAt($data['lastChangedAt']);
            unset($data['lastChangedAt']);
        } elseif (\array_key_exists('lastChangedAt', $data) && null === $data['lastChangedAt']) {
            $object->setLastChangedAt(null);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Em411\Allegro\Api\Model\Order::class, 'json', $context));
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('rates', $data) && null !== $data['rates']) {
            $object->setRates($this->denormalizer->denormalize($data['rates'], \Em411\Allegro\Api\Model\Rates::class, 'json', $context));
            unset($data['rates']);
        } elseif (\array_key_exists('rates', $data) && null === $data['rates']) {
            $object->setRates(null);
        }
        if (\array_key_exists('recommended', $data) && null !== $data['recommended']) {
            $object->setRecommended($data['recommended']);
            unset($data['recommended']);
        } elseif (\array_key_exists('recommended', $data) && null === $data['recommended']) {
            $object->setRecommended(null);
        }
        if (\array_key_exists('removal', $data) && null !== $data['removal']) {
            $object->setRemoval($this->denormalizer->denormalize($data['removal'], \Em411\Allegro\Api\Model\Removal::class, 'json', $context));
            unset($data['removal']);
        } elseif (\array_key_exists('removal', $data) && null === $data['removal']) {
            $object->setRemoval(null);
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
        if ($data->isInitialized('answer') && null !== $data->getAnswer()) {
            $dataArray['answer'] = $this->normalizer->normalize($data->getAnswer(), 'json', $context);
        }
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        $dataArray['createdAt'] = $data->getCreatedAt();
        if ($data->isInitialized('editedAt') && null !== $data->getEditedAt()) {
            $dataArray['editedAt'] = $data->getEditedAt();
        }
        if ($data->isInitialized('excludedFromAverageRates') && null !== $data->getExcludedFromAverageRates()) {
            $dataArray['excludedFromAverageRates'] = $data->getExcludedFromAverageRates();
        }
        if ($data->isInitialized('excludedFromAverageRatesReason') && null !== $data->getExcludedFromAverageRatesReason()) {
            $dataArray['excludedFromAverageRatesReason'] = $data->getExcludedFromAverageRatesReason();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('lastChangedAt') && null !== $data->getLastChangedAt()) {
            $dataArray['lastChangedAt'] = $data->getLastChangedAt();
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        if ($data->isInitialized('rates') && null !== $data->getRates()) {
            $dataArray['rates'] = $this->normalizer->normalize($data->getRates(), 'json', $context);
        }
        $dataArray['recommended'] = $data->getRecommended();
        if ($data->isInitialized('removal') && null !== $data->getRemoval()) {
            $dataArray['removal'] = $this->normalizer->normalize($data->getRemoval(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\UserRating::class => false];
    }
}
