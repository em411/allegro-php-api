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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery method id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of marketplace ids where this delivery method is available for buyers.
     *
     * @var list<string>|null
     */
    protected $marketplaces;
    /**
     * Whether the payment is to be collected in advance or on delivery.
     *
     * @var string|null
     */
    protected $paymentPolicy;
    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     *
     * @var bool|null
     */
    protected $allegroEndorsed;
    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     *
     * @var string|null
     */
    protected $dispatchCountry;
    /**
     * Country code to which the shipment is being sent.
     *
     * @var string|null
     */
    protected $destinationCountry;
    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints|null
     */
    protected $shippingRatesConstraints;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery method id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Delivery method id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * List of marketplace ids where this delivery method is available for buyers.
     *
     * @return list<string>|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * List of marketplace ids where this delivery method is available for buyers.
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
     * Whether the payment is to be collected in advance or on delivery.
     */
    public function getPaymentPolicy(): ?string
    {
        return $this->paymentPolicy;
    }

    /**
     * Whether the payment is to be collected in advance or on delivery.
     */
    public function setPaymentPolicy(?string $paymentPolicy): self
    {
        $this->initialized['paymentPolicy'] = true;
        $this->paymentPolicy = $paymentPolicy;

        return $this;
    }

    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     */
    public function getAllegroEndorsed(): ?bool
    {
        return $this->allegroEndorsed;
    }

    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     */
    public function setAllegroEndorsed(?bool $allegroEndorsed): self
    {
        $this->initialized['allegroEndorsed'] = true;
        $this->allegroEndorsed = $allegroEndorsed;

        return $this;
    }

    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     */
    public function getDispatchCountry(): ?string
    {
        return $this->dispatchCountry;
    }

    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     */
    public function setDispatchCountry(?string $dispatchCountry): self
    {
        $this->initialized['dispatchCountry'] = true;
        $this->dispatchCountry = $dispatchCountry;

        return $this;
    }

    /**
     * Country code to which the shipment is being sent.
     */
    public function getDestinationCountry(): ?string
    {
        return $this->destinationCountry;
    }

    /**
     * Country code to which the shipment is being sent.
     */
    public function setDestinationCountry(?string $destinationCountry): self
    {
        $this->initialized['destinationCountry'] = true;
        $this->destinationCountry = $destinationCountry;

        return $this;
    }

    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     */
    public function getShippingRatesConstraints(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints
    {
        return $this->shippingRatesConstraints;
    }

    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     */
    public function setShippingRatesConstraints(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints $shippingRatesConstraints): self
    {
        $this->initialized['shippingRatesConstraints'] = true;
        $this->shippingRatesConstraints = $shippingRatesConstraints;

        return $this;
    }
}
