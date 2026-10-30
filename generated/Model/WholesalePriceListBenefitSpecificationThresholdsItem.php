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

class WholesalePriceListBenefitSpecificationThresholdsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var WholesalePriceListBenefitSpecificationThresholdsItemQuantity|null
     */
    protected $quantity;
    /**
     * @var WholesalePriceListBenefitSpecificationThresholdsItemDiscount|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getQuantity(): ?WholesalePriceListBenefitSpecificationThresholdsItemQuantity
    {
        return $this->quantity;
    }

    public function setQuantity(?WholesalePriceListBenefitSpecificationThresholdsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getDiscount(): ?WholesalePriceListBenefitSpecificationThresholdsItemDiscount
    {
        return $this->discount;
    }

    public function setDiscount(?WholesalePriceListBenefitSpecificationThresholdsItemDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['quantity' => ['quantity', 'getQuantity', 'setQuantity'], 'discount' => ['discount', 'getDiscount', 'setDiscount']];
    }
}
