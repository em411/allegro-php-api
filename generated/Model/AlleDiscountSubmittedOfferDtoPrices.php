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

class AlleDiscountSubmittedOfferDtoPrices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price you agreed to lower to for the offer.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesProposedPrice|null
     */
    protected $proposedPrice;
    /**
     * Minimal price reduction on the offer.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction|null
     */
    protected $minimalPriceReduction;
    /**
     * Maximum price for the offer after discount. Can be lower.
     *
     * @var AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice|null
     */
    protected $maximumSellingPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function getProposedPrice(): ?AlleDiscountSubmittedOfferDtoPricesProposedPrice
    {
        return $this->proposedPrice;
    }

    /**
     * The price you agreed to lower to for the offer.
     */
    public function setProposedPrice(?AlleDiscountSubmittedOfferDtoPricesProposedPrice $proposedPrice): self
    {
        $this->initialized['proposedPrice'] = true;
        $this->proposedPrice = $proposedPrice;

        return $this;
    }

    /**
     * Minimal price reduction on the offer.
     */
    public function getMinimalPriceReduction(): ?AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction
    {
        return $this->minimalPriceReduction;
    }

    /**
     * Minimal price reduction on the offer.
     */
    public function setMinimalPriceReduction(?AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction $minimalPriceReduction): self
    {
        $this->initialized['minimalPriceReduction'] = true;
        $this->minimalPriceReduction = $minimalPriceReduction;

        return $this;
    }

    /**
     * Maximum price for the offer after discount. Can be lower.
     */
    public function getMaximumSellingPrice(): ?AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice
    {
        return $this->maximumSellingPrice;
    }

    /**
     * Maximum price for the offer after discount. Can be lower.
     */
    public function setMaximumSellingPrice(?AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice $maximumSellingPrice): self
    {
        $this->initialized['maximumSellingPrice'] = true;
        $this->maximumSellingPrice = $maximumSellingPrice;

        return $this;
    }
}
