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

class PaymentsSurcharge extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The payment identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Surcharge refund amount.
     *
     * @var RefundSurchargeValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The payment identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The payment identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Surcharge refund amount.
     */
    public function getValue(): ?RefundSurchargeValue
    {
        return $this->value;
    }

    /**
     * Surcharge refund amount.
     */
    public function setValue(?RefundSurchargeValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
