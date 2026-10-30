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

class SaleProductOfferResponseV1ProductSetItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && \is_int($data['marketedBeforeGPSRObligation'])) {
            $data['marketedBeforeGPSRObligation'] = (bool) $data['marketedBeforeGPSRObligation'];
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Em411\Allegro\Api\Model\ProductSetElementQuantityQuantity::class, 'json', $context));
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
            unset($data['quantity']);
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemProduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
            unset($data['product']);
        }
        if (\array_key_exists('responsiblePerson', $data) && null !== $data['responsiblePerson']) {
            $object->setResponsiblePerson($this->denormalizer->denormalize($data['responsiblePerson'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemResponsiblePerson::class, 'json', $context));
            unset($data['responsiblePerson']);
        } elseif (\array_key_exists('responsiblePerson', $data) && null === $data['responsiblePerson']) {
            $object->setResponsiblePerson(null);
            unset($data['responsiblePerson']);
        }
        if (\array_key_exists('responsibleProducer', $data) && null !== $data['responsibleProducer']) {
            $object->setResponsibleProducer($this->denormalizer->denormalize($data['responsibleProducer'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItemResponsibleProducer::class, 'json', $context));
            unset($data['responsibleProducer']);
        } elseif (\array_key_exists('responsibleProducer', $data) && null === $data['responsibleProducer']) {
            $object->setResponsibleProducer(null);
            unset($data['responsibleProducer']);
        }
        if (\array_key_exists('safetyInformation', $data) && null !== $data['safetyInformation']) {
            $value = $data['safetyInformation'];
            if (\is_array($data['safetyInformation']) && (\array_key_exists('type', $data['safetyInformation']) && 'TEXT' == $data['safetyInformation']['type']) && \array_key_exists('description', $data['safetyInformation']) && (isset($data['safetyInformation']['type']) && 'TEXT' == $data['safetyInformation']['type'])) {
                $value = $this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\TextSafetyInformation::class, 'json', $context);
            } elseif (\is_array($data['safetyInformation']) && (\array_key_exists('type', $data['safetyInformation']) && 'ATTACHMENTS' == $data['safetyInformation']['type']) && \array_key_exists('attachments', $data['safetyInformation']) && (isset($data['safetyInformation']['type']) && 'ATTACHMENTS' == $data['safetyInformation']['type'])) {
                $value = $this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\AttachmentsSafetyInformation::class, 'json', $context);
            } elseif (\is_array($data['safetyInformation']) && (\array_key_exists('type', $data['safetyInformation']) && 'NO_SAFETY_INFORMATION' == $data['safetyInformation']['type']) && (isset($data['safetyInformation']['type']) && 'NO_SAFETY_INFORMATION' == $data['safetyInformation']['type'])) {
                $value = $this->denormalizer->denormalize($data['safetyInformation'], \Em411\Allegro\Api\Model\NoSafetyInformation::class, 'json', $context);
            }
            $object->setSafetyInformation($value);
            unset($data['safetyInformation']);
        } elseif (\array_key_exists('safetyInformation', $data) && null === $data['safetyInformation']) {
            $object->setSafetyInformation(null);
            unset($data['safetyInformation']);
        }
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && null !== $data['marketedBeforeGPSRObligation']) {
            $object->setMarketedBeforeGPSRObligation($data['marketedBeforeGPSRObligation']);
            unset($data['marketedBeforeGPSRObligation']);
        } elseif (\array_key_exists('marketedBeforeGPSRObligation', $data) && null === $data['marketedBeforeGPSRObligation']) {
            $object->setMarketedBeforeGPSRObligation(null);
            unset($data['marketedBeforeGPSRObligation']);
        }
        if (\array_key_exists('deposits', $data) && null !== $data['deposits']) {
            $values = [];
            foreach ($data['deposits'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\ProductDeposit::class, 'json', $context);
            }
            $object->setDeposits($values);
            unset($data['deposits']);
        } elseif (\array_key_exists('deposits', $data) && null === $data['deposits']) {
            $object->setDeposits(null);
            unset($data['deposits']);
        }
        if (\array_key_exists('composition', $data) && null !== $data['composition']) {
            $object->setComposition($this->denormalizer->denormalize($data['composition'], \Em411\Allegro\Api\Model\ProductSetElementCompositionResponseComposition::class, 'json', $context));
            unset($data['composition']);
        } elseif (\array_key_exists('composition', $data) && null === $data['composition']) {
            $object->setComposition(null);
            unset($data['composition']);
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
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = null === $data->getQuantity() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getQuantity(), 'json', $context));
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = null === $data->getProduct() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProduct(), 'json', $context));
        }
        if ($data->isInitialized('responsiblePerson') && null !== $data->getResponsiblePerson()) {
            $dataArray['responsiblePerson'] = null === $data->getResponsiblePerson() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getResponsiblePerson(), 'json', $context));
        }
        if ($data->isInitialized('responsibleProducer') && null !== $data->getResponsibleProducer()) {
            $dataArray['responsibleProducer'] = null === $data->getResponsibleProducer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getResponsibleProducer(), 'json', $context));
        }
        if ($data->isInitialized('safetyInformation') && null !== $data->getSafetyInformation()) {
            $value = $data->getSafetyInformation();
            if (\is_object($data->getSafetyInformation())) {
                $value = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
            } elseif (\is_object($data->getSafetyInformation())) {
                $value = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
            } elseif (\is_object($data->getSafetyInformation())) {
                $value = null === $data->getSafetyInformation() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSafetyInformation(), 'json', $context));
            }
            $dataArray['safetyInformation'] = $value;
        }
        if ($data->isInitialized('marketedBeforeGPSRObligation') && null !== $data->getMarketedBeforeGPSRObligation()) {
            $dataArray['marketedBeforeGPSRObligation'] = $data->getMarketedBeforeGPSRObligation();
        }
        if ($data->isInitialized('deposits') && null !== $data->getDeposits()) {
            $values = [];
            foreach ($data->getDeposits() as $value_1) {
                $values[] = null === $value_1 ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['deposits'] = $values;
        }
        if ($data->isInitialized('composition') && null !== $data->getComposition()) {
            $dataArray['composition'] = null === $data->getComposition() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getComposition(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SaleProductOfferResponseV1ProductSetItem::class => false];
    }
}
