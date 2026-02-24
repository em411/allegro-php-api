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

class ActualPriceReductionDtoSellerMaxDeclaredDiscount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Monetary amount as a string with decimal precision (e.g., '100.00').
     *
     * @var string|null
     */
    protected $amount;
    /**
     * ISO 4217 currency code (e.g., 'PLN', 'CZK', 'EUR', 'HUF').
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Monetary amount as a string with decimal precision (e.g., '100.00').
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Monetary amount as a string with decimal precision (e.g., '100.00').
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * ISO 4217 currency code (e.g., 'PLN', 'CZK', 'EUR', 'HUF').
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * ISO 4217 currency code (e.g., 'PLN', 'CZK', 'EUR', 'HUF').
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
