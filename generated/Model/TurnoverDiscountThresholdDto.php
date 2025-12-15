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

class TurnoverDiscountThresholdDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     *
     * @var TurnoverDiscountThresholdDtoMinimumTurnover|null
     */
    protected $minimumTurnover;
    /**
     * Discount obtained by user after reaching turnover threshold.
     *
     * @var TurnoverDiscountThresholdDtoDiscount|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     */
    public function getMinimumTurnover(): ?TurnoverDiscountThresholdDtoMinimumTurnover
    {
        return $this->minimumTurnover;
    }

    /**
     * The minimum turnover that the buyer is required to accumulate in order to receive a discount for the next month.
     */
    public function setMinimumTurnover(?TurnoverDiscountThresholdDtoMinimumTurnover $minimumTurnover): self
    {
        $this->initialized['minimumTurnover'] = true;
        $this->minimumTurnover = $minimumTurnover;

        return $this;
    }

    /**
     * Discount obtained by user after reaching turnover threshold.
     */
    public function getDiscount(): ?TurnoverDiscountThresholdDtoDiscount
    {
        return $this->discount;
    }

    /**
     * Discount obtained by user after reaching turnover threshold.
     */
    public function setDiscount(?TurnoverDiscountThresholdDtoDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
