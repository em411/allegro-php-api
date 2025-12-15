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

class AlleDiscountEligibleOfferDtoAlleDiscountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('campaignConditions', $data) && null !== $data['campaignConditions']) {
            $object->setCampaignConditions($this->denormalizer->denormalize($data['campaignConditions'], \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions::class, 'json', $context));
            unset($data['campaignConditions']);
        } elseif (\array_key_exists('campaignConditions', $data) && null === $data['campaignConditions']) {
            $object->setCampaignConditions(null);
        }
        if (\array_key_exists('requiredMerchantPrice', $data) && null !== $data['requiredMerchantPrice']) {
            $object->setRequiredMerchantPrice($this->denormalizer->denormalize($data['requiredMerchantPrice'], \Em411\Allegro\Api\Model\AlleDiscountRequiredMerchantPriceDto::class, 'json', $context));
            unset($data['requiredMerchantPrice']);
        } elseif (\array_key_exists('requiredMerchantPrice', $data) && null === $data['requiredMerchantPrice']) {
            $object->setRequiredMerchantPrice(null);
        }
        if (\array_key_exists('minimumGuaranteedDiscount', $data) && null !== $data['minimumGuaranteedDiscount']) {
            $object->setMinimumGuaranteedDiscount($this->denormalizer->denormalize($data['minimumGuaranteedDiscount'], \Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount::class, 'json', $context));
            unset($data['minimumGuaranteedDiscount']);
        } elseif (\array_key_exists('minimumGuaranteedDiscount', $data) && null === $data['minimumGuaranteedDiscount']) {
            $object->setMinimumGuaranteedDiscount(null);
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
        if ($data->isInitialized('campaignConditions') && null !== $data->getCampaignConditions()) {
            $dataArray['campaignConditions'] = $this->normalizer->normalize($data->getCampaignConditions(), 'json', $context);
        }
        if ($data->isInitialized('requiredMerchantPrice') && null !== $data->getRequiredMerchantPrice()) {
            $dataArray['requiredMerchantPrice'] = $this->normalizer->normalize($data->getRequiredMerchantPrice(), 'json', $context);
        }
        if ($data->isInitialized('minimumGuaranteedDiscount') && null !== $data->getMinimumGuaranteedDiscount()) {
            $dataArray['minimumGuaranteedDiscount'] = $this->normalizer->normalize($data->getMinimumGuaranteedDiscount(), 'json', $context);
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
        return [\Em411\Allegro\Api\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class => false];
    }
}
