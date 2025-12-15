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

class LargeOrderDiscountBenefitSpecificationthresholdsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue|null
     */
    protected $orderValue;
    /**
     * @var LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOrderValue(): ?LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue
    {
        return $this->orderValue;
    }

    public function setOrderValue(?LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue $orderValue): self
    {
        $this->initialized['orderValue'] = true;
        $this->orderValue = $orderValue;

        return $this;
    }

    public function getDiscount(): ?LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount
    {
        return $this->discount;
    }

    public function setDiscount(?LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
