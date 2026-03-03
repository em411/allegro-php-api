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

class BaseOperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Em411\Allegro\Api\Model\BaseOperation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Em411\Allegro\Api\Model\BaseOperation::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (\array_key_exists('type', $data) && 'CORRECTION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\CorrectionOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'CONTRIBUTION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\ContributionOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT_CANCEL' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutOperationCancel', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'REFUND_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\RefundIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'REFUND_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\RefundChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'REFUND_CANCEL' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\RefundCancelOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'SURCHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\SurchargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'DEDUCTION_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\DeductionChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'DEDUCTION_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\DeductionIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'LOAN_DEDUCTION_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\LoanDeductionChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'LOAN_DEDUCTION_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\LoanDeductionIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'COMPENSATION_COD_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\CompensationCodChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'COMPENSATION_COD_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\CompensationCodIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'BLOCKADE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\BlockadeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'BLOCKADE_RELEASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\BlockadeReleaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PROVIDER_REFUND_TRANSFER_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\ProviderRefundTransferChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PROVIDER_REFUND_TRANSFER_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\ProviderRefundTransferIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'COMPENSATION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\CompensationOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'TOP_UP' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\TopUpOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT_SWEEP_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutSweepIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT_SWEEP_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutSweepChargeOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT_SWEEP_CANCEL_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutSweepCancelIncreaseOperation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'PAYOUT_SWEEP_CANCEL_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Em411\Allegro\Api\Model\PayoutSweepCancelChargeOperation', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Em411\Allegro\Api\Model\BaseOperation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('group', $data) && null !== $data['group']) {
            $object->setGroup($data['group']);
            unset($data['group']);
        } elseif (\array_key_exists('group', $data) && null === $data['group']) {
            $object->setGroup(null);
        }
        if (\array_key_exists('wallet', $data) && null !== $data['wallet']) {
            $object->setWallet($this->denormalizer->denormalize($data['wallet'], \Em411\Allegro\Api\Model\Wallet::class, 'json', $context));
            unset($data['wallet']);
        } elseif (\array_key_exists('wallet', $data) && null === $data['wallet']) {
            $object->setWallet(null);
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->setValue($this->denormalizer->denormalize($data['value'], \Em411\Allegro\Api\Model\OperationValue::class, 'json', $context));
            unset($data['value']);
        } elseif (\array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
        }
        if (\array_key_exists('occurredAt', $data) && null !== $data['occurredAt']) {
            $object->setOccurredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']));
            unset($data['occurredAt']);
        } elseif (\array_key_exists('occurredAt', $data) && null === $data['occurredAt']) {
            $object->setOccurredAt(null);
        }
        if (\array_key_exists('marketplaceId', $data) && null !== $data['marketplaceId']) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        } elseif (\array_key_exists('marketplaceId', $data) && null === $data['marketplaceId']) {
            $object->setMarketplaceId(null);
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
        if (null !== $data->getType() && 'CORRECTION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'CONTRIBUTION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT_CANCEL' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'REFUND_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'REFUND_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'REFUND_CANCEL' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'SURCHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'DEDUCTION_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'DEDUCTION_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'LOAN_DEDUCTION_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'LOAN_DEDUCTION_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'COMPENSATION_COD_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'COMPENSATION_COD_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'BLOCKADE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'BLOCKADE_RELEASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PROVIDER_REFUND_TRANSFER_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PROVIDER_REFUND_TRANSFER_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'COMPENSATION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'TOP_UP' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT_SWEEP_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT_SWEEP_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT_SWEEP_CANCEL_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'PAYOUT_SWEEP_CANCEL_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['type'] = $data->getType();
        $dataArray['group'] = $data->getGroup();
        $dataArray['wallet'] = $this->normalizer->normalize($data->getWallet(), 'json', $context);
        $dataArray['value'] = $this->normalizer->normalize($data->getValue(), 'json', $context);
        $dataArray['occurredAt'] = $data->getOccurredAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
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
        return [\Em411\Allegro\Api\Model\BaseOperation::class => false];
    }
}
