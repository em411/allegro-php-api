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

class AutomaticPricingOfferRuleConfigurationPriceRange extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Price range currency type.
     *  * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     *  * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The minimum price that can be set.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice|null
     */
    protected $minPrice;
    /**
     * The maximum price that can be set.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice|null
     */
    protected $maxPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Price range currency type.
     *  * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     *  * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Price range currency type.
     * `BASE_MARKETPLACE_CURRENCY` - The price must be defined in the same currency as offer base marketplace currency.
     * `MARKETPLACE_CURRENCY` - The price must be defined in the same currency as marketplace currency. For a base marketplace this is the only accepted value.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The minimum price that can be set.
     */
    public function getMinPrice(): ?AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice
    {
        return $this->minPrice;
    }

    /**
     * The minimum price that can be set.
     */
    public function setMinPrice(?AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice $minPrice): self
    {
        $this->initialized['minPrice'] = true;
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * The maximum price that can be set.
     */
    public function getMaxPrice(): ?AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice
    {
        return $this->maxPrice;
    }

    /**
     * The maximum price that can be set.
     */
    public function setMaxPrice(?AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice $maxPrice): self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;

        return $this;
    }
}
