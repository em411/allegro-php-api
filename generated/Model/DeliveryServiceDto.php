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

class DeliveryServiceDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var DeliveryServiceIdDto|null
     */
    protected $id;
    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $carrierId;
    /**
     * @var list<AdditionalServiceDto>|null
     */
    protected $additionalServices;
    /**
     * @var list<AdditionalPropertyDto>|null
     */
    protected $additionalProperties;
    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement.
     *
     * @var string|null
     */
    protected $owner;
    /**
     * List of marketplaces supported by service.
     *
     * @var list<string>|null
     */
    protected $marketplaces;
    /**
     * List of supported package types.
     *
     * @var list<string>|null
     */
    protected $packageTypes;
    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     *
     * @var CashOnDeliveryLimitDto|null
     */
    protected $cashOnDelivery;
    /**
     * @var LimitWithCurrencyDto|null
     */
    protected $insurance;
    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @var array<string, string>|null
     */
    protected $features;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?DeliveryServiceIdDto
    {
        return $this->id;
    }

    public function setId(?DeliveryServiceIdDto $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getCarrierId(): ?string
    {
        return $this->carrierId;
    }

    public function setCarrierId(?string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;

        return $this;
    }

    /**
     * @return list<AdditionalServiceDto>|null
     */
    public function getAdditionalServices(): ?array
    {
        return $this->additionalServices;
    }

    /**
     * @param list<AdditionalServiceDto>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * @return list<AdditionalPropertyDto>|null
     */
    public function getAdditionalProperties(): ?array
    {
        return $this->additionalProperties;
    }

    /**
     * @param list<AdditionalPropertyDto>|null $additionalProperties
     */
    public function setAdditionalProperties(?array $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement.
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement.
     */
    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    /**
     * List of marketplaces supported by service.
     *
     * @return list<string>|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * List of marketplaces supported by service.
     *
     * @param list<string>|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }

    /**
     * List of supported package types.
     *
     * @return list<string>|null
     */
    public function getPackageTypes(): ?array
    {
        return $this->packageTypes;
    }

    /**
     * List of supported package types.
     *
     * @param list<string>|null $packageTypes
     */
    public function setPackageTypes(?array $packageTypes): self
    {
        $this->initialized['packageTypes'] = true;
        $this->packageTypes = $packageTypes;

        return $this;
    }

    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     */
    public function getCashOnDelivery(): ?CashOnDeliveryLimitDto
    {
        return $this->cashOnDelivery;
    }

    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     */
    public function setCashOnDelivery(?CashOnDeliveryLimitDto $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    public function getInsurance(): ?LimitWithCurrencyDto
    {
        return $this->insurance;
    }

    public function setInsurance(?LimitWithCurrencyDto $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @return array<string, string>|null
     */
    public function getFeatures(): ?iterable
    {
        return $this->features;
    }

    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @param array<string, string>|null $features
     */
    public function setFeatures(?iterable $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }
}
