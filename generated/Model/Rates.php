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

class Rates extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery rate value.
     *
     * @var int|null
     */
    protected $delivery;
    /**
     * Delivery cost rate value.
     *
     * @var int|null
     */
    protected $deliveryCost;
    /**
     * Description rate value.
     *
     * @var int|null
     */
    protected $description;
    /**
     * Service rate value.
     *
     * @var int|null
     */
    protected $service;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery rate value.
     */
    public function getDelivery(): ?int
    {
        return $this->delivery;
    }

    /**
     * Delivery rate value.
     */
    public function setDelivery(?int $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Delivery cost rate value.
     */
    public function getDeliveryCost(): ?int
    {
        return $this->deliveryCost;
    }

    /**
     * Delivery cost rate value.
     */
    public function setDeliveryCost(?int $deliveryCost): self
    {
        $this->initialized['deliveryCost'] = true;
        $this->deliveryCost = $deliveryCost;

        return $this;
    }

    /**
     * Description rate value.
     */
    public function getDescription(): ?int
    {
        return $this->description;
    }

    /**
     * Description rate value.
     */
    public function setDescription(?int $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Service rate value.
     */
    public function getService(): ?int
    {
        return $this->service;
    }

    /**
     * Service rate value.
     */
    public function setService(?int $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;

        return $this;
    }
}
