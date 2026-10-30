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

class BadgeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\Badge::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\Badge::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Em411\Allegro\Api\Model\Badge();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\BadgeApplicationOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
            unset($data['offer']);
        }
        if (\array_key_exists('campaign', $data) && null !== $data['campaign']) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Em411\Allegro\Api\Model\OfferBadgeCampaign::class, 'json', $context));
            unset($data['campaign']);
        } elseif (\array_key_exists('campaign', $data) && null === $data['campaign']) {
            $object->setCampaign(null);
            unset($data['campaign']);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\BadgePublicationTimePolicy::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
            unset($data['publication']);
        }
        if (\array_key_exists('prices', $data) && null !== $data['prices']) {
            $object->setPrices($this->denormalizer->denormalize($data['prices'], \Em411\Allegro\Api\Model\BadgePrices::class, 'json', $context));
            unset($data['prices']);
        } elseif (\array_key_exists('prices', $data) && null === $data['prices']) {
            $object->setPrices(null);
            unset($data['prices']);
        }
        if (\array_key_exists('process', $data) && null !== $data['process']) {
            $object->setProcess($this->denormalizer->denormalize($data['process'], \Em411\Allegro\Api\Model\BadgeProcess::class, 'json', $context));
            unset($data['process']);
        } elseif (\array_key_exists('process', $data) && null === $data['process']) {
            $object->setProcess(null);
            unset($data['process']);
        }
        if (\array_key_exists('campaignStock', $data) && null !== $data['campaignStock']) {
            $object->setCampaignStock($this->denormalizer->denormalize($data['campaignStock'], \Em411\Allegro\Api\Model\BadgeCampaignStock::class, 'json', $context));
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
        $dataArray['offer'] = null === $data->getOffer() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOffer(), 'json', $context));
        $dataArray['campaign'] = null === $data->getCampaign() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCampaign(), 'json', $context));
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = null === $data->getPublication() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPublication(), 'json', $context));
        }
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $dataArray['prices'] = null === $data->getPrices() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPrices(), 'json', $context));
        }
        $dataArray['process'] = null === $data->getProcess() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProcess(), 'json', $context));
        if ($data->isInitialized('campaignStock') && null !== $data->getCampaignStock()) {
            $dataArray['campaignStock'] = null === $data->getCampaignStock() ? null : new \Em411\Allegro\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCampaignStock(), 'json', $context));
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
        return [\Em411\Allegro\Api\Model\Badge::class => false];
    }
}
