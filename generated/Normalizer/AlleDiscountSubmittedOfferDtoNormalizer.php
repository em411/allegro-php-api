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

class AlleDiscountSubmittedOfferDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDto::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDto::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('participationId', $data) && null !== $data['participationId']) {
            $object->setParticipationId($data['participationId']);
            unset($data['participationId']);
        } elseif (\array_key_exists('participationId', $data) && null === $data['participationId']) {
            $object->setParticipationId(null);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoOffer::class, 'json', $context));
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
        }
        if (\array_key_exists('campaign', $data) && null !== $data['campaign']) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoCampaign::class, 'json', $context));
            unset($data['campaign']);
        } elseif (\array_key_exists('campaign', $data) && null === $data['campaign']) {
            $object->setCampaign(null);
        }
        if (\array_key_exists('prices', $data) && null !== $data['prices']) {
            $object->setPrices($this->denormalizer->denormalize($data['prices'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoPrices::class, 'json', $context));
            unset($data['prices']);
        } elseif (\array_key_exists('prices', $data) && null === $data['prices']) {
            $object->setPrices(null);
        }
        if (\array_key_exists('process', $data) && null !== $data['process']) {
            $object->setProcess($this->denormalizer->denormalize($data['process'], \Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDtoProcess::class, 'json', $context));
            unset($data['process']);
        } elseif (\array_key_exists('process', $data) && null === $data['process']) {
            $object->setProcess(null);
        }
        if (\array_key_exists('purchaseLimit', $data) && null !== $data['purchaseLimit']) {
            $object->setPurchaseLimit($data['purchaseLimit']);
            unset($data['purchaseLimit']);
        } elseif (\array_key_exists('purchaseLimit', $data) && null === $data['purchaseLimit']) {
            $object->setPurchaseLimit(null);
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
        if ($data->isInitialized('participationId') && null !== $data->getParticipationId()) {
            $dataArray['participationId'] = $data->getParticipationId();
        }
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        }
        if ($data->isInitialized('campaign') && null !== $data->getCampaign()) {
            $dataArray['campaign'] = $this->normalizer->normalize($data->getCampaign(), 'json', $context);
        }
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $dataArray['prices'] = $this->normalizer->normalize($data->getPrices(), 'json', $context);
        }
        if ($data->isInitialized('process') && null !== $data->getProcess()) {
            $dataArray['process'] = $this->normalizer->normalize($data->getProcess(), 'json', $context);
        }
        if ($data->isInitialized('purchaseLimit') && null !== $data->getPurchaseLimit()) {
            $dataArray['purchaseLimit'] = $data->getPurchaseLimit();
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
        return [\Em411\Allegro\Api\Model\AlleDiscountSubmittedOfferDto::class => false];
    }
}
