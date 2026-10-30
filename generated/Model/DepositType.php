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

class DepositType implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The deposit ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The deposit description.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Determines how the deposit price is provided. `FIXED` uses the catalog price returned in `price`. `CUSTOM` requires a seller-provided price in the currency returned in `currency`.
     *
     * @var string|null
     */
    protected $pricingMode;
    /**
     * Fixed catalog price. Returned only for `FIXED` deposit types and omitted for `CUSTOM` deposit types.
     *
     * @var DepositTypePrice|null
     */
    protected $price;
    /**
     * Currency required for the seller-provided deposit price, as a 3-letter ISO 4217 code. Returned only for `CUSTOM` deposit types and omitted for `FIXED` deposit types.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The deposit ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The deposit ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The deposit description.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The deposit description.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Determines how the deposit price is provided. `FIXED` uses the catalog price returned in `price`. `CUSTOM` requires a seller-provided price in the currency returned in `currency`.
     */
    public function getPricingMode(): ?string
    {
        return $this->pricingMode;
    }

    /**
     * Determines how the deposit price is provided. `FIXED` uses the catalog price returned in `price`. `CUSTOM` requires a seller-provided price in the currency returned in `currency`.
     */
    public function setPricingMode(?string $pricingMode): self
    {
        $this->initialized['pricingMode'] = true;
        $this->pricingMode = $pricingMode;

        return $this;
    }

    /**
     * Fixed catalog price. Returned only for `FIXED` deposit types and omitted for `CUSTOM` deposit types.
     */
    public function getPrice(): ?DepositTypePrice
    {
        return $this->price;
    }

    /**
     * Fixed catalog price. Returned only for `FIXED` deposit types and omitted for `CUSTOM` deposit types.
     */
    public function setPrice(?DepositTypePrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * Currency required for the seller-provided deposit price, as a 3-letter ISO 4217 code. Returned only for `CUSTOM` deposit types and omitted for `FIXED` deposit types.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Currency required for the seller-provided deposit price, as a 3-letter ISO 4217 code. Returned only for `CUSTOM` deposit types and omitted for `FIXED` deposit types.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'marketplaceId' => ['marketplaceId', 'getMarketplaceId', 'setMarketplaceId'], 'pricingMode' => ['pricingMode', 'getPricingMode', 'setPricingMode'], 'price' => ['price', 'getPrice', 'setPrice'], 'currency' => ['currency', 'getCurrency', 'setCurrency']];
    }
}
