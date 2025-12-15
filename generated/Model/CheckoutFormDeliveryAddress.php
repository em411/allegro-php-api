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

class CheckoutFormDeliveryAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Receiver's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Receiver's last name.
     *
     * @var string|null
     */
    protected $lastName;
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
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Phone number.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Address modification date.
     *
     * @var string|null
     */
    protected $modifiedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Receiver's first name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Receiver's first name.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Receiver's last name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Receiver's last name.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
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
     * Company name.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Company name.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Phone number.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Phone number.
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Address modification date.
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * Address modification date.
     */
    public function setModifiedAt(?string $modifiedAt): self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;

        return $this;
    }
}
