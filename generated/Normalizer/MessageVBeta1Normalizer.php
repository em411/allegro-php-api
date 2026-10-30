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

class MessageVBeta1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\MessageVBeta1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\MessageVBeta1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\MessageVBeta1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hasAdditionalAttachments', $data) && \is_int($data['hasAdditionalAttachments'])) {
            $data['hasAdditionalAttachments'] = (bool) $data['hasAdditionalAttachments'];
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('createdAt', $data) && null !== $data['createdAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date) {
                if (\is_string($data['createdAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdAt'])) {
                    try {
                        $date = new \DateTime($data['createdAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setCreatedAt($date);
            unset($data['createdAt']);
        } elseif (\array_key_exists('createdAt', $data) && null === $data['createdAt']) {
            $object->setCreatedAt(null);
            unset($data['createdAt']);
        }
        if (\array_key_exists('author', $data) && null !== $data['author']) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Em411\Allegro\Api\Model\MessageAuthorVBeta1::class, 'json', $context));
            unset($data['author']);
        } elseif (\array_key_exists('author', $data) && null === $data['author']) {
            $object->setAuthor(null);
            unset($data['author']);
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->setText($data['text']);
            unset($data['text']);
        } elseif (\array_key_exists('text', $data) && null === $data['text']) {
            $object->setText(null);
            unset($data['text']);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
            unset($data['subject']);
        }
        if (\array_key_exists('relatesTo', $data) && null !== $data['relatesTo']) {
            $object->setRelatesTo($this->denormalizer->denormalize($data['relatesTo'], \Em411\Allegro\Api\Model\MessageRelatedObjectVBeta1::class, 'json', $context));
            unset($data['relatesTo']);
        } elseif (\array_key_exists('relatesTo', $data) && null === $data['relatesTo']) {
            $object->setRelatesTo(null);
            unset($data['relatesTo']);
        }
        if (\array_key_exists('hasAdditionalAttachments', $data) && null !== $data['hasAdditionalAttachments']) {
            $object->setHasAdditionalAttachments($data['hasAdditionalAttachments']);
            unset($data['hasAdditionalAttachments']);
        } elseif (\array_key_exists('hasAdditionalAttachments', $data) && null === $data['hasAdditionalAttachments']) {
            $object->setHasAdditionalAttachments(null);
            unset($data['hasAdditionalAttachments']);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\MessageAttachmentInfoVBeta1::class, 'json', $context);
            }
            $object->setAttachments($values);
            unset($data['attachments']);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
            unset($data['attachments']);
        }
        if (\array_key_exists('additionalInformation', $data) && null !== $data['additionalInformation']) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], \Em411\Allegro\Api\Model\MessageAdditionalInformation::class, 'json', $context));
            unset($data['additionalInformation']);
        } elseif (\array_key_exists('additionalInformation', $data) && null === $data['additionalInformation']) {
            $object->setAdditionalInformation(null);
            unset($data['additionalInformation']);
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
        $dataArray['author'] = null === $data->getAuthor() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAuthor(), 'json', $context));
        $dataArray['text'] = $data->getText();
        $dataArray['subject'] = $data->getSubject();
        $dataArray['relatesTo'] = null === $data->getRelatesTo() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getRelatesTo(), 'json', $context));
        $dataArray['hasAdditionalAttachments'] = $data->getHasAdditionalAttachments();
        $values = [];
        foreach ($data->getAttachments() as $value) {
            $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['attachments'] = $values;
        $dataArray['additionalInformation'] = null === $data->getAdditionalInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalInformation(), 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\MessageVBeta1::class => false];
    }
}
