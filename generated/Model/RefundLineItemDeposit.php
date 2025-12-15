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

class RefundLineItemDeposit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The line-item identifier to which the deposit applies.
     *
     * @var string|null
     */
    protected $lineItemId;
    /**
     * This field specifies the total deposit amount, per line item, refunded to the customer.
     *
     * @var RefundLineItemDepositTotalValue|null
     */
    protected $totalValue;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The line-item identifier to which the deposit applies.
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }

    /**
     * The line-item identifier to which the deposit applies.
     */
    public function setLineItemId(?string $lineItemId): self
    {
        $this->initialized['lineItemId'] = true;
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * This field specifies the total deposit amount, per line item, refunded to the customer.
     */
    public function getTotalValue(): ?RefundLineItemDepositTotalValue
    {
        return $this->totalValue;
    }

    /**
     * This field specifies the total deposit amount, per line item, refunded to the customer.
     */
    public function setTotalValue(?RefundLineItemDepositTotalValue $totalValue): self
    {
        $this->initialized['totalValue'] = true;
        $this->totalValue = $totalValue;

        return $this;
    }
}
