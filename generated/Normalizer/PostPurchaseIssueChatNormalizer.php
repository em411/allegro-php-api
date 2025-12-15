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

class PostPurchaseIssueChatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PostPurchaseIssueChat::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PostPurchaseIssueChat::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PostPurchaseIssueChat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lastMessage', $data) && null !== $data['lastMessage']) {
            $object->setLastMessage($this->denormalizer->denormalize($data['lastMessage'], \Em411\Allegro\Api\Model\PostPurchaseIssueLastMessage::class, 'json', $context));
            unset($data['lastMessage']);
        } elseif (\array_key_exists('lastMessage', $data) && null === $data['lastMessage']) {
            $object->setLastMessage(null);
        }
        if (\array_key_exists('messagesCount', $data) && null !== $data['messagesCount']) {
            $object->setMessagesCount($data['messagesCount']);
            unset($data['messagesCount']);
        } elseif (\array_key_exists('messagesCount', $data) && null === $data['messagesCount']) {
            $object->setMessagesCount(null);
        }
        if (\array_key_exists('initialMessage', $data) && null !== $data['initialMessage']) {
            $object->setInitialMessage($this->denormalizer->denormalize($data['initialMessage'], \Em411\Allegro\Api\Model\PostPurchaseIssueFirstMessage::class, 'json', $context));
            unset($data['initialMessage']);
        } elseif (\array_key_exists('initialMessage', $data) && null === $data['initialMessage']) {
            $object->setInitialMessage(null);
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
        if ($data->isInitialized('lastMessage') && null !== $data->getLastMessage()) {
            $dataArray['lastMessage'] = $this->normalizer->normalize($data->getLastMessage(), 'json', $context);
        }
        if ($data->isInitialized('messagesCount') && null !== $data->getMessagesCount()) {
            $dataArray['messagesCount'] = $data->getMessagesCount();
        }
        if ($data->isInitialized('initialMessage') && null !== $data->getInitialMessage()) {
            $dataArray['initialMessage'] = $this->normalizer->normalize($data->getInitialMessage(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\PostPurchaseIssueChat::class => false];
    }
}
