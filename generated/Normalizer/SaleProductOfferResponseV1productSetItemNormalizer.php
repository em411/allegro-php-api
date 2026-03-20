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

class SaleProductOfferResponseV1productSetItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItem();
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && \is_int($data['marketedBeforeGPSRObligation'])) {
            $data['marketedBeforeGPSRObligation'] = (bool) $data['marketedBeforeGPSRObligation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Em411\Allegro\Api\Model\ProductSetElementQuantityQuantity::class, 'json', $context));
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('product', $data) && null !== $data['product']) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItemproduct::class, 'json', $context));
            unset($data['product']);
        } elseif (\array_key_exists('product', $data) && null === $data['product']) {
            $object->setProduct(null);
        }
        if (\array_key_exists('responsiblePerson', $data) && null !== $data['responsiblePerson']) {
            $object->setResponsiblePerson($this->denormalizer->denormalize($data['responsiblePerson'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItemresponsiblePerson::class, 'json', $context));
            unset($data['responsiblePerson']);
        } elseif (\array_key_exists('responsiblePerson', $data) && null === $data['responsiblePerson']) {
            $object->setResponsiblePerson(null);
        }
        if (\array_key_exists('responsibleProducer', $data) && null !== $data['responsibleProducer']) {
            $object->setResponsibleProducer($this->denormalizer->denormalize($data['responsibleProducer'], \Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItemresponsibleProducer::class, 'json', $context));
            unset($data['responsibleProducer']);
        } elseif (\array_key_exists('responsibleProducer', $data) && null === $data['responsibleProducer']) {
            $object->setResponsibleProducer(null);
        }
        if (\array_key_exists('safetyInformation', $data) && null !== $data['safetyInformation']) {
            $object->setSafetyInformation($data['safetyInformation']);
            unset($data['safetyInformation']);
        } elseif (\array_key_exists('safetyInformation', $data) && null === $data['safetyInformation']) {
            $object->setSafetyInformation(null);
        }
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && null !== $data['marketedBeforeGPSRObligation']) {
            $object->setMarketedBeforeGPSRObligation($data['marketedBeforeGPSRObligation']);
            unset($data['marketedBeforeGPSRObligation']);
        } elseif (\array_key_exists('marketedBeforeGPSRObligation', $data) && null === $data['marketedBeforeGPSRObligation']) {
            $object->setMarketedBeforeGPSRObligation(null);
        }
        if (\array_key_exists('deposits', $data) && null !== $data['deposits']) {
            $values = [];
            foreach ($data['deposits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\ProductDeposit::class, 'json', $context);
            }
            $object->setDeposits($values);
            unset($data['deposits']);
        } elseif (\array_key_exists('deposits', $data) && null === $data['deposits']) {
            $object->setDeposits(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $this->normalizer->normalize($data->getQuantity(), 'json', $context);
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('responsiblePerson')) {
            $dataArray['responsiblePerson'] = $this->normalizer->normalize($data->getResponsiblePerson(), 'json', $context);
        }
        if ($data->isInitialized('responsibleProducer')) {
            $dataArray['responsibleProducer'] = $this->normalizer->normalize($data->getResponsibleProducer(), 'json', $context);
        }
        if ($data->isInitialized('safetyInformation')) {
            $dataArray['safetyInformation'] = $data->getSafetyInformation();
        }
        if ($data->isInitialized('marketedBeforeGPSRObligation')) {
            $dataArray['marketedBeforeGPSRObligation'] = $data->getMarketedBeforeGPSRObligation();
        }
        if ($data->isInitialized('deposits') && null !== $data->getDeposits()) {
            $values = [];
            foreach ($data->getDeposits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['deposits'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SaleProductOfferResponseV1productSetItem::class => false];
    }
}
