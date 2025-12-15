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

class SaleShippingRatesGetResponse200ShippingRatesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Shipping rate ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * User defined name of the shipping rates set.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var SaleShippingRatesGetResponse200ShippingRatesItemFeatures|null
     */
    protected $features;
    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @var list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem>|null
     */
    protected $marketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Shipping rate ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Shipping rate ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * User defined name of the shipping rates set.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User defined name of the shipping rates set.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getFeatures(): ?SaleShippingRatesGetResponse200ShippingRatesItemFeatures
    {
        return $this->features;
    }

    public function setFeatures(?SaleShippingRatesGetResponse200ShippingRatesItemFeatures $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }

    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @return list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem>|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @param list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem>|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }
}
