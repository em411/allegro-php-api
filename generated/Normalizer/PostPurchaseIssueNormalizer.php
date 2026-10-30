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

class PostPurchaseIssueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PostPurchaseIssue::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PostPurchaseIssue::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\PostPurchaseIssue();
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
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && null === $data['referenceNumber']) {
            $object->setReferenceNumber(null);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('decisionDueDate', $data) && null !== $data['decisionDueDate']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['decisionDueDate']);
            if (false === $date) {
                if (\is_string($data['decisionDueDate']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['decisionDueDate'])) {
                    try {
                        $date = new \DateTime($data['decisionDueDate']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['decisionDueDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['decisionDueDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setDecisionDueDate($date);
            unset($data['decisionDueDate']);
        } elseif (\array_key_exists('decisionDueDate', $data) && null === $data['decisionDueDate']) {
            $object->setDecisionDueDate(null);
            unset($data['decisionDueDate']);
        }
        if (\array_key_exists('openedDate', $data) && null !== $data['openedDate']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['openedDate']);
            if (false === $date_1) {
                if (\is_string($data['openedDate']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['openedDate'])) {
                    try {
                        $date_1 = new \DateTime($data['openedDate']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['openedDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['openedDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setOpenedDate($date_1);
            unset($data['openedDate']);
        } elseif (\array_key_exists('openedDate', $data) && null === $data['openedDate']) {
            $object->setOpenedDate(null);
            unset($data['openedDate']);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
            unset($data['subject']);
        }
        if (\array_key_exists('buyer', $data) && null !== $data['buyer']) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Em411\Allegro\Api\Model\PostPurchaseIssueUser::class, 'json', $context));
            unset($data['buyer']);
        } elseif (\array_key_exists('buyer', $data) && null === $data['buyer']) {
            $object->setBuyer(null);
            unset($data['buyer']);
        }
        if (\array_key_exists('checkoutForm', $data) && null !== $data['checkoutForm']) {
            $object->setCheckoutForm($this->denormalizer->denormalize($data['checkoutForm'], \Em411\Allegro\Api\Model\PostPurchaseIssueCheckoutForm::class, 'json', $context));
            unset($data['checkoutForm']);
        } elseif (\array_key_exists('checkoutForm', $data) && null === $data['checkoutForm']) {
            $object->setCheckoutForm(null);
            unset($data['checkoutForm']);
        }
        if (\array_key_exists('currentState', $data) && null !== $data['currentState']) {
            $object->setCurrentState($this->denormalizer->denormalize($data['currentState'], \Em411\Allegro\Api\Model\PostPurchaseIssueState::class, 'json', $context));
            unset($data['currentState']);
        } elseif (\array_key_exists('currentState', $data) && null === $data['currentState']) {
            $object->setCurrentState(null);
            unset($data['currentState']);
        }
        if (\array_key_exists('chat', $data) && null !== $data['chat']) {
            $object->setChat($this->denormalizer->denormalize($data['chat'], \Em411\Allegro\Api\Model\PostPurchaseIssueChat::class, 'json', $context));
            unset($data['chat']);
        } elseif (\array_key_exists('chat', $data) && null === $data['chat']) {
            $object->setChat(null);
            unset($data['chat']);
        }
        if (\array_key_exists('expectations', $data) && null !== $data['expectations']) {
            $values = [];
            foreach ($data['expectations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\PostPurchaseIssueExpectation::class, 'json', $context);
            }
            $object->setExpectations($values);
            unset($data['expectations']);
        } elseif (\array_key_exists('expectations', $data) && null === $data['expectations']) {
            $object->setExpectations(null);
            unset($data['expectations']);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\PostPurchaseIssueOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\PostPurchaseIssueProduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
            unset($data['product']);
        }
        if (\array_key_exists('reason', $data) && null !== $data['reason']) {
            $object->setReason($this->denormalizer->denormalize($data['reason'], \Em411\Allegro\Api\Model\PostPurchaseIssueReason::class, 'json', $context));
            unset($data['reason']);
        } elseif (\array_key_exists('reason', $data) && null === $data['reason']) {
            $object->setReason(null);
            unset($data['reason']);
        }
        if (\array_key_exists('right', $data) && null !== $data['right']) {
            $object->setRight($data['right']);
            unset($data['right']);
        } elseif (\array_key_exists('right', $data) && null === $data['right']) {
            $object->setRight(null);
            unset($data['right']);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values_1 = [];
            foreach ($data['attachments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\PostPurchaseIssueAttachment::class, 'json', $context);
            }
            $object->setAttachments($values_1);
            unset($data['attachments']);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
            unset($data['attachments']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('decisionDueDate') && null !== $data->getDecisionDueDate()) {
            $dataArray['decisionDueDate'] = $data->getDecisionDueDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('openedDate') && null !== $data->getOpenedDate()) {
            $dataArray['openedDate'] = $data->getOpenedDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('buyer') && null !== $data->getBuyer()) {
            $dataArray['buyer'] = null === $data->getBuyer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBuyer(), 'json', $context));
        }
        if ($data->isInitialized('checkoutForm') && null !== $data->getCheckoutForm()) {
            $dataArray['checkoutForm'] = null === $data->getCheckoutForm() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCheckoutForm(), 'json', $context));
        }
        if ($data->isInitialized('currentState') && null !== $data->getCurrentState()) {
            $dataArray['currentState'] = null === $data->getCurrentState() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCurrentState(), 'json', $context));
        }
        if ($data->isInitialized('chat') && null !== $data->getChat()) {
            $dataArray['chat'] = null === $data->getChat() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getChat(), 'json', $context));
        }
        if ($data->isInitialized('expectations') && null !== $data->getExpectations()) {
            $values = [];
            foreach ($data->getExpectations() as $value) {
                $values[] = null === $value ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['expectations'] = $values;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = null === $data->getProduct() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProduct(), 'json', $context));
        }
        if ($data->isInitialized('reason') && null !== $data->getReason()) {
            $dataArray['reason'] = null === $data->getReason() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReason(), 'json', $context));
        }
        if ($data->isInitialized('right') && null !== $data->getRight()) {
            $dataArray['right'] = $data->getRight();
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values_1 = [];
            foreach ($data->getAttachments() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attachments'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\PostPurchaseIssue::class => false];
    }
}
