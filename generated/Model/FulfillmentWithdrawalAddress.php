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

class FulfillmentWithdrawalAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery recipient name (required).
     *
     * @var string|null
     */
    protected $company;
    /**
     * The name of the street, building number and so on, where the building is located (required).
     *
     * @var string|null
     */
    protected $street;
    /**
     * The code used for postal delivery purposes (required).
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The name of the city or town (required).
     *
     * @var string|null
     */
    protected $city;
    /**
     * The country code where the address is located (required).
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Represents international phone number with country code.
     *
     * @var PhoneNumberWithCountryCode|null
     */
    protected $phone;
    /**
     * Additional info which can be passed on courier label but only for parcels with larger dimensions sent not by WzA (SwA).
     *
     * @var string|null
     */
    protected $additionalInfo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery recipient name (required).
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Delivery recipient name (required).
     */
    public function setCompany(?string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    /**
     * The name of the street, building number and so on, where the building is located (required).
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * The name of the street, building number and so on, where the building is located (required).
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * The code used for postal delivery purposes (required).
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * The code used for postal delivery purposes (required).
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * The name of the city or town (required).
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * The name of the city or town (required).
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * The country code where the address is located (required).
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The country code where the address is located (required).
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Represents international phone number with country code.
     */
    public function getPhone(): ?PhoneNumberWithCountryCode
    {
        return $this->phone;
    }

    /**
     * Represents international phone number with country code.
     */
    public function setPhone(?PhoneNumberWithCountryCode $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * Additional info which can be passed on courier label but only for parcels with larger dimensions sent not by WzA (SwA).
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    /**
     * Additional info which can be passed on courier label but only for parcels with larger dimensions sent not by WzA (SwA).
     */
    public function setAdditionalInfo(?string $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
