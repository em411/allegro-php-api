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

class CategoryOptionsDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\CategoryOptionsDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\CategoryOptionsDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\CategoryOptionsDto();
        if (\array_key_exists('advertisement', $data) && \is_int($data['advertisement'])) {
            $data['advertisement'] = (bool) $data['advertisement'];
        }
        if (\array_key_exists('variantsByColorPatternAllowed', $data) && \is_int($data['variantsByColorPatternAllowed'])) {
            $data['variantsByColorPatternAllowed'] = (bool) $data['variantsByColorPatternAllowed'];
        }
        if (\array_key_exists('offersWithProductPublicationEnabled', $data) && \is_int($data['offersWithProductPublicationEnabled'])) {
            $data['offersWithProductPublicationEnabled'] = (bool) $data['offersWithProductPublicationEnabled'];
        }
        if (\array_key_exists('productCreationEnabled', $data) && \is_int($data['productCreationEnabled'])) {
            $data['productCreationEnabled'] = (bool) $data['productCreationEnabled'];
        }
        if (\array_key_exists('sellerCanRequirePurchaseComments', $data) && \is_int($data['sellerCanRequirePurchaseComments'])) {
            $data['sellerCanRequirePurchaseComments'] = (bool) $data['sellerCanRequirePurchaseComments'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('advertisement', $data) && null !== $data['advertisement']) {
            $object->setAdvertisement($data['advertisement']);
            unset($data['advertisement']);
        } elseif (\array_key_exists('advertisement', $data) && null === $data['advertisement']) {
            $object->setAdvertisement(null);
        }
        if (\array_key_exists('variantsByColorPatternAllowed', $data) && null !== $data['variantsByColorPatternAllowed']) {
            $object->setVariantsByColorPatternAllowed($data['variantsByColorPatternAllowed']);
            unset($data['variantsByColorPatternAllowed']);
        } elseif (\array_key_exists('variantsByColorPatternAllowed', $data) && null === $data['variantsByColorPatternAllowed']) {
            $object->setVariantsByColorPatternAllowed(null);
        }
        if (\array_key_exists('offersWithProductPublicationEnabled', $data) && null !== $data['offersWithProductPublicationEnabled']) {
            $object->setOffersWithProductPublicationEnabled($data['offersWithProductPublicationEnabled']);
            unset($data['offersWithProductPublicationEnabled']);
        } elseif (\array_key_exists('offersWithProductPublicationEnabled', $data) && null === $data['offersWithProductPublicationEnabled']) {
            $object->setOffersWithProductPublicationEnabled(null);
        }
        if (\array_key_exists('productCreationEnabled', $data) && null !== $data['productCreationEnabled']) {
            $object->setProductCreationEnabled($data['productCreationEnabled']);
            unset($data['productCreationEnabled']);
        } elseif (\array_key_exists('productCreationEnabled', $data) && null === $data['productCreationEnabled']) {
            $object->setProductCreationEnabled(null);
        }
        if (\array_key_exists('sellerCanRequirePurchaseComments', $data) && null !== $data['sellerCanRequirePurchaseComments']) {
            $object->setSellerCanRequirePurchaseComments($data['sellerCanRequirePurchaseComments']);
            unset($data['sellerCanRequirePurchaseComments']);
        } elseif (\array_key_exists('sellerCanRequirePurchaseComments', $data) && null === $data['sellerCanRequirePurchaseComments']) {
            $object->setSellerCanRequirePurchaseComments(null);
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
        if ($data->isInitialized('advertisement') && null !== $data->getAdvertisement()) {
            $dataArray['advertisement'] = $data->getAdvertisement();
        }
        if ($data->isInitialized('variantsByColorPatternAllowed') && null !== $data->getVariantsByColorPatternAllowed()) {
            $dataArray['variantsByColorPatternAllowed'] = $data->getVariantsByColorPatternAllowed();
        }
        if ($data->isInitialized('offersWithProductPublicationEnabled') && null !== $data->getOffersWithProductPublicationEnabled()) {
            $dataArray['offersWithProductPublicationEnabled'] = $data->getOffersWithProductPublicationEnabled();
        }
        if ($data->isInitialized('productCreationEnabled') && null !== $data->getProductCreationEnabled()) {
            $dataArray['productCreationEnabled'] = $data->getProductCreationEnabled();
        }
        if ($data->isInitialized('sellerCanRequirePurchaseComments') && null !== $data->getSellerCanRequirePurchaseComments()) {
            $dataArray['sellerCanRequirePurchaseComments'] = $data->getSellerCanRequirePurchaseComments();
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
        return [\Em411\Allegro\Api\Model\CategoryOptionsDto::class => false];
    }
}
