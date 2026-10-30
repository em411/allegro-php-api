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

class LargeOrderDiscountBenefitSpecificationThresholdsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValue|null
     */
    protected $orderValue;
    /**
     * @var LargeOrderDiscountBenefitSpecificationThresholdsItemDiscount|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOrderValue(): ?LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValue
    {
        return $this->orderValue;
    }

    public function setOrderValue(?LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValue $orderValue): self
    {
        $this->initialized['orderValue'] = true;
        $this->orderValue = $orderValue;

        return $this;
    }

    public function getDiscount(): ?LargeOrderDiscountBenefitSpecificationThresholdsItemDiscount
    {
        return $this->discount;
    }

    public function setDiscount(?LargeOrderDiscountBenefitSpecificationThresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['orderValue' => ['orderValue', 'getOrderValue', 'setOrderValue'], 'discount' => ['discount', 'getDiscount', 'setDiscount']];
    }
}
