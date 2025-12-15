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

class PromoModificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\PromoModificationReport::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\PromoModificationReport::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\PromoModificationReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tasks', $data) && null !== $data['tasks']) {
            $values = [];
            foreach ($data['tasks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Em411\Allegro\Api\Model\PromoModificationTask::class, 'json', $context);
            }
            $object->setTasks($values);
            unset($data['tasks']);
        } elseif (\array_key_exists('tasks', $data) && null === $data['tasks']) {
            $object->setTasks(null);
        }
        if (\array_key_exists('modification', $data) && null !== $data['modification']) {
            $object->setModification($this->denormalizer->denormalize($data['modification'], \Em411\Allegro\Api\Model\PromoOptionsCommandModification::class, 'json', $context));
            unset($data['modification']);
        } elseif (\array_key_exists('modification', $data) && null === $data['modification']) {
            $object->setModification(null);
        }
        if (\array_key_exists('additionalMarketplaces', $data) && null !== $data['additionalMarketplaces']) {
            $values_1 = [];
            foreach ($data['additionalMarketplaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Em411\Allegro\Api\Model\AdditionalMarketplacePromoOptionsCommandModification::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
        } elseif (\array_key_exists('additionalMarketplaces', $data) && null === $data['additionalMarketplaces']) {
            $object->setAdditionalMarketplaces(null);
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
        if ($data->isInitialized('tasks') && null !== $data->getTasks()) {
            $values = [];
            foreach ($data->getTasks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['tasks'] = $values;
        }
        if ($data->isInitialized('modification') && null !== $data->getModification()) {
            $dataArray['modification'] = $this->normalizer->normalize($data->getModification(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
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
        return [\Em411\Allegro\Api\Model\PromoModificationReport::class => false];
    }
}
