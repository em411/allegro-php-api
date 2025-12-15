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

class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Promotion::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Promotion::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\Promotion();
        if (\array_key_exists('emphasized1d', $data) && \is_int($data['emphasized1d'])) {
            $data['emphasized1d'] = (bool) $data['emphasized1d'];
        }
        if (\array_key_exists('emphasized10d', $data) && \is_int($data['emphasized10d'])) {
            $data['emphasized10d'] = (bool) $data['emphasized10d'];
        }
        if (\array_key_exists('departmentPage', $data) && \is_int($data['departmentPage'])) {
            $data['departmentPage'] = (bool) $data['departmentPage'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('emphasized1d', $data) && null !== $data['emphasized1d']) {
            $object->setEmphasized1d($data['emphasized1d']);
            unset($data['emphasized1d']);
        } elseif (\array_key_exists('emphasized1d', $data) && null === $data['emphasized1d']) {
            $object->setEmphasized1d(null);
        }
        if (\array_key_exists('emphasized10d', $data) && null !== $data['emphasized10d']) {
            $object->setEmphasized10d($data['emphasized10d']);
            unset($data['emphasized10d']);
        } elseif (\array_key_exists('emphasized10d', $data) && null === $data['emphasized10d']) {
            $object->setEmphasized10d(null);
        }
        if (\array_key_exists('departmentPage', $data) && null !== $data['departmentPage']) {
            $object->setDepartmentPage($data['departmentPage']);
            unset($data['departmentPage']);
        } elseif (\array_key_exists('departmentPage', $data) && null === $data['departmentPage']) {
            $object->setDepartmentPage(null);
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
        if ($data->isInitialized('emphasized1d') && null !== $data->getEmphasized1d()) {
            $dataArray['emphasized1d'] = $data->getEmphasized1d();
        }
        if ($data->isInitialized('emphasized10d') && null !== $data->getEmphasized10d()) {
            $dataArray['emphasized10d'] = $data->getEmphasized10d();
        }
        if ($data->isInitialized('departmentPage') && null !== $data->getDepartmentPage()) {
            $dataArray['departmentPage'] = $data->getDepartmentPage();
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
        return [\Em411\Allegro\Api\Model\Promotion::class => false];
    }
}
