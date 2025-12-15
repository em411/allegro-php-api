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

class BadgeCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\BadgeCampaign::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\BadgeCampaign::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\BadgeCampaign();
        if (\array_key_exists('stockReservationIsRequired', $data) && \is_int($data['stockReservationIsRequired'])) {
            $data['stockReservationIsRequired'] = (bool) $data['stockReservationIsRequired'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('marketplace', $data) && null !== $data['marketplace']) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Em411\Allegro\Api\Model\MarketplaceReference::class, 'json', $context));
            unset($data['marketplace']);
        } elseif (\array_key_exists('marketplace', $data) && null === $data['marketplace']) {
            $object->setMarketplace(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('eligibility', $data) && null !== $data['eligibility']) {
            $object->setEligibility($this->denormalizer->denormalize($data['eligibility'], \Em411\Allegro\Api\Model\UserCampaignEligibility::class, 'json', $context));
            unset($data['eligibility']);
        } elseif (\array_key_exists('eligibility', $data) && null === $data['eligibility']) {
            $object->setEligibility(null);
        }
        if (\array_key_exists('application', $data) && null !== $data['application']) {
            $object->setApplication($this->denormalizer->denormalize($data['application'], \Em411\Allegro\Api\Model\ApplicationTimePolicy::class, 'json', $context));
            unset($data['application']);
        } elseif (\array_key_exists('application', $data) && null === $data['application']) {
            $object->setApplication(null);
        }
        if (\array_key_exists('visibility', $data) && null !== $data['visibility']) {
            $object->setVisibility($this->denormalizer->denormalize($data['visibility'], \Em411\Allegro\Api\Model\VisibilityTimePolicy::class, 'json', $context));
            unset($data['visibility']);
        } elseif (\array_key_exists('visibility', $data) && null === $data['visibility']) {
            $object->setVisibility(null);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Em411\Allegro\Api\Model\PublicationTimePolicy::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
        }
        if (\array_key_exists('regulationsLink', $data) && null !== $data['regulationsLink']) {
            $object->setRegulationsLink($data['regulationsLink']);
            unset($data['regulationsLink']);
        } elseif (\array_key_exists('regulationsLink', $data) && null === $data['regulationsLink']) {
            $object->setRegulationsLink(null);
        }
        if (\array_key_exists('stockReservationIsRequired', $data) && null !== $data['stockReservationIsRequired']) {
            $object->setStockReservationIsRequired($data['stockReservationIsRequired']);
            unset($data['stockReservationIsRequired']);
        } elseif (\array_key_exists('stockReservationIsRequired', $data) && null === $data['stockReservationIsRequired']) {
            $object->setStockReservationIsRequired(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        $dataArray['type'] = $data->getType();
        $dataArray['eligibility'] = $this->normalizer->normalize($data->getEligibility(), 'json', $context);
        $dataArray['application'] = $this->normalizer->normalize($data->getApplication(), 'json', $context);
        $dataArray['visibility'] = $this->normalizer->normalize($data->getVisibility(), 'json', $context);
        $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        $dataArray['regulationsLink'] = $data->getRegulationsLink();
        if ($data->isInitialized('stockReservationIsRequired') && null !== $data->getStockReservationIsRequired()) {
            $dataArray['stockReservationIsRequired'] = $data->getStockReservationIsRequired();
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
        return [\Em411\Allegro\Api\Model\BadgeCampaign::class => false];
    }
}
