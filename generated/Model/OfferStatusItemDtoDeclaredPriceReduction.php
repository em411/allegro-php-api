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

class OfferStatusItemDtoDeclaredPriceReduction extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum percentage of base price that the seller declared to discount (as a string, e.g., '10.0' means 10%).
     *
     * @var string|null
     */
    protected $sellerMaxDeclaredPercentage;
    /**
     * @var DeclaredPriceReductionDtoSellerMaxDeclaredDiscount|null
     */
    protected $sellerMaxDeclaredDiscount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum percentage of base price that the seller declared to discount (as a string, e.g., '10.0' means 10%).
     */
    public function getSellerMaxDeclaredPercentage(): ?string
    {
        return $this->sellerMaxDeclaredPercentage;
    }

    /**
     * Maximum percentage of base price that the seller declared to discount (as a string, e.g., '10.0' means 10%).
     */
    public function setSellerMaxDeclaredPercentage(?string $sellerMaxDeclaredPercentage): self
    {
        $this->initialized['sellerMaxDeclaredPercentage'] = true;
        $this->sellerMaxDeclaredPercentage = $sellerMaxDeclaredPercentage;

        return $this;
    }

    public function getSellerMaxDeclaredDiscount(): ?DeclaredPriceReductionDtoSellerMaxDeclaredDiscount
    {
        return $this->sellerMaxDeclaredDiscount;
    }

    public function setSellerMaxDeclaredDiscount(?DeclaredPriceReductionDtoSellerMaxDeclaredDiscount $sellerMaxDeclaredDiscount): self
    {
        $this->initialized['sellerMaxDeclaredDiscount'] = true;
        $this->sellerMaxDeclaredDiscount = $sellerMaxDeclaredDiscount;

        return $this;
    }
}
