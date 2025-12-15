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

class AutomaticPricingRuleResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of a automatic pricing rule.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The rule type.
     *  * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
     *                     <br />Is not available on base marketplace and business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-przelicznik-cen-LR8WwMKyBf9" target="_blank">More information about EXCHANGE_RATE type</a>.
     *  * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE"  target="_blank">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
     * * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
     * * `FOLLOW_BY_TOP_OFFER_PRICE` - Calculates prices by following the top offer price on market for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_TOP_OFFER_PRICE type</a>.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     *
     * @var bool|null
     */
    protected $default;
    /**
     * The date the rule was last modified in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * @var array<string, mixed>|null
     */
    protected $configuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of a automatic pricing rule.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of a automatic pricing rule.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The rule type.
     *  * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
     *                     <br />Is not available on base marketplace and business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-przelicznik-cen-LR8WwMKyBf9" target="_blank">More information about EXCHANGE_RATE type</a>.
     *  * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE"  target="_blank">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
     * * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
     * * `FOLLOW_BY_TOP_OFFER_PRICE` - Calculates prices by following the top offer price on market for a given marketplace.
     *                     <br />Is not available on business marketplaces.
     *                     <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_TOP_OFFER_PRICE type</a>.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The rule type.
     * `EXCHANGE_RATE` - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.
     * <br />Is not available on base marketplace and business marketplaces.
     * <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-przelicznik-cen-LR8WwMKyBf9" target="_blank">More information about EXCHANGE_RATE type</a>.
     * `FOLLOW_BY_ALLEGRO_MIN_PRICE` - Calculates prices by following the lowest product price on Allegro for a given marketplace.
     * <br />Is not available on business marketplaces.
     * <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE"  target="_blank">More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type</a>.
     * `FOLLOW_BY_MARKET_MIN_PRICE` - Calculates prices by following the lowest product price on market for a given marketplace.
     * <br />Is not available on business marketplaces.
     * <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_MARKET_MIN_PRICE type</a>.
     * `FOLLOW_BY_TOP_OFFER_PRICE` - Calculates prices by following the top offer price on market for a given marketplace.
     * <br />Is not available on business marketplaces.
     * <br /><a href="https://help.allegro.com/pl/sell/a/jak-dzialaja-reguly-cenowe-typu-najnizsza-cena-na-allegro-i-top-oferta-8drjrabe3hE" target="_blank">More information about FOLLOW_BY_TOP_OFFER_PRICE type</a>.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }

    /**
     * Indicates whether a rule is default (true) or created by merchant (false).
     */
    public function setDefault(?bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }

    /**
     * The date the rule was last modified in ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * The date the rule was last modified in ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getConfiguration(): ?iterable
    {
        return $this->configuration;
    }

    /**
     * @param array<string, mixed>|null $configuration
     */
    public function setConfiguration(?iterable $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }
}
