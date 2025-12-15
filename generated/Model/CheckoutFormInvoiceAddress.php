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

class CheckoutFormInvoiceAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Street name.
     *
     * @var string|null
     */
    protected $street;
    /**
     * City name.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $zipCode;
    /**
     * Country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     *
     * @var CheckoutFormInvoiceAddressCompany|null
     */
    protected $company;
    /**
     * @var CheckoutFormInvoiceAddressNaturalPerson|null
     */
    protected $naturalPerson;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Street name.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Street name.
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * City name.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * City name.
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * Postal code.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Postal code.
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     */
    public function getCompany(): ?CheckoutFormInvoiceAddressCompany
    {
        return $this->company;
    }

    /**
     * Setting the value to null indicates a private purchase, while any other value indicates a corporate purchase.
     */
    public function setCompany(?CheckoutFormInvoiceAddressCompany $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    public function getNaturalPerson(): ?CheckoutFormInvoiceAddressNaturalPerson
    {
        return $this->naturalPerson;
    }

    public function setNaturalPerson(?CheckoutFormInvoiceAddressNaturalPerson $naturalPerson): self
    {
        $this->initialized['naturalPerson'] = true;
        $this->naturalPerson = $naturalPerson;

        return $this;
    }
}
