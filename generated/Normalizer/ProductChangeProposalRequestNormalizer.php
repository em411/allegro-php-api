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

class ProductChangeProposalRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ProductChangeProposalRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ProductChangeProposalRequest::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ProductChangeProposalRequest();
        if (\array_key_exists('notifyViaEmailAfterVerification', $data) && \is_int($data['notifyViaEmailAfterVerification'])) {
            $data['notifyViaEmailAfterVerification'] = (bool) $data['notifyViaEmailAfterVerification'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('note', $data) && null !== $data['note']) {
            $object->setNote($data['note']);
            unset($data['note']);
        } elseif (\array_key_exists('note', $data) && null === $data['note']) {
            $object->setNote(null);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCategory($values);
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values_1 = [];
            foreach ($data['images'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ImageUrl::class, 'json', $context);
            }
            $object->setImages($values_1);
            unset($data['images']);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
        }
        if (\array_key_exists('parameters', $data) && null !== $data['parameters']) {
            $values_2 = [];
            foreach ($data['parameters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\ProductParameter::class, 'json', $context);
            }
            $object->setParameters($values_2);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && null === $data['parameters']) {
            $object->setParameters(null);
        }
        if (\array_key_exists('notifyViaEmailAfterVerification', $data) && null !== $data['notifyViaEmailAfterVerification']) {
            $object->setNotifyViaEmailAfterVerification($data['notifyViaEmailAfterVerification']);
            unset($data['notifyViaEmailAfterVerification']);
        } elseif (\array_key_exists('notifyViaEmailAfterVerification', $data) && null === $data['notifyViaEmailAfterVerification']) {
            $object->setNotifyViaEmailAfterVerification(null);
        }
        if (\array_key_exists('language', $data) && null !== $data['language']) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        } elseif (\array_key_exists('language', $data) && null === $data['language']) {
            $object->setLanguage(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        $values = [];
        foreach ($data->getCategory() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['category'] = $values;
        $values_1 = [];
        foreach ($data->getImages() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['images'] = $values_1;
        $values_2 = [];
        foreach ($data->getParameters() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['parameters'] = $values_2;
        if ($data->isInitialized('notifyViaEmailAfterVerification') && null !== $data->getNotifyViaEmailAfterVerification()) {
            $dataArray['notifyViaEmailAfterVerification'] = $data->getNotifyViaEmailAfterVerification();
        }
        $dataArray['language'] = $data->getLanguage();
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\ProductChangeProposalRequest::class => false];
    }
}
