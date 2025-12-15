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

class CashOnDeliveryDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Postpaid value.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * ISO 4217 currency code.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Bank account owner.
     *
     * @var string|null
     */
    protected $ownerName;
    /**
     * Bank account number.
     *
     * @var string|null
     */
    protected $iban;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Postpaid value.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Postpaid value.
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * ISO 4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * ISO 4217 currency code.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Bank account owner.
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    /**
     * Bank account owner.
     */
    public function setOwnerName(?string $ownerName): self
    {
        $this->initialized['ownerName'] = true;
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Bank account number.
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * Bank account number.
     */
    public function setIban(?string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;

        return $this;
    }
}
