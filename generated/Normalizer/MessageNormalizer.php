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

class MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Message::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Message::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\Message();
        if (\array_key_exists('hasAdditionalAttachments', $data) && \is_int($data['hasAdditionalAttachments'])) {
            $data['hasAdditionalAttachments'] = (bool) $data['hasAdditionalAttachments'];
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
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('thread', $data) && null !== $data['thread']) {
            $object->setThread($this->denormalizer->denormalize($data['thread'], \Em411\Allegro\Api\Model\ThreadId::class, 'json', $context));
            unset($data['thread']);
        } elseif (\array_key_exists('thread', $data) && null === $data['thread']) {
            $object->setThread(null);
        }
        if (\array_key_exists('author', $data) && null !== $data['author']) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Em411\Allegro\Api\Model\MessageAuthor::class, 'json', $context));
            unset($data['author']);
        } elseif (\array_key_exists('author', $data) && null === $data['author']) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->setText($data['text']);
            unset($data['text']);
        } elseif (\array_key_exists('text', $data) && null === $data['text']) {
            $object->setText(null);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
        }
        if (\array_key_exists('relatesTo', $data) && null !== $data['relatesTo']) {
            $object->setRelatesTo($this->denormalizer->denormalize($data['relatesTo'], \Em411\Allegro\Api\Model\MessageRelatedObject::class, 'json', $context));
            unset($data['relatesTo']);
        } elseif (\array_key_exists('relatesTo', $data) && null === $data['relatesTo']) {
            $object->setRelatesTo(null);
        }
        if (\array_key_exists('hasAdditionalAttachments', $data) && null !== $data['hasAdditionalAttachments']) {
            $object->setHasAdditionalAttachments($data['hasAdditionalAttachments']);
            unset($data['hasAdditionalAttachments']);
        } elseif (\array_key_exists('hasAdditionalAttachments', $data) && null === $data['hasAdditionalAttachments']) {
            $object->setHasAdditionalAttachments(null);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\MessageAttachmentInfo::class, 'json', $context);
            }
            $object->setAttachments($values);
            unset($data['attachments']);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('additionalInformation', $data) && null !== $data['additionalInformation']) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], \Em411\Allegro\Api\Model\MessageAdditionalInformation::class, 'json', $context));
            unset($data['additionalInformation']);
        } elseif (\array_key_exists('additionalInformation', $data) && null === $data['additionalInformation']) {
            $object->setAdditionalInformation(null);
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
        $dataArray['status'] = $data->getStatus();
        $dataArray['type'] = $data->getType();
        $dataArray['createdAt'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['thread'] = $this->normalizer->normalize($data->getThread(), 'json', $context);
        $dataArray['author'] = $this->normalizer->normalize($data->getAuthor(), 'json', $context);
        $dataArray['text'] = $data->getText();
        if ($data->isInitialized('subject')) {
            $dataArray['subject'] = $data->getSubject();
        }
        $dataArray['relatesTo'] = $this->normalizer->normalize($data->getRelatesTo(), 'json', $context);
        $dataArray['hasAdditionalAttachments'] = $data->getHasAdditionalAttachments();
        $values = [];
        foreach ($data->getAttachments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['attachments'] = $values;
        if ($data->isInitialized('additionalInformation')) {
            $dataArray['additionalInformation'] = $this->normalizer->normalize($data->getAdditionalInformation(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\Message::class => false];
    }
}
