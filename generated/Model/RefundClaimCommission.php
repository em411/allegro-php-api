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

class RefundClaimCommission extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Monetary amount of the returned refund application.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Monetary amount of the returned refund application.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Monetary amount of the returned refund application.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter currency code (ISO-4217) of the returned refund application.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
