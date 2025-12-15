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

class ParametersForPreviewPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\ParametersForPreviewPrice::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\ParametersForPreviewPrice::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\ParametersForPreviewPrice();
        if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
            $data['unitPrice'] = (float) $data['unitPrice'];
        }
        if (\array_key_exists('hasAnyQuantity', $data) && \is_int($data['hasAnyQuantity'])) {
            $data['hasAnyQuantity'] = (bool) $data['hasAnyQuantity'];
        }
        if (\array_key_exists('shop', $data) && \is_int($data['shop'])) {
            $data['shop'] = (bool) $data['shop'];
        }
        if (\array_key_exists('bold', $data) && \is_int($data['bold'])) {
            $data['bold'] = (bool) $data['bold'];
        }
        if (\array_key_exists('highlight', $data) && \is_int($data['highlight'])) {
            $data['highlight'] = (bool) $data['highlight'];
        }
        if (\array_key_exists('departmentPage', $data) && \is_int($data['departmentPage'])) {
            $data['departmentPage'] = (bool) $data['departmentPage'];
        }
        if (\array_key_exists('emphasized', $data) && \is_int($data['emphasized'])) {
            $data['emphasized'] = (bool) $data['emphasized'];
        }
        if (\array_key_exists('emphasizedHighlightBoldPackage', $data) && \is_int($data['emphasizedHighlightBoldPackage'])) {
            $data['emphasizedHighlightBoldPackage'] = (bool) $data['emphasizedHighlightBoldPackage'];
        }
        if (\array_key_exists('multiVariant', $data) && \is_int($data['multiVariant'])) {
            $data['multiVariant'] = (bool) $data['multiVariant'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \Em411\Allegro\Api\Model\Category::class, 'json', $context));
            unset($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('condition', $data) && null !== $data['condition']) {
            $object->setCondition($data['condition']);
            unset($data['condition']);
        } elseif (\array_key_exists('condition', $data) && null === $data['condition']) {
            $object->setCondition(null);
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('hasAnyQuantity', $data) && null !== $data['hasAnyQuantity']) {
            $object->setHasAnyQuantity($data['hasAnyQuantity']);
            unset($data['hasAnyQuantity']);
        } elseif (\array_key_exists('hasAnyQuantity', $data) && null === $data['hasAnyQuantity']) {
            $object->setHasAnyQuantity(null);
        }
        if (\array_key_exists('numberOfBigPhotos', $data) && null !== $data['numberOfBigPhotos']) {
            $object->setNumberOfBigPhotos($data['numberOfBigPhotos']);
            unset($data['numberOfBigPhotos']);
        } elseif (\array_key_exists('numberOfBigPhotos', $data) && null === $data['numberOfBigPhotos']) {
            $object->setNumberOfBigPhotos(null);
        }
        if (\array_key_exists('numberOfPhotos', $data) && null !== $data['numberOfPhotos']) {
            $object->setNumberOfPhotos($data['numberOfPhotos']);
            unset($data['numberOfPhotos']);
        } elseif (\array_key_exists('numberOfPhotos', $data) && null === $data['numberOfPhotos']) {
            $object->setNumberOfPhotos(null);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('shop', $data) && null !== $data['shop']) {
            $object->setShop($data['shop']);
            unset($data['shop']);
        } elseif (\array_key_exists('shop', $data) && null === $data['shop']) {
            $object->setShop(null);
        }
        if (\array_key_exists('soldQuantity', $data) && null !== $data['soldQuantity']) {
            $object->setSoldQuantity($data['soldQuantity']);
            unset($data['soldQuantity']);
        } elseif (\array_key_exists('soldQuantity', $data) && null === $data['soldQuantity']) {
            $object->setSoldQuantity(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('unitPrice', $data) && null !== $data['unitPrice']) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        } elseif (\array_key_exists('unitPrice', $data) && null === $data['unitPrice']) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('bold', $data) && null !== $data['bold']) {
            $object->setBold($data['bold']);
            unset($data['bold']);
        } elseif (\array_key_exists('bold', $data) && null === $data['bold']) {
            $object->setBold(null);
        }
        if (\array_key_exists('highlight', $data) && null !== $data['highlight']) {
            $object->setHighlight($data['highlight']);
            unset($data['highlight']);
        } elseif (\array_key_exists('highlight', $data) && null === $data['highlight']) {
            $object->setHighlight(null);
        }
        if (\array_key_exists('departmentPage', $data) && null !== $data['departmentPage']) {
            $object->setDepartmentPage($data['departmentPage']);
            unset($data['departmentPage']);
        } elseif (\array_key_exists('departmentPage', $data) && null === $data['departmentPage']) {
            $object->setDepartmentPage(null);
        }
        if (\array_key_exists('emphasized', $data) && null !== $data['emphasized']) {
            $object->setEmphasized($data['emphasized']);
            unset($data['emphasized']);
        } elseif (\array_key_exists('emphasized', $data) && null === $data['emphasized']) {
            $object->setEmphasized(null);
        }
        if (\array_key_exists('emphasizedHighlightBoldPackage', $data) && null !== $data['emphasizedHighlightBoldPackage']) {
            $object->setEmphasizedHighlightBoldPackage($data['emphasizedHighlightBoldPackage']);
            unset($data['emphasizedHighlightBoldPackage']);
        } elseif (\array_key_exists('emphasizedHighlightBoldPackage', $data) && null === $data['emphasizedHighlightBoldPackage']) {
            $object->setEmphasizedHighlightBoldPackage(null);
        }
        if (\array_key_exists('multiVariant', $data) && null !== $data['multiVariant']) {
            $object->setMultiVariant($data['multiVariant']);
            unset($data['multiVariant']);
        } elseif (\array_key_exists('multiVariant', $data) && null === $data['multiVariant']) {
            $object->setMultiVariant(null);
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
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        if ($data->isInitialized('condition') && null !== $data->getCondition()) {
            $dataArray['condition'] = $data->getCondition();
        }
        if ($data->isInitialized('duration') && null !== $data->getDuration()) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('hasAnyQuantity') && null !== $data->getHasAnyQuantity()) {
            $dataArray['hasAnyQuantity'] = $data->getHasAnyQuantity();
        }
        if ($data->isInitialized('numberOfBigPhotos') && null !== $data->getNumberOfBigPhotos()) {
            $dataArray['numberOfBigPhotos'] = $data->getNumberOfBigPhotos();
        }
        if ($data->isInitialized('numberOfPhotos') && null !== $data->getNumberOfPhotos()) {
            $dataArray['numberOfPhotos'] = $data->getNumberOfPhotos();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('shop') && null !== $data->getShop()) {
            $dataArray['shop'] = $data->getShop();
        }
        if ($data->isInitialized('soldQuantity') && null !== $data->getSoldQuantity()) {
            $dataArray['soldQuantity'] = $data->getSoldQuantity();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        $dataArray['unitPrice'] = $data->getUnitPrice();
        if ($data->isInitialized('bold') && null !== $data->getBold()) {
            $dataArray['bold'] = $data->getBold();
        }
        if ($data->isInitialized('highlight') && null !== $data->getHighlight()) {
            $dataArray['highlight'] = $data->getHighlight();
        }
        if ($data->isInitialized('departmentPage') && null !== $data->getDepartmentPage()) {
            $dataArray['departmentPage'] = $data->getDepartmentPage();
        }
        if ($data->isInitialized('emphasized') && null !== $data->getEmphasized()) {
            $dataArray['emphasized'] = $data->getEmphasized();
        }
        if ($data->isInitialized('emphasizedHighlightBoldPackage') && null !== $data->getEmphasizedHighlightBoldPackage()) {
            $dataArray['emphasizedHighlightBoldPackage'] = $data->getEmphasizedHighlightBoldPackage();
        }
        if ($data->isInitialized('multiVariant') && null !== $data->getMultiVariant()) {
            $dataArray['multiVariant'] = $data->getMultiVariant();
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
        return [\Em411\Allegro\Api\Model\ParametersForPreviewPrice::class => false];
    }
}
