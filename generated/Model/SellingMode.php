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

class SellingMode extends \ArrayObject
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
     * The buy now or advertisement price (depending on the offer's format).
     *
     * @var BuyNowPrice|null
     */
    protected $price;
    /**
     * @var mixed|null
     */
    protected $minimalPrice;
    /**
     * @var mixed|null
     */
    protected $startingPrice;

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
     * The buy now or advertisement price (depending on the offer's format).
     */
    public function getPrice(): ?BuyNowPrice
    {
        return $this->price;
    }

    /**
     * The buy now or advertisement price (depending on the offer's format).
     */
    public function setPrice(?BuyNowPrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getMinimalPrice()
    {
        return $this->minimalPrice;
    }

    public function setMinimalPrice($minimalPrice): self
    {
        $this->initialized['minimalPrice'] = true;
        $this->minimalPrice = $minimalPrice;

        return $this;
    }

    public function getStartingPrice()
    {
        return $this->startingPrice;
    }

    public function setStartingPrice($startingPrice): self
    {
        $this->initialized['startingPrice'] = true;
        $this->startingPrice = $startingPrice;

        return $this;
    }
}
