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

class AutomaticPricingRulePostRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string|null
     */
    protected $name;
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
     * @var array<string, mixed>|null
     */
    protected $configuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
