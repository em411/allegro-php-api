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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class AutomaticPricingOfferRuleConfiguration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Price range. This field is optional.
     *
     * @var AutomaticPricingOfferRuleConfigurationPriceRange|null
     */
    protected $priceRange;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Price range. This field is optional.
     */
    public function getPriceRange(): ?AutomaticPricingOfferRuleConfigurationPriceRange
    {
        return $this->priceRange;
    }

    /**
     * Price range. This field is optional.
     */
    public function setPriceRange(?AutomaticPricingOfferRuleConfigurationPriceRange $priceRange): self
    {
        $this->initialized['priceRange'] = true;
        $this->priceRange = $priceRange;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['priceRange' => ['priceRange', 'getPriceRange', 'setPriceRange']];
    }
}
