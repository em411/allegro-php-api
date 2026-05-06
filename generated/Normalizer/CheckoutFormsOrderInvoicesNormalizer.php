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

class CheckoutFormsOrderInvoicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoices::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoices::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoices();
        if (\array_key_exists('hasExternalInvoices', $data) && \is_int($data['hasExternalInvoices'])) {
            $data['hasExternalInvoices'] = (bool) $data['hasExternalInvoices'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderMode', $data) && null !== $data['orderMode']) {
            $object->setOrderMode($data['orderMode']);
            unset($data['orderMode']);
        } elseif (\array_key_exists('orderMode', $data) && null === $data['orderMode']) {
            $object->setOrderMode(null);
        }
        if (\array_key_exists('invoices', $data) && null !== $data['invoices']) {
            $values = [];
            foreach ($data['invoices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\CheckoutFormsOrderInvoice::class, 'json', $context);
            }
            $object->setInvoices($values);
            unset($data['invoices']);
        } elseif (\array_key_exists('invoices', $data) && null === $data['invoices']) {
            $object->setInvoices(null);
        }
        if (\array_key_exists('links', $data) && null !== $data['links']) {
            $values_1 = [];
            foreach ($data['links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\CheckoutFormsOrderLink::class, 'json', $context);
            }
            $object->setLinks($values_1);
            unset($data['links']);
        } elseif (\array_key_exists('links', $data) && null === $data['links']) {
            $object->setLinks(null);
        }
        if (\array_key_exists('hasExternalInvoices', $data) && null !== $data['hasExternalInvoices']) {
            $object->setHasExternalInvoices($data['hasExternalInvoices']);
            unset($data['hasExternalInvoices']);
        } elseif (\array_key_exists('hasExternalInvoices', $data) && null === $data['hasExternalInvoices']) {
            $object->setHasExternalInvoices(null);
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
        if ($data->isInitialized('orderMode') && null !== $data->getOrderMode()) {
            $dataArray['orderMode'] = $data->getOrderMode();
        }
        if ($data->isInitialized('invoices') && null !== $data->getInvoices()) {
            $values = [];
            foreach ($data->getInvoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['invoices'] = $values;
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_1 = [];
            foreach ($data->getLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['links'] = $values_1;
        }
        if ($data->isInitialized('hasExternalInvoices') && null !== $data->getHasExternalInvoices()) {
            $dataArray['hasExternalInvoices'] = $data->getHasExternalInvoices();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CheckoutFormsOrderInvoices::class => false];
    }
}
