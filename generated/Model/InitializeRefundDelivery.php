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

class InitializeRefundDelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery amount for payment refund.
     *
     * @var RefundDeliveryValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery amount for payment refund.
     */
    public function getValue(): ?RefundDeliveryValue
    {
        return $this->value;
    }

    /**
     * Delivery amount for payment refund.
     */
    public function setValue(?RefundDeliveryValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
