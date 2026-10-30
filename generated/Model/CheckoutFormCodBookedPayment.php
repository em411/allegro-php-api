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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class CheckoutFormCodBookedPayment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * COD payment id.
     *
     * @var string|null
     */
    protected $paymentId;
    /**
     * Shipment id of the COD package.
     *
     * @var string|null
     */
    protected $shipmentId;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $paidAmount;
    /**
     * ISO date and time when the COD payment was confirmed.
     *
     * @var \DateTime|null
     */
    protected $paidAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * COD payment id.
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * COD payment id.
     */
    public function setPaymentId(?string $paymentId): self
    {
        $this->initialized['paymentId'] = true;
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * Shipment id of the COD package.
     */
    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }

    /**
     * Shipment id of the COD package.
     */
    public function setShipmentId(?string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPaidAmount(): ?Price
    {
        return $this->paidAmount;
    }

    /**
     * The price data.
     */
    public function setPaidAmount(?Price $paidAmount): self
    {
        $this->initialized['paidAmount'] = true;
        $this->paidAmount = $paidAmount;

        return $this;
    }

    /**
     * ISO date and time when the COD payment was confirmed.
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * ISO date and time when the COD payment was confirmed.
     */
    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->initialized['paidAt'] = true;
        $this->paidAt = $paidAt;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['paymentId' => ['paymentId', 'getPaymentId', 'setPaymentId'], 'shipmentId' => ['shipmentId', 'getShipmentId', 'setShipmentId'], 'paidAmount' => ['paidAmount', 'getPaidAmount', 'setPaidAmount'], 'paidAt' => ['paidAt', 'getPaidAt', 'setPaidAt']];
    }
}
