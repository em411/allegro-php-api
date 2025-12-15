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

class AfterSalesServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AfterSalesServices::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AfterSalesServices::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AfterSalesServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('impliedWarranty', $data) && null !== $data['impliedWarranty']) {
            $object->setImpliedWarranty($this->denormalizer->denormalize($data['impliedWarranty'], \Em411\Allegro\Api\Model\ImpliedWarranty::class, 'json', $context));
            unset($data['impliedWarranty']);
        } elseif (\array_key_exists('impliedWarranty', $data) && null === $data['impliedWarranty']) {
            $object->setImpliedWarranty(null);
        }
        if (\array_key_exists('returnPolicy', $data) && null !== $data['returnPolicy']) {
            $object->setReturnPolicy($this->denormalizer->denormalize($data['returnPolicy'], \Em411\Allegro\Api\Model\ReturnPolicy::class, 'json', $context));
            unset($data['returnPolicy']);
        } elseif (\array_key_exists('returnPolicy', $data) && null === $data['returnPolicy']) {
            $object->setReturnPolicy(null);
        }
        if (\array_key_exists('warranty', $data) && null !== $data['warranty']) {
            $object->setWarranty($this->denormalizer->denormalize($data['warranty'], \Em411\Allegro\Api\Model\Warranty::class, 'json', $context));
            unset($data['warranty']);
        } elseif (\array_key_exists('warranty', $data) && null === $data['warranty']) {
            $object->setWarranty(null);
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
        if ($data->isInitialized('impliedWarranty') && null !== $data->getImpliedWarranty()) {
            $dataArray['impliedWarranty'] = $this->normalizer->normalize($data->getImpliedWarranty(), 'json', $context);
        }
        if ($data->isInitialized('returnPolicy') && null !== $data->getReturnPolicy()) {
            $dataArray['returnPolicy'] = $this->normalizer->normalize($data->getReturnPolicy(), 'json', $context);
        }
        if ($data->isInitialized('warranty') && null !== $data->getWarranty()) {
            $dataArray['warranty'] = $this->normalizer->normalize($data->getWarranty(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\AfterSalesServices::class => false];
    }
}
