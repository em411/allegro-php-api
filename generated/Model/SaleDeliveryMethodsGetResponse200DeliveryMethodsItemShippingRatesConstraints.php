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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     *
     * @var bool|null
     */
    protected $allowed;
    /**
     * Rules for the quantity per parcel.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage|null
     */
    protected $maxQuantityPerPackage;
    /**
     * Rules for the maximum weight of a package.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight|null
     */
    protected $maxPackageWeight;
    /**
     * Rules for the shipping cost for the first item in the parcel.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate|null
     */
    protected $firstItemRate;
    /**
     * Rules for the shipping time.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime|null
     */
    protected $shippingTime;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     */
    public function getAllowed(): ?bool
    {
        return $this->allowed;
    }

    /**
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     */
    public function setAllowed(?bool $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;

        return $this;
    }

    /**
     * Rules for the quantity per parcel.
     */
    public function getMaxQuantityPerPackage(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage
    {
        return $this->maxQuantityPerPackage;
    }

    /**
     * Rules for the quantity per parcel.
     */
    public function setMaxQuantityPerPackage(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage $maxQuantityPerPackage): self
    {
        $this->initialized['maxQuantityPerPackage'] = true;
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;

        return $this;
    }

    /**
     * Rules for the maximum weight of a package.
     */
    public function getMaxPackageWeight(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight
    {
        return $this->maxPackageWeight;
    }

    /**
     * Rules for the maximum weight of a package.
     */
    public function setMaxPackageWeight(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight $maxPackageWeight): self
    {
        $this->initialized['maxPackageWeight'] = true;
        $this->maxPackageWeight = $maxPackageWeight;

        return $this;
    }

    /**
     * Rules for the shipping cost for the first item in the parcel.
     */
    public function getFirstItemRate(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate
    {
        return $this->firstItemRate;
    }

    /**
     * Rules for the shipping cost for the first item in the parcel.
     */
    public function setFirstItemRate(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate $firstItemRate): self
    {
        $this->initialized['firstItemRate'] = true;
        $this->firstItemRate = $firstItemRate;

        return $this;
    }

    /**
     * Rules for the shipping time.
     */
    public function getShippingTime(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime
    {
        return $this->shippingTime;
    }

    /**
     * Rules for the shipping time.
     */
    public function setShippingTime(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime $shippingTime): self
    {
        $this->initialized['shippingTime'] = true;
        $this->shippingTime = $shippingTime;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['allowed' => ['allowed', 'getAllowed', 'setAllowed'], 'maxQuantityPerPackage' => ['maxQuantityPerPackage', 'getMaxQuantityPerPackage', 'setMaxQuantityPerPackage'], 'maxPackageWeight' => ['maxPackageWeight', 'getMaxPackageWeight', 'setMaxPackageWeight'], 'firstItemRate' => ['firstItemRate', 'getFirstItemRate', 'setFirstItemRate'], 'shippingTime' => ['shippingTime', 'getShippingTime', 'setShippingTime']];
    }
}
