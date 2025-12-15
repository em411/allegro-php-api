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

class MyBidResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum amount that user is willing to pay for the auction.
     *
     * @var MaxPrice|null
     */
    protected $maxAmount;
    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     *
     * @var bool|null
     */
    protected $minimalPriceMet;
    /**
     * Is this bid currently winning?
     *
     * @var bool|null
     */
    protected $highBidder;
    /**
     * Auction details.
     *
     * @var MyBidResponseAuction|null
     */
    protected $auction;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum amount that user is willing to pay for the auction.
     */
    public function getMaxAmount(): ?MaxPrice
    {
        return $this->maxAmount;
    }

    /**
     * Maximum amount that user is willing to pay for the auction.
     */
    public function setMaxAmount(?MaxPrice $maxAmount): self
    {
        $this->initialized['maxAmount'] = true;
        $this->maxAmount = $maxAmount;

        return $this;
    }

    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     */
    public function getMinimalPriceMet(): ?bool
    {
        return $this->minimalPriceMet;
    }

    /**
     * This indicates if the minimal price of the auction has been met or is not set at all. A minimal price can be set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not higher than the minimal price when the auction ends, the listing ends and the item is not sold.
     */
    public function setMinimalPriceMet(?bool $minimalPriceMet): self
    {
        $this->initialized['minimalPriceMet'] = true;
        $this->minimalPriceMet = $minimalPriceMet;

        return $this;
    }

    /**
     * Is this bid currently winning?
     */
    public function getHighBidder(): ?bool
    {
        return $this->highBidder;
    }

    /**
     * Is this bid currently winning?
     */
    public function setHighBidder(?bool $highBidder): self
    {
        $this->initialized['highBidder'] = true;
        $this->highBidder = $highBidder;

        return $this;
    }

    /**
     * Auction details.
     */
    public function getAuction(): ?MyBidResponseAuction
    {
        return $this->auction;
    }

    /**
     * Auction details.
     */
    public function setAuction(?MyBidResponseAuction $auction): self
    {
        $this->initialized['auction'] = true;
        $this->auction = $auction;

        return $this;
    }
}
