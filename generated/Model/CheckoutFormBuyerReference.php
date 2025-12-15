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

class CheckoutFormBuyerReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * buyer id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $login;
    /**
     * Buyer's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Buyer's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * is a guest account?
     *
     * @var bool|null
     */
    protected $guest;
    /**
     * Buyer's personal identity number (PESEL).
     *
     * @var string|null
     */
    protected $personalIdentity;
    /**
     * Phone number.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var BuyerPreferencesReference|null
     */
    protected $preferences;
    /**
     * Buyer address.
     *
     * @var CheckoutFormBuyerAddressReference|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * buyer id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * buyer id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * Buyer's first name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Buyer's first name.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Buyer's last name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Buyer's last name.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

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
     * is a guest account?
     */
    public function getGuest(): ?bool
    {
        return $this->guest;
    }

    /**
     * is a guest account?
     */
    public function setGuest(?bool $guest): self
    {
        $this->initialized['guest'] = true;
        $this->guest = $guest;

        return $this;
    }

    /**
     * Buyer's personal identity number (PESEL).
     */
    public function getPersonalIdentity(): ?string
    {
        return $this->personalIdentity;
    }

    /**
     * Buyer's personal identity number (PESEL).
     */
    public function setPersonalIdentity(?string $personalIdentity): self
    {
        $this->initialized['personalIdentity'] = true;
        $this->personalIdentity = $personalIdentity;

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

    public function getPreferences(): ?BuyerPreferencesReference
    {
        return $this->preferences;
    }

    public function setPreferences(?BuyerPreferencesReference $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Buyer address.
     */
    public function getAddress(): ?CheckoutFormBuyerAddressReference
    {
        return $this->address;
    }

    /**
     * Buyer address.
     */
    public function setAddress(?CheckoutFormBuyerAddressReference $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
