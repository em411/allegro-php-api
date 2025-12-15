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

class MultiPackBenefitSpecificationtrigger extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * For every pack of this quantity new rebate will be given.
     *
     * @var float|null
     */
    protected $forEachQuantity;
    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     *
     * @var float|null
     */
    protected $discountedNumber;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * For every pack of this quantity new rebate will be given.
     */
    public function getForEachQuantity(): ?float
    {
        return $this->forEachQuantity;
    }

    /**
     * For every pack of this quantity new rebate will be given.
     */
    public function setForEachQuantity(?float $forEachQuantity): self
    {
        $this->initialized['forEachQuantity'] = true;
        $this->forEachQuantity = $forEachQuantity;

        return $this;
    }

    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     */
    public function getDiscountedNumber(): ?float
    {
        return $this->discountedNumber;
    }

    /**
     * Describes how many offers in pack should be discounted by discount percentage.
     */
    public function setDiscountedNumber(?float $discountedNumber): self
    {
        $this->initialized['discountedNumber'] = true;
        $this->discountedNumber = $discountedNumber;

        return $this;
    }
}
