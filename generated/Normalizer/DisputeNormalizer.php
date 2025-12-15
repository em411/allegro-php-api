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

class DisputeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Dispute::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Dispute::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\Dispute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], \Em411\Allegro\Api\Model\Subject::class, 'json', $context));
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('messagesStatus', $data) && null !== $data['messagesStatus']) {
            $object->setMessagesStatus($data['messagesStatus']);
            unset($data['messagesStatus']);
        } elseif (\array_key_exists('messagesStatus', $data) && null === $data['messagesStatus']) {
            $object->setMessagesStatus(null);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\DisputeUser::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
        }
        if (\array_key_exists('checkoutForm', $data) && null !== $data['checkoutForm']) {
            $object->setCheckoutForm($this->denormalizer->denormalize($data['checkoutForm'], \Em411\Allegro\Api\Model\DisputeCheckoutForm::class, 'json', $context));
            unset($data['checkoutForm']);
        } elseif (\array_key_exists('checkoutForm', $data) && null === $data['checkoutForm']) {
            $object->setCheckoutForm(null);
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], \Em411\Allegro\Api\Model\DisputeFirstMessage::class, 'json', $context));
            unset($data['message']);
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }
        if (\array_key_exists('messagesCount', $data) && null !== $data['messagesCount']) {
            $object->setMessagesCount($data['messagesCount']);
            unset($data['messagesCount']);
        } elseif (\array_key_exists('messagesCount', $data) && null === $data['messagesCount']) {
            $object->setMessagesCount(null);
        }
        if (\array_key_exists('openedDate', $data) && null !== $data['openedDate']) {
            $object->setOpenedDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['openedDate']));
            unset($data['openedDate']);
        } elseif (\array_key_exists('openedDate', $data) && null === $data['openedDate']) {
            $object->setOpenedDate(null);
        }
        if (\array_key_exists('lastMessageCreationDate', $data) && null !== $data['lastMessageCreationDate']) {
            $object->setLastMessageCreationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageCreationDate']));
            unset($data['lastMessageCreationDate']);
        } elseif (\array_key_exists('lastMessageCreationDate', $data) && null === $data['lastMessageCreationDate']) {
            $object->setLastMessageCreationDate(null);
        }
        if (\array_key_exists('claim', $data) && null !== $data['claim']) {
            $object->setClaim($this->denormalizer->denormalize($data['claim'], \Em411\Allegro\Api\Model\DisputeClaim::class, 'json', $context));
            unset($data['claim']);
        } elseif (\array_key_exists('claim', $data) && null === $data['claim']) {
            $object->setClaim(null);
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
        $dataArray['subject'] = $this->normalizer->normalize($data->getSubject(), 'json', $context);
        $dataArray['status'] = $data->getStatus();
        $dataArray['messagesStatus'] = $data->getMessagesStatus();
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        $dataArray['checkoutForm'] = $this->normalizer->normalize($data->getCheckoutForm(), 'json', $context);
        $dataArray['message'] = $this->normalizer->normalize($data->getMessage(), 'json', $context);
        $dataArray['messagesCount'] = $data->getMessagesCount();
        if ($data->isInitialized('openedDate') && null !== $data->getOpenedDate()) {
            $dataArray['openedDate'] = $data->getOpenedDate()->format('Y-m-d\TH:i:sP');
        }
        $dataArray['lastMessageCreationDate'] = $data->getLastMessageCreationDate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('claim') && null !== $data->getClaim()) {
            $dataArray['claim'] = $this->normalizer->normalize($data->getClaim(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\Dispute::class => false];
    }
}
