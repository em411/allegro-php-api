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

class SellingModeWithNetPrice extends \ArrayObject
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
     * The minimal price for offers in auction format.
     *
     * @var MinimalPrice|null
     */
    protected $minimalPrice;
    /**
     * The starting price for offers in auction format.
     *
     * @var StartingPrice|null
     */
    protected $startingPrice;
    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     *
     * @var NetPrice|null
     */
    protected $netPrice;

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

    /**
     * The minimal price for offers in auction format.
     */
    public function getMinimalPrice(): ?MinimalPrice
    {
        return $this->minimalPrice;
    }

    /**
     * The minimal price for offers in auction format.
     */
    public function setMinimalPrice(?MinimalPrice $minimalPrice): self
    {
        $this->initialized['minimalPrice'] = true;
        $this->minimalPrice = $minimalPrice;

        return $this;
    }

    /**
     * The starting price for offers in auction format.
     */
    public function getStartingPrice(): ?StartingPrice
    {
        return $this->startingPrice;
    }

    /**
     * The starting price for offers in auction format.
     */
    public function setStartingPrice(?StartingPrice $startingPrice): self
    {
        $this->initialized['startingPrice'] = true;
        $this->startingPrice = $startingPrice;

        return $this;
    }

    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     */
    public function getNetPrice(): ?NetPrice
    {
        return $this->netPrice;
    }

    /**
     * The buy now net price computed based on tax. Provided for informational purposes only - ignored when creating (POST) or updating (PUT).
     */
    public function setNetPrice(?NetPrice $netPrice): self
    {
        $this->initialized['netPrice'] = true;
        $this->netPrice = $netPrice;

        return $this;
    }
}
