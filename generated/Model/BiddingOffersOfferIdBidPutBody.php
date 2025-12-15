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

class BiddingOffersOfferIdBidPutBody extends \ArrayObject
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
}
