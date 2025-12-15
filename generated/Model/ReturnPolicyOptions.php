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

class ReturnPolicyOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Order sent back with cash on pickup is not allowed.
     *
     * @var bool|null
     */
    protected $cashOnDeliveryNotAllowed;
    /**
     * If free accessories were added to the order, the client needs to send them back.
     *
     * @var bool|null
     */
    protected $freeAccessoriesReturnRequired;
    /**
     * If there was a discount granted after the order, the return is lowered by the received discount.
     *
     * @var bool|null
     */
    protected $refundLoweredByReceivedDiscount;
    /**
     * Returns for B2B purchases allowed.
     *
     * @var bool|null
     */
    protected $businessReturnAllowed;
    /**
     * Return items are picked up by the seller.
     *
     * @var bool|null
     */
    protected $collectBySellerOnly;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Order sent back with cash on pickup is not allowed.
     */
    public function getCashOnDeliveryNotAllowed(): ?bool
    {
        return $this->cashOnDeliveryNotAllowed;
    }

    /**
     * Order sent back with cash on pickup is not allowed.
     */
    public function setCashOnDeliveryNotAllowed(?bool $cashOnDeliveryNotAllowed): self
    {
        $this->initialized['cashOnDeliveryNotAllowed'] = true;
        $this->cashOnDeliveryNotAllowed = $cashOnDeliveryNotAllowed;

        return $this;
    }

    /**
     * If free accessories were added to the order, the client needs to send them back.
     */
    public function getFreeAccessoriesReturnRequired(): ?bool
    {
        return $this->freeAccessoriesReturnRequired;
    }

    /**
     * If free accessories were added to the order, the client needs to send them back.
     */
    public function setFreeAccessoriesReturnRequired(?bool $freeAccessoriesReturnRequired): self
    {
        $this->initialized['freeAccessoriesReturnRequired'] = true;
        $this->freeAccessoriesReturnRequired = $freeAccessoriesReturnRequired;

        return $this;
    }

    /**
     * If there was a discount granted after the order, the return is lowered by the received discount.
     */
    public function getRefundLoweredByReceivedDiscount(): ?bool
    {
        return $this->refundLoweredByReceivedDiscount;
    }

    /**
     * If there was a discount granted after the order, the return is lowered by the received discount.
     */
    public function setRefundLoweredByReceivedDiscount(?bool $refundLoweredByReceivedDiscount): self
    {
        $this->initialized['refundLoweredByReceivedDiscount'] = true;
        $this->refundLoweredByReceivedDiscount = $refundLoweredByReceivedDiscount;

        return $this;
    }

    /**
     * Returns for B2B purchases allowed.
     */
    public function getBusinessReturnAllowed(): ?bool
    {
        return $this->businessReturnAllowed;
    }

    /**
     * Returns for B2B purchases allowed.
     */
    public function setBusinessReturnAllowed(?bool $businessReturnAllowed): self
    {
        $this->initialized['businessReturnAllowed'] = true;
        $this->businessReturnAllowed = $businessReturnAllowed;

        return $this;
    }

    /**
     * Return items are picked up by the seller.
     */
    public function getCollectBySellerOnly(): ?bool
    {
        return $this->collectBySellerOnly;
    }

    /**
     * Return items are picked up by the seller.
     */
    public function setCollectBySellerOnly(?bool $collectBySellerOnly): self
    {
        $this->initialized['collectBySellerOnly'] = true;
        $this->collectBySellerOnly = $collectBySellerOnly;

        return $this;
    }
}
