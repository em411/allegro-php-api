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

class MarketplaceItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Languages available for that marketplace.
     *
     * @var MarketplaceItemLanguages|null
     */
    protected $languages;
    /**
     * Currencies available for that marketplace.
     *
     * @var MarketplaceItemCurrencies|null
     */
    protected $currencies;
    /**
     * List of delivery countries for that marketplace.
     *
     * @var list<MarketplaceItemShippingCountry>|null
     */
    protected $shippingCountries;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Marketplace id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Languages available for that marketplace.
     */
    public function getLanguages(): ?MarketplaceItemLanguages
    {
        return $this->languages;
    }

    /**
     * Languages available for that marketplace.
     */
    public function setLanguages(?MarketplaceItemLanguages $languages): self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;

        return $this;
    }

    /**
     * Currencies available for that marketplace.
     */
    public function getCurrencies(): ?MarketplaceItemCurrencies
    {
        return $this->currencies;
    }

    /**
     * Currencies available for that marketplace.
     */
    public function setCurrencies(?MarketplaceItemCurrencies $currencies): self
    {
        $this->initialized['currencies'] = true;
        $this->currencies = $currencies;

        return $this;
    }

    /**
     * List of delivery countries for that marketplace.
     *
     * @return list<MarketplaceItemShippingCountry>|null
     */
    public function getShippingCountries(): ?array
    {
        return $this->shippingCountries;
    }

    /**
     * List of delivery countries for that marketplace.
     *
     * @param list<MarketplaceItemShippingCountry>|null $shippingCountries
     */
    public function setShippingCountries(?array $shippingCountries): self
    {
        $this->initialized['shippingCountries'] = true;
        $this->shippingCountries = $shippingCountries;

        return $this;
    }
}
