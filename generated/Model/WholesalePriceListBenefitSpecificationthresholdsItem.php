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

class WholesalePriceListBenefitSpecificationthresholdsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var WholesalePriceListBenefitSpecificationthresholdsItemQuantity|null
     */
    protected $quantity;
    /**
     * @var WholesalePriceListBenefitSpecificationthresholdsItemDiscount|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getQuantity(): ?WholesalePriceListBenefitSpecificationthresholdsItemQuantity
    {
        return $this->quantity;
    }

    public function setQuantity(?WholesalePriceListBenefitSpecificationthresholdsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getDiscount(): ?WholesalePriceListBenefitSpecificationthresholdsItemDiscount
    {
        return $this->discount;
    }

    public function setDiscount(?WholesalePriceListBenefitSpecificationthresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
