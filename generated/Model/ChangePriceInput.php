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

class ChangePriceInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $buyNowPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price data.
     */
    public function getBuyNowPrice(): ?Price
    {
        return $this->buyNowPrice;
    }

    /**
     * The price data.
     */
    public function setBuyNowPrice(?Price $buyNowPrice): self
    {
        $this->initialized['buyNowPrice'] = true;
        $this->buyNowPrice = $buyNowPrice;

        return $this;
    }
}
