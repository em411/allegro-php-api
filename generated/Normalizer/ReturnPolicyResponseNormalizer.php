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

class ReturnPolicyResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ReturnPolicyResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ReturnPolicyResponse::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ReturnPolicyResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('seller', $data) && null !== $data['seller']) {
            $object->setSeller($this->denormalizer->denormalize($data['seller'], \Em411\Allegro\Api\Model\Seller::class, 'json', $context));
            unset($data['seller']);
        } elseif (\array_key_exists('seller', $data) && null === $data['seller']) {
            $object->setSeller(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('availability', $data) && null !== $data['availability']) {
            $object->setAvailability($this->denormalizer->denormalize($data['availability'], \Em411\Allegro\Api\Model\ReturnPolicyAvailability::class, 'json', $context));
            unset($data['availability']);
        } elseif (\array_key_exists('availability', $data) && null === $data['availability']) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('withdrawalPeriod', $data) && null !== $data['withdrawalPeriod']) {
            $object->setWithdrawalPeriod($data['withdrawalPeriod']);
            unset($data['withdrawalPeriod']);
        } elseif (\array_key_exists('withdrawalPeriod', $data) && null === $data['withdrawalPeriod']) {
            $object->setWithdrawalPeriod(null);
        }
        if (\array_key_exists('returnCost', $data) && null !== $data['returnCost']) {
            $object->setReturnCost($this->denormalizer->denormalize($data['returnCost'], \Em411\Allegro\Api\Model\ReturnPolicyReturnCost::class, 'json', $context));
            unset($data['returnCost']);
        } elseif (\array_key_exists('returnCost', $data) && null === $data['returnCost']) {
            $object->setReturnCost(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Em411\Allegro\Api\Model\ReturnPolicyAddress::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('contact', $data) && null !== $data['contact']) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Em411\Allegro\Api\Model\ReturnPolicyContact::class, 'json', $context));
            unset($data['contact']);
        } elseif (\array_key_exists('contact', $data) && null === $data['contact']) {
            $object->setContact(null);
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Em411\Allegro\Api\Model\ReturnPolicyOptions::class, 'json', $context));
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
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
        $dataArray['seller'] = $this->normalizer->normalize($data->getSeller(), 'json', $context);
        $dataArray['name'] = $data->getName();
        $dataArray['availability'] = $this->normalizer->normalize($data->getAvailability(), 'json', $context);
        if ($data->isInitialized('withdrawalPeriod')) {
            $dataArray['withdrawalPeriod'] = $data->getWithdrawalPeriod();
        }
        if ($data->isInitialized('returnCost')) {
            $dataArray['returnCost'] = $this->normalizer->normalize($data->getReturnCost(), 'json', $context);
        }
        if ($data->isInitialized('address')) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('contact')) {
            $dataArray['contact'] = $this->normalizer->normalize($data->getContact(), 'json', $context);
        }
        if ($data->isInitialized('options')) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\ReturnPolicyResponse::class => false];
    }
}
