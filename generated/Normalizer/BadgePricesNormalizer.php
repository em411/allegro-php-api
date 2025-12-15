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

class BadgePricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\BadgePrices::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\BadgePrices::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\BadgePrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('market', $data) && null !== $data['market']) {
            $object->setMarket($this->denormalizer->denormalize($data['market'], \Em411\Allegro\Api\Model\BadgeMarketPrice::class, 'json', $context));
            unset($data['market']);
        } elseif (\array_key_exists('market', $data) && null === $data['market']) {
            $object->setMarket(null);
        }
        if (\array_key_exists('bargain', $data) && null !== $data['bargain']) {
            $object->setBargain($this->denormalizer->denormalize($data['bargain'], \Em411\Allegro\Api\Model\BadgeApplicationBargainPrice::class, 'json', $context));
            unset($data['bargain']);
        } elseif (\array_key_exists('bargain', $data) && null === $data['bargain']) {
            $object->setBargain(null);
        }
        if (\array_key_exists('subsidy', $data) && null !== $data['subsidy']) {
            $object->setSubsidy($this->denormalizer->denormalize($data['subsidy'], \Em411\Allegro\Api\Model\BadgeSubsidyPrices::class, 'json', $context));
            unset($data['subsidy']);
        } elseif (\array_key_exists('subsidy', $data) && null === $data['subsidy']) {
            $object->setSubsidy(null);
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
        if ($data->isInitialized('market') && null !== $data->getMarket()) {
            $dataArray['market'] = $this->normalizer->normalize($data->getMarket(), 'json', $context);
        }
        if ($data->isInitialized('bargain')) {
            $dataArray['bargain'] = $this->normalizer->normalize($data->getBargain(), 'json', $context);
        }
        if ($data->isInitialized('subsidy') && null !== $data->getSubsidy()) {
            $dataArray['subsidy'] = $this->normalizer->normalize($data->getSubsidy(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\BadgePrices::class => false];
    }
}
