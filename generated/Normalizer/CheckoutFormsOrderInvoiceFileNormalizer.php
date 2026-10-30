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

class CheckoutFormsOrderInvoiceFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFile::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFile::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
            unset($data['name']);
        }
        if (\array_key_exists('uploadedAt', $data) && null !== $data['uploadedAt']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['uploadedAt']);
            if (false === $date) {
                if (\is_string($data['uploadedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['uploadedAt'])) {
                    try {
                        $date = new \DateTime($data['uploadedAt']);
                    } catch (\Exception) {
                        throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['uploadedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Em411\Allegro\Api\Runtime\Normalizer\InvalidDateException($data['uploadedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setUploadedAt($date);
            unset($data['uploadedAt']);
        } elseif (\array_key_exists('uploadedAt', $data) && null === $data['uploadedAt']) {
            $object->setUploadedAt(null);
            unset($data['uploadedAt']);
        }
        if (\array_key_exists('securityVerification', $data) && null !== $data['securityVerification']) {
            $object->setSecurityVerification($this->denormalizer->denormalize($data['securityVerification'], \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFileSecurityVerification::class, 'json', $context));
            unset($data['securityVerification']);
        } elseif (\array_key_exists('securityVerification', $data) && null === $data['securityVerification']) {
            $object->setSecurityVerification(null);
            unset($data['securityVerification']);
        }
        if (\array_key_exists('verification', $data) && null !== $data['verification']) {
            $object->setVerification($this->denormalizer->denormalize($data['verification'], \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFileVerification::class, 'json', $context));
            unset($data['verification']);
        } elseif (\array_key_exists('verification', $data) && null === $data['verification']) {
            $object->setVerification(null);
            unset($data['verification']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('uploadedAt') && null !== $data->getUploadedAt()) {
            $dataArray['uploadedAt'] = $data->getUploadedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('securityVerification') && null !== $data->getSecurityVerification()) {
            $dataArray['securityVerification'] = null === $data->getSecurityVerification() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSecurityVerification(), 'json', $context));
        }
        if ($data->isInitialized('verification') && null !== $data->getVerification()) {
            $dataArray['verification'] = null === $data->getVerification() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getVerification(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\CheckoutFormsOrderInvoiceFile::class => false];
    }
}
