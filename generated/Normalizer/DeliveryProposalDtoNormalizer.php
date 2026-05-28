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

class DeliveryProposalDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\DeliveryProposalDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\DeliveryProposalDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\DeliveryProposalDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderId', $data) && null !== $data['orderId']) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        } elseif (\array_key_exists('orderId', $data) && null === $data['orderId']) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('suggestedInput', $data) && null !== $data['suggestedInput']) {
            $object->setSuggestedInput($this->denormalizer->denormalize($data['suggestedInput'], \Em411\Allegro\Api\Model\ShipmentCreateRequestDto::class, 'json', $context));
            unset($data['suggestedInput']);
        } elseif (\array_key_exists('suggestedInput', $data) && null === $data['suggestedInput']) {
            $object->setSuggestedInput(null);
        }
        if (\array_key_exists('deliveryOptions', $data) && null !== $data['deliveryOptions']) {
            $values = [];
            foreach ($data['deliveryOptions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\DeliveryOptionDto::class, 'json', $context);
            }
            $object->setDeliveryOptions($values);
            unset($data['deliveryOptions']);
        } elseif (\array_key_exists('deliveryOptions', $data) && null === $data['deliveryOptions']) {
            $object->setDeliveryOptions(null);
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
        if ($data->isInitialized('orderId') && null !== $data->getOrderId()) {
            $dataArray['orderId'] = $data->getOrderId();
        }
        if ($data->isInitialized('suggestedInput') && null !== $data->getSuggestedInput()) {
            $dataArray['suggestedInput'] = $this->normalizer->normalize($data->getSuggestedInput(), 'json', $context);
        }
        if ($data->isInitialized('deliveryOptions') && null !== $data->getDeliveryOptions()) {
            $values = [];
            foreach ($data->getDeliveryOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['deliveryOptions'] = $values;
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
        return [\Em411\Allegro\Api\Model\DeliveryProposalDto::class => false];
    }
}
