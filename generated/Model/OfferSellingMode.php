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

class OfferSellingMode extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The selling format of the offer.
     *
     * @var string|null
     */
    protected $format;
    /**
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     *
     * @var OfferPrice|null
     */
    protected $price;
    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     *
     * @var OfferFixedPrice|null
     */
    protected $fixedPrice;
    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     *
     * @var int|null
     */
    protected $popularity;
    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+].
     *
     * @var string|null
     */
    protected $popularityRange;
    /**
     * Number of bidders for *AUCTION* selling format.
     *
     * @var int|null
     */
    protected $bidCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The selling format of the offer.
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * The selling format of the offer.
     */
    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    /**
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     */
    public function getPrice(): ?OfferPrice
    {
        return $this->price;
    }

    /**
     * The price of the offer. It is the buy now price for *BUY_NOW* selling format and current auction price for *AUCTION* format.
     */
    public function setPrice(?OfferPrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     */
    public function getFixedPrice(): ?OfferFixedPrice
    {
        return $this->fixedPrice;
    }

    /**
     * Fixed (buy now) price of the offer in case of *AUCTION* selling format with buy now option enabled.
     */
    public function setFixedPrice(?OfferFixedPrice $fixedPrice): self
    {
        $this->initialized['fixedPrice'] = true;
        $this->fixedPrice = $fixedPrice;

        return $this;
    }

    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     */
    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     */
    public function setPopularity(?int $popularity): self
    {
        $this->initialized['popularity'] = true;
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+].
     */
    public function getPopularityRange(): ?string
    {
        return $this->popularityRange;
    }

    /**
     * Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+].
     */
    public function setPopularityRange(?string $popularityRange): self
    {
        $this->initialized['popularityRange'] = true;
        $this->popularityRange = $popularityRange;

        return $this;
    }

    /**
     * Number of bidders for *AUCTION* selling format.
     */
    public function getBidCount(): ?int
    {
        return $this->bidCount;
    }

    /**
     * Number of bidders for *AUCTION* selling format.
     */
    public function setBidCount(?int $bidCount): self
    {
        $this->initialized['bidCount'] = true;
        $this->bidCount = $bidCount;

        return $this;
    }
}
