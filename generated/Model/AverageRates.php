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

class AverageRates extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The average value of delivery rate.
     *
     * @var float|null
     */
    protected $delivery;
    /**
     * The average value of delivery cost rate.
     *
     * @var float|null
     */
    protected $deliveryCost;
    /**
     * The average value of description rate.
     *
     * @var float|null
     */
    protected $description;
    /**
     * The average value of service rate.
     *
     * @var float|null
     */
    protected $service;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The average value of delivery rate.
     */
    public function getDelivery(): ?float
    {
        return $this->delivery;
    }

    /**
     * The average value of delivery rate.
     */
    public function setDelivery(?float $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * The average value of delivery cost rate.
     */
    public function getDeliveryCost(): ?float
    {
        return $this->deliveryCost;
    }

    /**
     * The average value of delivery cost rate.
     */
    public function setDeliveryCost(?float $deliveryCost): self
    {
        $this->initialized['deliveryCost'] = true;
        $this->deliveryCost = $deliveryCost;

        return $this;
    }

    /**
     * The average value of description rate.
     */
    public function getDescription(): ?float
    {
        return $this->description;
    }

    /**
     * The average value of description rate.
     */
    public function setDescription(?float $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The average value of service rate.
     */
    public function getService(): ?float
    {
        return $this->service;
    }

    /**
     * The average value of service rate.
     */
    public function setService(?float $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;

        return $this;
    }
}
