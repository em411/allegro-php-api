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

class ShippingRate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ShippingRateDeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @var int|null
     */
    protected $maxQuantityPerPackage;
    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     *
     * @var ShippingRateMaxPackageWeight|null
     */
    protected $maxPackageWeight;
    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     *
     * @var ShippingRateFirstItemRate|null
     */
    protected $firstItemRate;
    /**
     * Deprecated. Rate for every other item, after the first, in the same parcel for the given delivery method. In case of shipping rates with no specified type, the rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource. In case of shipping rates of the `PHYSICAL` or `ELECTRONIC` type, the rate amount must be "0.00".
     *
     * @var ShippingRateNextItemRate|null
     */
    protected $nextItemRate;
    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     *
     * @var ShippingRateShippingTime|null
     */
    protected $shippingTime;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDeliveryMethod(): ?ShippingRateDeliveryMethod
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod(?ShippingRateDeliveryMethod $deliveryMethod): self
    {
        $this->initialized['deliveryMethod'] = true;
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     */
    public function getMaxQuantityPerPackage(): ?int
    {
        return $this->maxQuantityPerPackage;
    }

    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     */
    public function setMaxQuantityPerPackage(?int $maxQuantityPerPackage): self
    {
        $this->initialized['maxQuantityPerPackage'] = true;
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;

        return $this;
    }

    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     */
    public function getMaxPackageWeight(): ?ShippingRateMaxPackageWeight
    {
        return $this->maxPackageWeight;
    }

    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     */
    public function setMaxPackageWeight(?ShippingRateMaxPackageWeight $maxPackageWeight): self
    {
        $this->initialized['maxPackageWeight'] = true;
        $this->maxPackageWeight = $maxPackageWeight;

        return $this;
    }

    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     */
    public function getFirstItemRate(): ?ShippingRateFirstItemRate
    {
        return $this->firstItemRate;
    }

    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     */
    public function setFirstItemRate(?ShippingRateFirstItemRate $firstItemRate): self
    {
        $this->initialized['firstItemRate'] = true;
        $this->firstItemRate = $firstItemRate;

        return $this;
    }

    /**
     * Deprecated. Rate for every other item, after the first, in the same parcel for the given delivery method. In case of shipping rates with no specified type, the rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource. In case of shipping rates of the `PHYSICAL` or `ELECTRONIC` type, the rate amount must be "0.00".
     */
    public function getNextItemRate(): ?ShippingRateNextItemRate
    {
        return $this->nextItemRate;
    }

    /**
     * Deprecated. Rate for every other item, after the first, in the same parcel for the given delivery method. In case of shipping rates with no specified type, the rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource. In case of shipping rates of the `PHYSICAL` or `ELECTRONIC` type, the rate amount must be "0.00".
     */
    public function setNextItemRate(?ShippingRateNextItemRate $nextItemRate): self
    {
        $this->initialized['nextItemRate'] = true;
        $this->nextItemRate = $nextItemRate;

        return $this;
    }

    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     */
    public function getShippingTime(): ?ShippingRateShippingTime
    {
        return $this->shippingTime;
    }

    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     */
    public function setShippingTime(?ShippingRateShippingTime $shippingTime): self
    {
        $this->initialized['shippingTime'] = true;
        $this->shippingTime = $shippingTime;

        return $this;
    }
}
