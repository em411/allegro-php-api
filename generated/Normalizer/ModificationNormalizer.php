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

class ModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Modification::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Modification::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\Modification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('additionalServicesGroup', $data) && null !== $data['additionalServicesGroup']) {
            $object->setAdditionalServicesGroup($this->denormalizer->denormalize($data['additionalServicesGroup'], \Em411\Allegro\Api\Model\AdditionalServicesGroup::class, 'json', $context));
            unset($data['additionalServicesGroup']);
        } elseif (\array_key_exists('additionalServicesGroup', $data) && null === $data['additionalServicesGroup']) {
            $object->setAdditionalServicesGroup(null);
            unset($data['additionalServicesGroup']);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Em411\Allegro\Api\Model\ModificationDelivery::class, 'json', $context));
            unset($data['delivery']);
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
            unset($data['delivery']);
        }
        if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Em411\Allegro\Api\Model\ModificationDiscounts::class, 'json', $context));
            unset($data['discounts']);
        } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
            $object->setDiscounts(null);
            unset($data['discounts']);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Em411\Allegro\Api\Model\Location::class, 'json', $context));
            unset($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
            unset($data['location']);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Em411\Allegro\Api\Model\ModificationPayments::class, 'json', $context));
            unset($data['payments']);
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
            unset($data['payments']);
        }
        if (\array_key_exists('sizeTable', $data) && null !== $data['sizeTable']) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Em411\Allegro\Api\Model\SizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        } elseif (\array_key_exists('sizeTable', $data) && null === $data['sizeTable']) {
            $object->setSizeTable(null);
            unset($data['sizeTable']);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\ModificationPublication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
            unset($data['publication']);
        }
        if (\array_key_exists('responsiblePerson', $data) && null !== $data['responsiblePerson']) {
            $object->setResponsiblePerson($this->denormalizer->denormalize($data['responsiblePerson'], \Em411\Allegro\Api\Model\ModificationResponsiblePerson::class, 'json', $context));
            unset($data['responsiblePerson']);
        } elseif (\array_key_exists('responsiblePerson', $data) && null === $data['responsiblePerson']) {
            $object->setResponsiblePerson(null);
            unset($data['responsiblePerson']);
        }
        if (\array_key_exists('responsibleProducer', $data) && null !== $data['responsibleProducer']) {
            $object->setResponsibleProducer($this->denormalizer->denormalize($data['responsibleProducer'], \Em411\Allegro\Api\Model\ModificationResponsibleProducer::class, 'json', $context));
            unset($data['responsibleProducer']);
        } elseif (\array_key_exists('responsibleProducer', $data) && null === $data['responsibleProducer']) {
            $object->setResponsibleProducer(null);
            unset($data['responsibleProducer']);
        }
        if (\array_key_exists('safetyInformation', $data) && null !== $data['safetyInformation']) {
            $object->setSafetyInformation($this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\ModificationSafetyInformation::class, 'json', $context));
            unset($data['safetyInformation']);
        } elseif (\array_key_exists('safetyInformation', $data) && null === $data['safetyInformation']) {
            $object->setSafetyInformation(null);
            unset($data['safetyInformation']);
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
        if ($data->isInitialized('additionalServicesGroup') && null !== $data->getAdditionalServicesGroup()) {
            $dataArray['additionalServicesGroup'] = null === $data->getAdditionalServicesGroup() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalServicesGroup(), 'json', $context));
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = null === $data->getDelivery() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDelivery(), 'json', $context));
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = null === $data->getDiscounts() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDiscounts(), 'json', $context));
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = null === $data->getLocation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getLocation(), 'json', $context));
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = null === $data->getPayments() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPayments(), 'json', $context));
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = null === $data->getSizeTable() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSizeTable(), 'json', $context));
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = null === $data->getPublication() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPublication(), 'json', $context));
        }
        if ($data->isInitialized('responsiblePerson') && null !== $data->getResponsiblePerson()) {
            $dataArray['responsiblePerson'] = null === $data->getResponsiblePerson() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getResponsiblePerson(), 'json', $context));
        }
        if ($data->isInitialized('responsibleProducer') && null !== $data->getResponsibleProducer()) {
            $dataArray['responsibleProducer'] = null === $data->getResponsibleProducer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getResponsibleProducer(), 'json', $context));
        }
        if ($data->isInitialized('safetyInformation') && null !== $data->getSafetyInformation()) {
            $dataArray['safetyInformation'] = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\Modification::class => false];
    }
}
