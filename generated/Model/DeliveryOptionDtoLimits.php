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

class DeliveryOptionDtoLimits extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Monetary value with amount and currency.
     *
     * @var MoneyDto|null
     */
    protected $cashOnDelivery;
    /**
     * Monetary value with amount and currency.
     *
     * @var MoneyDto|null
     */
    protected $insurance;
    /**
     * @var DeliveryOptionDtoLimitsDimensions|null
     */
    protected $dimensions;
    /**
     * @var WeightValue|null
     */
    protected $weight;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Monetary value with amount and currency.
     */
    public function getCashOnDelivery(): ?MoneyDto
    {
        return $this->cashOnDelivery;
    }

    /**
     * Monetary value with amount and currency.
     */
    public function setCashOnDelivery(?MoneyDto $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    /**
     * Monetary value with amount and currency.
     */
    public function getInsurance(): ?MoneyDto
    {
        return $this->insurance;
    }

    /**
     * Monetary value with amount and currency.
     */
    public function setInsurance(?MoneyDto $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;

        return $this;
    }

    public function getDimensions(): ?DeliveryOptionDtoLimitsDimensions
    {
        return $this->dimensions;
    }

    public function setDimensions(?DeliveryOptionDtoLimitsDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getWeight(): ?WeightValue
    {
        return $this->weight;
    }

    public function setWeight(?WeightValue $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }
}
