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

class CheckoutFormDeliveryPickupPoint extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery point id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Delivery point name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Delivery point description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * @var CheckoutFormDeliveryPickupPointAddress|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery point id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Delivery point id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Delivery point name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Delivery point name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Delivery point description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Delivery point description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getAddress(): ?CheckoutFormDeliveryPickupPointAddress
    {
        return $this->address;
    }

    public function setAddress(?CheckoutFormDeliveryPickupPointAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
