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

class CheckoutFormInvoiceAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddress::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddress::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('street', $data) && null !== $data['street']) {
            $object->setStreet($data['street']);
            unset($data['street']);
        } elseif (\array_key_exists('street', $data) && null === $data['street']) {
            $object->setStreet(null);
        }
        if (\array_key_exists('city', $data) && null !== $data['city']) {
            $object->setCity($data['city']);
            unset($data['city']);
        } elseif (\array_key_exists('city', $data) && null === $data['city']) {
            $object->setCity(null);
        }
        if (\array_key_exists('zipCode', $data) && null !== $data['zipCode']) {
            $object->setZipCode($data['zipCode']);
            unset($data['zipCode']);
        } elseif (\array_key_exists('zipCode', $data) && null === $data['zipCode']) {
            $object->setZipCode(null);
        }
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        } elseif (\array_key_exists('countryCode', $data) && null === $data['countryCode']) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('company', $data) && null !== $data['company']) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddressCompany::class, 'json', $context));
            unset($data['company']);
        } elseif (\array_key_exists('company', $data) && null === $data['company']) {
            $object->setCompany(null);
        }
        if (\array_key_exists('naturalPerson', $data) && null !== $data['naturalPerson']) {
            $object->setNaturalPerson($this->denormalizer->denormalize($data['naturalPerson'], \Em411\Allegro\Api\Model\CheckoutFormInvoiceAddressNaturalPerson::class, 'json', $context));
            unset($data['naturalPerson']);
        } elseif (\array_key_exists('naturalPerson', $data) && null === $data['naturalPerson']) {
            $object->setNaturalPerson(null);
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
        $dataArray['street'] = $data->getStreet();
        $dataArray['city'] = $data->getCity();
        $dataArray['zipCode'] = $data->getZipCode();
        $dataArray['countryCode'] = $data->getCountryCode();
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $this->normalizer->normalize($data->getCompany(), 'json', $context);
        }
        if ($data->isInitialized('naturalPerson') && null !== $data->getNaturalPerson()) {
            $dataArray['naturalPerson'] = $this->normalizer->normalize($data->getNaturalPerson(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\CheckoutFormInvoiceAddress::class => false];
    }
}
