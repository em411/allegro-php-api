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

class CheckoutFormDeliveryReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var CheckoutFormDeliveryAddress|null
     */
    protected $address;
    /**
     * @var CheckoutFormDeliveryMethod|null
     */
    protected $method;
    /**
     * @var CheckoutFormDeliveryPickupPoint|null
     */
    protected $pickupPoint;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $cost;
    /**
     * @var CheckoutFormDeliveryTime|null
     */
    protected $time;
    /**
     * Buyer used a SMART option.
     *
     * @var bool|null
     */
    protected $smart;
    /**
     * The delivery cancellation information.
     *
     * @var CheckoutFormDeliveryCancellation|null
     */
    protected $cancellation;
    /**
     * Calculated number of packages.
     *
     * @var int|null
     */
    protected $calculatedNumberOfPackages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAddress(): ?CheckoutFormDeliveryAddress
    {
        return $this->address;
    }

    public function setAddress(?CheckoutFormDeliveryAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function getMethod(): ?CheckoutFormDeliveryMethod
    {
        return $this->method;
    }

    public function setMethod(?CheckoutFormDeliveryMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }

    public function getPickupPoint(): ?CheckoutFormDeliveryPickupPoint
    {
        return $this->pickupPoint;
    }

    public function setPickupPoint(?CheckoutFormDeliveryPickupPoint $pickupPoint): self
    {
        $this->initialized['pickupPoint'] = true;
        $this->pickupPoint = $pickupPoint;

        return $this;
    }

    /**
     * The price data.
     */
    public function getCost(): ?Price
    {
        return $this->cost;
    }

    /**
     * The price data.
     */
    public function setCost(?Price $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;

        return $this;
    }

    public function getTime(): ?CheckoutFormDeliveryTime
    {
        return $this->time;
    }

    public function setTime(?CheckoutFormDeliveryTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    /**
     * Buyer used a SMART option.
     */
    public function getSmart(): ?bool
    {
        return $this->smart;
    }

    /**
     * Buyer used a SMART option.
     */
    public function setSmart(?bool $smart): self
    {
        $this->initialized['smart'] = true;
        $this->smart = $smart;

        return $this;
    }

    /**
     * The delivery cancellation information.
     */
    public function getCancellation(): ?CheckoutFormDeliveryCancellation
    {
        return $this->cancellation;
    }

    /**
     * The delivery cancellation information.
     */
    public function setCancellation(?CheckoutFormDeliveryCancellation $cancellation): self
    {
        $this->initialized['cancellation'] = true;
        $this->cancellation = $cancellation;

        return $this;
    }

    /**
     * Calculated number of packages.
     */
    public function getCalculatedNumberOfPackages(): ?int
    {
        return $this->calculatedNumberOfPackages;
    }

    /**
     * Calculated number of packages.
     */
    public function setCalculatedNumberOfPackages(?int $calculatedNumberOfPackages): self
    {
        $this->initialized['calculatedNumberOfPackages'] = true;
        $this->calculatedNumberOfPackages = $calculatedNumberOfPackages;

        return $this;
    }
}
