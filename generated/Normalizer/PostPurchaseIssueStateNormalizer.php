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

class PostPurchaseIssueStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PostPurchaseIssueState::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PostPurchaseIssueState::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\PostPurchaseIssueState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('returnRequired', $data) && \is_int($data['returnRequired'])) {
            $data['returnRequired'] = (bool) $data['returnRequired'];
        }
        if (\array_key_exists('chatActive', $data) && \is_int($data['chatActive'])) {
            $data['chatActive'] = (bool) $data['chatActive'];
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
            unset($data['status']);
        }
        if (\array_key_exists('statusDueDate', $data) && null !== $data['statusDueDate']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['statusDueDate']);
            if (false === $date) {
                if (\is_string($data['statusDueDate']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['statusDueDate'])) {
                    try {
                        $date = new \DateTime($data['statusDueDate']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['statusDueDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['statusDueDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setStatusDueDate($date);
            unset($data['statusDueDate']);
        } elseif (\array_key_exists('statusDueDate', $data) && null === $data['statusDueDate']) {
            $object->setStatusDueDate(null);
            unset($data['statusDueDate']);
        }
        if (\array_key_exists('returnRequired', $data) && null !== $data['returnRequired']) {
            $object->setReturnRequired($data['returnRequired']);
            unset($data['returnRequired']);
        } elseif (\array_key_exists('returnRequired', $data) && null === $data['returnRequired']) {
            $object->setReturnRequired(null);
            unset($data['returnRequired']);
        }
        if (\array_key_exists('chatActive', $data) && null !== $data['chatActive']) {
            $object->setChatActive($data['chatActive']);
            unset($data['chatActive']);
        } elseif (\array_key_exists('chatActive', $data) && null === $data['chatActive']) {
            $object->setChatActive(null);
            unset($data['chatActive']);
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
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusDueDate') && null !== $data->getStatusDueDate()) {
            $dataArray['statusDueDate'] = $data->getStatusDueDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('returnRequired') && null !== $data->getReturnRequired()) {
            $dataArray['returnRequired'] = $data->getReturnRequired();
        }
        if ($data->isInitialized('chatActive') && null !== $data->getChatActive()) {
            $dataArray['chatActive'] = $data->getChatActive();
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
        return [\Em411\Allegro\Api\Model\PostPurchaseIssueState::class => false];
    }
}
