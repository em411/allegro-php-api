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

namespace Em411\Allegro\Api\Model;

class StockStorageFee extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Status of the storage fee.
     * * NOT_APPLICABLE - fee for yesterday has not been charged.
     * * CHARGED - the fee has been charged on seller's billing.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     *
     * @var string|null
     */
    protected $feeStatusAt;
    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     *
     * @var StockStorageFeeDetails|null
     */
    protected $details;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Status of the storage fee.
     * * NOT_APPLICABLE - fee for yesterday has not been charged.
     * * CHARGED - the fee has been charged on seller's billing.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of the storage fee.
     * NOT_APPLICABLE - fee for yesterday has not been charged.
     * CHARGED - the fee has been charged on seller's billing.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     */
    public function getFeeStatusAt(): ?string
    {
        return $this->feeStatusAt;
    }

    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     */
    public function setFeeStatusAt(?string $feeStatusAt): self
    {
        $this->initialized['feeStatusAt'] = true;
        $this->feeStatusAt = $feeStatusAt;

        return $this;
    }

    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     */
    public function getDetails(): ?StockStorageFeeDetails
    {
        return $this->details;
    }

    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     */
    public function setDetails(?StockStorageFeeDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
