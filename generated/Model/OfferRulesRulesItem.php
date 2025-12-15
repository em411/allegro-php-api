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

class OfferRulesRulesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferRulesRulesItemMarketplace|null
     */
    protected $marketplace;
    /**
     * @var OfferRulesRulesItemRule|null
     */
    protected $rule;
    /**
     * Offer Rule configuration. For "EXCHANGE_RATE" the field is not allowed. For "FOLLOW_BY_ALLEGRO_MIN_PRICE", "FOLLOW_BY_MARKET_MIN_PRICE" and "FOLLOW_BY_TOP_OFFER_PRICE" it is necessary for the rule to work.
     *
     * @var AutomaticPricingOfferRuleConfiguration|null
     */
    protected $configuration;
    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplace(): ?OfferRulesRulesItemMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?OfferRulesRulesItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getRule(): ?OfferRulesRulesItemRule
    {
        return $this->rule;
    }

    public function setRule(?OfferRulesRulesItemRule $rule): self
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

    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * The date the rule assignment to offer.marketplace was last modified in ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
