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

class OfferAutomaticPricingCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\OfferAutomaticPricingCommand::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\OfferAutomaticPricingCommand::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\OfferAutomaticPricingCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('modification', $data) && null !== $data['modification']) {
            $value = $data['modification'];
            if (\is_array($data['modification'])) {
                $value = $this->denormalizer->denormalize($data['modification'], \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationSet::class, 'json', $context);
            } elseif (\is_array($data['modification'])) {
                $value = $this->denormalizer->denormalize($data['modification'], \Em411\Allegro\Api\Model\OfferAutomaticPricingModificationRemove::class, 'json', $context);
            }
            $object->setModification($value);
            unset($data['modification']);
        } elseif (\array_key_exists('modification', $data) && null === $data['modification']) {
            $object->setModification(null);
            unset($data['modification']);
        }
        if (\array_key_exists('offerCriteria', $data) && null !== $data['offerCriteria']) {
            $values = [];
            foreach ($data['offerCriteria'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\OfferCriterium::class, 'json', $context);
            }
            $object->setOfferCriteria($values);
            unset($data['offerCriteria']);
        } elseif (\array_key_exists('offerCriteria', $data) && null === $data['offerCriteria']) {
            $object->setOfferCriteria(null);
            unset($data['offerCriteria']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        $value = $data->getModification();
        if (\is_object($data->getModification())) {
            $value = null === $data->getModification() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getModification(), 'json', $context));
        } elseif (\is_object($data->getModification())) {
            $value = null === $data->getModification() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getModification(), 'json', $context));
        }
        $dataArray['modification'] = $value;
        $values = [];
        foreach ($data->getOfferCriteria() as $value_1) {
            $values[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['offerCriteria'] = $values;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\OfferAutomaticPricingCommand::class => false];
    }
}
