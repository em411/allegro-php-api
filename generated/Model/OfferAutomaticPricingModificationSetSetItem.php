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

class OfferAutomaticPricingModificationSetSetItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferAutomaticPricingModificationSetSetItemMarketplace|null
     */
    protected $marketplace;
    /**
     * @var OfferAutomaticPricingModificationSetSetItemRule|null
     */
    protected $rule;
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE", "FOLLOW_BY_MARKET_MIN_PRICE" and "FOLLOW_BY_TOP_OFFER_PRICE" it is necessary for the rule to work.
     *
     * @var AutomaticPricingOfferRuleConfiguration|null
     */
    protected $configuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplace(): ?OfferAutomaticPricingModificationSetSetItemMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?OfferAutomaticPricingModificationSetSetItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getRule(): ?OfferAutomaticPricingModificationSetSetItemRule
    {
        return $this->rule;
    }

    public function setRule(?OfferAutomaticPricingModificationSetSetItemRule $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;

        return $this;
    }

    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE", "FOLLOW_BY_MARKET_MIN_PRICE" and "FOLLOW_BY_TOP_OFFER_PRICE" it is necessary for the rule to work.
     */
    public function getConfiguration(): ?AutomaticPricingOfferRuleConfiguration
    {
        return $this->configuration;
    }

    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE", "FOLLOW_BY_MARKET_MIN_PRICE" and "FOLLOW_BY_TOP_OFFER_PRICE" it is necessary for the rule to work.
     */
    public function setConfiguration(?AutomaticPricingOfferRuleConfiguration $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }
}
