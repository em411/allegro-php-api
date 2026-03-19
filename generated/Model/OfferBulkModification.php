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

class OfferBulkModification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer Identifier.
     *
     * @var string|null
     */
    protected $offerId;
    /**
     * A map of price modifications where the key is a marketplace identifier - "allegro-pl", "allegro-cz", etc.
     * <br> Multiple modifications on the same marketplace are not allowed.
     *
     * @var array<string, OfferBulkModificationPricesItem>|null
     */
    protected $prices;
    /**
     * Stock modification. <br>
     *  We distinguish 2 types of modification - only one can be chosen at once:
     *  <ul>
     *    <li>FIXED - sets stock exactly to the specified value.</li>
     *    <li>GAIN - increases / decreases current stock by the specified value.</li>
     *  </ul>.
     *
     * @var OfferBulkModificationStock|null
     */
    protected $stock;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer Identifier.
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * Offer Identifier.
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * A map of price modifications where the key is a marketplace identifier - "allegro-pl", "allegro-cz", etc.
     * <br> Multiple modifications on the same marketplace are not allowed.
     *
     * @return array<string, OfferBulkModificationPricesItem>|null
     */
    public function getPrices(): ?iterable
    {
        return $this->prices;
    }

    /**
     * A map of price modifications where the key is a marketplace identifier - "allegro-pl", "allegro-cz", etc.
     * <br> Multiple modifications on the same marketplace are not allowed.
     *
     * @param array<string, OfferBulkModificationPricesItem>|null $prices
     */
    public function setPrices(?iterable $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }

    /**
     * Stock modification. <br>
     *  We distinguish 2 types of modification - only one can be chosen at once:
     *  <ul>
     *    <li>FIXED - sets stock exactly to the specified value.</li>
     *    <li>GAIN - increases / decreases current stock by the specified value.</li>
     *  </ul>.
     */
    public function getStock(): ?OfferBulkModificationStock
    {
        return $this->stock;
    }

    /**
     * Stock modification. <br>
     * We distinguish 2 types of modification - only one can be chosen at once:
     * <ul>
     * <li>FIXED - sets stock exactly to the specified value.</li>
     * <li>GAIN - increases / decreases current stock by the specified value.</li>
     * </ul>.
     */
    public function setStock(?OfferBulkModificationStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }
}
