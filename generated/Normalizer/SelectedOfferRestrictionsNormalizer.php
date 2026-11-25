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

class SelectedOfferRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\SelectedOfferRestrictions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\SelectedOfferRestrictions::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\SelectedOfferRestrictions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('maxPartnerPrice', $data) && null !== $data['maxPartnerPrice']) {
            $object->setMaxPartnerPrice($this->denormalizer->denormalize($data['maxPartnerPrice'], \Em411\Allegro\Api\Model\SelectedOfferRestrictionsMaxPartnerPrice::class, 'json', $context));
            unset($data['maxPartnerPrice']);
        } elseif (\array_key_exists('maxPartnerPrice', $data) && null === $data['maxPartnerPrice']) {
            $object->setMaxPartnerPrice(null);
            unset($data['maxPartnerPrice']);
        }
        if (\array_key_exists('campaignStock', $data) && null !== $data['campaignStock']) {
            $object->setCampaignStock($this->denormalizer->denormalize($data['campaignStock'], \Em411\Allegro\Api\Model\SelectedOfferRestrictionsCampaignStock::class, 'json', $context));
            unset($data['campaignStock']);
        } elseif (\array_key_exists('campaignStock', $data) && null === $data['campaignStock']) {
            $object->setCampaignStock(null);
            unset($data['campaignStock']);
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
        $dataArray['maxPartnerPrice'] = null === $data->getMaxPartnerPrice() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMaxPartnerPrice(), 'json', $context));
        $dataArray['campaignStock'] = null === $data->getCampaignStock() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCampaignStock(), 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Em411\Allegro\Api\Model\SelectedOfferRestrictions::class => false];
    }
}
