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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\Thread();
        if (\array_key_exists('read', $data) && \is_int($data['read'])) {
            $data['read'] = (bool) $data['read'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('read', $data) && null !== $data['read']) {
            $object->setRead($data['read']);
            unset($data['read']);
        } elseif (\array_key_exists('read', $data) && null === $data['read']) {
            $object->setRead(null);
        }
        if (\array_key_exists('lastMessageDateTime', $data) && null !== $data['lastMessageDateTime']) {
            $object->setLastMessageDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageDateTime']));
            unset($data['lastMessageDateTime']);
        } elseif (\array_key_exists('lastMessageDateTime', $data) && null === $data['lastMessageDateTime']) {
            $object->setLastMessageDateTime(null);
        }
        if (\array_key_exists('interlocutor', $data) && null !== $data['interlocutor']) {
            $object->setInterlocutor($this->denormalizer->denormalize($data['interlocutor'], \Em411\Allegro\Api\Model\Interlocutor::class, 'json', $context));
            unset($data['interlocutor']);
        } elseif (\array_key_exists('interlocutor', $data) && null === $data['interlocutor']) {
            $object->setInterlocutor(null);
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
        if ($data->isInitialized('lastMessageDateTime')) {
            $dataArray['lastMessageDateTime'] = $data->getLastMessageDateTime()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('interlocutor')) {
            $dataArray['interlocutor'] = $this->normalizer->normalize($data->getInterlocutor(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\Thread::class => false];
    }
}
