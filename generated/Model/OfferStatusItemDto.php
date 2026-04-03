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

class OfferStatusItemDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique offer identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer title/name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var OfferStatusItemDtoMarketplace|null
     */
    protected $marketplace;
    /**
     * Base price of the offer before any discounts. May be null if price is not available.
     *
     * @var array<string, mixed>|null
     */
    protected $basePrice;
    /**
     * @var OfferStatusItemDtoDiscount|null
     */
    protected $discount;
    /**
     * Recommended price reduction for the offer. Contains the recommended seller discount percentage. Null if no recommendation is available.
     *
     * @var RecommendedPriceReductionDto|array<string, mixed>|null
     */
    protected $recommendedPriceReduction;
    /**
     * Information about the seller's declared price reduction for Allegro Prices program. Contains the maximum percentage and amount the seller is willing to discount. Null if the seller has not made a declaration.
     *
     * @var DeclaredPriceReductionDto|array<string, mixed>|null
     */
    protected $declaredPriceReduction;
    /**
     * Information about the actual price reduction currently applied in the Allegro Prices program. Contains details about seller discount, Allegro co-financing, and final price for the buyer. Null if the offer is not currently discounted.
     *
     * @var ActualPriceReductionDto|array<string, mixed>|null
     */
    protected $actualPriceReduction;
    /**
     * Timestamp when the offer was discounted in the Allegro Prices program. Null if the offer is not discounted.
     *
     * @var \DateTime|null
     */
    protected $discountedAt;
    /**
     * Timestamp when the offer was excluded from the Allegro Prices program. Null if the offer is not excluded.
     *
     * @var \DateTime|null
     */
    protected $excludedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique offer identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique offer identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer title/name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Offer title/name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getMarketplace(): ?OfferStatusItemDtoMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?OfferStatusItemDtoMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Base price of the offer before any discounts. May be null if price is not available.
     *
     * @return array<string, mixed>|null
     */
    public function getBasePrice(): ?iterable
    {
        return $this->basePrice;
    }

    /**
     * Base price of the offer before any discounts. May be null if price is not available.
     *
     * @param array<string, mixed>|null $basePrice
     */
    public function setBasePrice(?iterable $basePrice): self
    {
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;

        return $this;
    }

    public function getDiscount(): ?OfferStatusItemDtoDiscount
    {
        return $this->discount;
    }

    public function setDiscount(?OfferStatusItemDtoDiscount $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }

    /**
     * Recommended price reduction for the offer. Contains the recommended seller discount percentage. Null if no recommendation is available.
     *
     * @return RecommendedPriceReductionDto|array<string, mixed>|null
     */
    public function getRecommendedPriceReduction()
    {
        return $this->recommendedPriceReduction;
    }

    /**
     * Recommended price reduction for the offer. Contains the recommended seller discount percentage. Null if no recommendation is available.
     *
     * @param RecommendedPriceReductionDto|array<string, mixed>|null $recommendedPriceReduction
     */
    public function setRecommendedPriceReduction($recommendedPriceReduction): self
    {
        $this->initialized['recommendedPriceReduction'] = true;
        $this->recommendedPriceReduction = $recommendedPriceReduction;

        return $this;
    }

    /**
     * Information about the seller's declared price reduction for Allegro Prices program. Contains the maximum percentage and amount the seller is willing to discount. Null if the seller has not made a declaration.
     *
     * @return DeclaredPriceReductionDto|array<string, mixed>|null
     */
    public function getDeclaredPriceReduction()
    {
        return $this->declaredPriceReduction;
    }

    /**
     * Information about the seller's declared price reduction for Allegro Prices program. Contains the maximum percentage and amount the seller is willing to discount. Null if the seller has not made a declaration.
     *
     * @param DeclaredPriceReductionDto|array<string, mixed>|null $declaredPriceReduction
     */
    public function setDeclaredPriceReduction($declaredPriceReduction): self
    {
        $this->initialized['declaredPriceReduction'] = true;
        $this->declaredPriceReduction = $declaredPriceReduction;

        return $this;
    }

    /**
     * Information about the actual price reduction currently applied in the Allegro Prices program. Contains details about seller discount, Allegro co-financing, and final price for the buyer. Null if the offer is not currently discounted.
     *
     * @return ActualPriceReductionDto|array<string, mixed>|null
     */
    public function getActualPriceReduction()
    {
        return $this->actualPriceReduction;
    }

    /**
     * Information about the actual price reduction currently applied in the Allegro Prices program. Contains details about seller discount, Allegro co-financing, and final price for the buyer. Null if the offer is not currently discounted.
     *
     * @param ActualPriceReductionDto|array<string, mixed>|null $actualPriceReduction
     */
    public function setActualPriceReduction($actualPriceReduction): self
    {
        $this->initialized['actualPriceReduction'] = true;
        $this->actualPriceReduction = $actualPriceReduction;

        return $this;
    }

    /**
     * Timestamp when the offer was discounted in the Allegro Prices program. Null if the offer is not discounted.
     */
    public function getDiscountedAt(): ?\DateTime
    {
        return $this->discountedAt;
    }

    /**
     * Timestamp when the offer was discounted in the Allegro Prices program. Null if the offer is not discounted.
     */
    public function setDiscountedAt(?\DateTime $discountedAt): self
    {
        $this->initialized['discountedAt'] = true;
        $this->discountedAt = $discountedAt;

        return $this;
    }

    /**
     * Timestamp when the offer was excluded from the Allegro Prices program. Null if the offer is not excluded.
     */
    public function getExcludedAt(): ?\DateTime
    {
        return $this->excludedAt;
    }

    /**
     * Timestamp when the offer was excluded from the Allegro Prices program. Null if the offer is not excluded.
     */
    public function setExcludedAt(?\DateTime $excludedAt): self
    {
        $this->initialized['excludedAt'] = true;
        $this->excludedAt = $excludedAt;

        return $this;
    }
}
