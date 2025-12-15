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

class ParcelAdditionalServicesAvailability extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ParcelAdditionalServicesCashOnDeliveryAvailability|null
     */
    protected $cashOnDelivery;
    /**
     * Delivery services.
     *
     * @var list<ParcelAdditionalServicesOptionAvailability>|null
     */
    protected $options;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCashOnDelivery(): ?ParcelAdditionalServicesCashOnDeliveryAvailability
    {
        return $this->cashOnDelivery;
    }

    public function setCashOnDelivery(?ParcelAdditionalServicesCashOnDeliveryAvailability $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    /**
     * Delivery services.
     *
     * @return list<ParcelAdditionalServicesOptionAvailability>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * Delivery services.
     *
     * @param list<ParcelAdditionalServicesOptionAvailability>|null $options
     */
    public function setOptions(?array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
