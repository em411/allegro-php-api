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

class ThreadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Thread::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Thread::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\Thread();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('read', $data) && \is_int($data['read'])) {
            $data['read'] = (bool) $data['read'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('read', $data) && null !== $data['read']) {
            $object->setRead($data['read']);
            unset($data['read']);
        } elseif (\array_key_exists('read', $data) && null === $data['read']) {
            $object->setRead(null);
            unset($data['read']);
        }
        if (\array_key_exists('lastMessageDateTime', $data) && null !== $data['lastMessageDateTime']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageDateTime']);
            if (false === $date) {
                if (\is_string($data['lastMessageDateTime']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastMessageDateTime'])) {
                    try {
                        $date = new \DateTime($data['lastMessageDateTime']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastMessageDateTime'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['lastMessageDateTime'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setLastMessageDateTime($date);
            unset($data['lastMessageDateTime']);
        } elseif (\array_key_exists('lastMessageDateTime', $data) && null === $data['lastMessageDateTime']) {
            $object->setLastMessageDateTime(null);
            unset($data['lastMessageDateTime']);
        }
        if (\array_key_exists('interlocutor', $data) && null !== $data['interlocutor']) {
            $object->setInterlocutor($this->denormalizer->denormalize($data['interlocutor'], \Em411\Allegro\Api\Model\Interlocutor::class, 'json', $context));
            unset($data['interlocutor']);
        } elseif (\array_key_exists('interlocutor', $data) && null === $data['interlocutor']) {
            $object->setInterlocutor(null);
            unset($data['interlocutor']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['read'] = $data->getRead();
        if ($data->isInitialized('lastMessageDateTime') && null !== $data->getLastMessageDateTime()) {
            $dataArray['lastMessageDateTime'] = $data->getLastMessageDateTime()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('interlocutor') && null !== $data->getInterlocutor()) {
            $dataArray['interlocutor'] = null === $data->getInterlocutor() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getInterlocutor(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\Thread::class => false];
    }
}
