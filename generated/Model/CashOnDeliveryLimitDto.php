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

class CashOnDeliveryLimitDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum value.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * Supported currency: 'PLN' | 'CZK.
     *
     * @var string|null
     */
    protected $currency = 'PLN';
    /**
     * Type of payment: Money transfer to merchant bank account or internal wallet payout.
     *
     * @var string|null
     */
    protected $paymentType;
    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     *
     * @var bool|null
     */
    protected $forceRequireIban;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum value.
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }

    /**
     * Maximum value.
     */
    public function setLimit(?float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     * Supported currency: 'PLN' | 'CZK.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Supported currency: 'PLN' | 'CZK.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Type of payment: Money transfer to merchant bank account or internal wallet payout.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Type of payment: Money transfer to merchant bank account or internal wallet payout.
     */
    public function setPaymentType(?string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     */
    public function getForceRequireIban(): ?bool
    {
        return $this->forceRequireIban;
    }

    /**
     * Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected.
     */
    public function setForceRequireIban(?bool $forceRequireIban): self
    {
        $this->initialized['forceRequireIban'] = true;
        $this->forceRequireIban = $forceRequireIban;

        return $this;
    }
}
