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

class CategoryTaxSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryTaxSettings::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryTaxSettings::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CategoryTaxSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subjects', $data) && null !== $data['subjects']) {
            $values = [];
            foreach ($data['subjects'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\TaxSubject::class, 'json', $context);
            }
            $object->setSubjects($values);
            unset($data['subjects']);
        } elseif (\array_key_exists('subjects', $data) && null === $data['subjects']) {
            $object->setSubjects(null);
        }
        if (\array_key_exists('rates', $data) && null !== $data['rates']) {
            $values_1 = [];
            foreach ($data['rates'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\TaxRate::class, 'json', $context);
            }
            $object->setRates($values_1);
            unset($data['rates']);
        } elseif (\array_key_exists('rates', $data) && null === $data['rates']) {
            $object->setRates(null);
        }
        if (\array_key_exists('exemptions', $data) && null !== $data['exemptions']) {
            $values_2 = [];
            foreach ($data['exemptions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Em411\Allegro\Api\Model\TaxExemption::class, 'json', $context);
            }
            $object->setExemptions($values_2);
            unset($data['exemptions']);
        } elseif (\array_key_exists('exemptions', $data) && null === $data['exemptions']) {
            $object->setExemptions(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('subjects') && null !== $data->getSubjects()) {
            $values = [];
            foreach ($data->getSubjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['subjects'] = $values;
        }
        if ($data->isInitialized('rates') && null !== $data->getRates()) {
            $values_1 = [];
            foreach ($data->getRates() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['rates'] = $values_1;
        }
        if ($data->isInitialized('exemptions') && null !== $data->getExemptions()) {
            $values_2 = [];
            foreach ($data->getExemptions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['exemptions'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\CategoryTaxSettings::class => false];
    }
}
