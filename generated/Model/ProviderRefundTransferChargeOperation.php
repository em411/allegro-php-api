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

class ProviderRefundTransferChargeOperation extends BaseOperation
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Payment.
     *
     * @var OperationPayment|null
     */
    protected $payment;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Payment.
     */
    public function getPayment(): ?OperationPayment
    {
        return $this->payment;
    }

    /**
     * Payment.
     */
    public function setPayment(?OperationPayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;

        return $this;
    }
}
