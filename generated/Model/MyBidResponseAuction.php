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

class MyBidResponseAuction extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The current highest bid in auction format.
     *
     * @var CurrentPrice|null
     */
    protected $currentPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The current highest bid in auction format.
     */
    public function getCurrentPrice(): ?CurrentPrice
    {
        return $this->currentPrice;
    }

    /**
     * The current highest bid in auction format.
     */
    public function setCurrentPrice(?CurrentPrice $currentPrice): self
    {
        $this->initialized['currentPrice'] = true;
        $this->currentPrice = $currentPrice;

        return $this;
    }
}
