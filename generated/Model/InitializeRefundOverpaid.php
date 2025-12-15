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

class InitializeRefundOverpaid extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Overpaid amount for payment refund.
     *
     * @var RefundOverpaidValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Overpaid amount for payment refund.
     */
    public function getValue(): ?RefundOverpaidValue
    {
        return $this->value;
    }

    /**
     * Overpaid amount for payment refund.
     */
    public function setValue(?RefundOverpaidValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
