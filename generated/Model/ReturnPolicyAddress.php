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

class ReturnPolicyAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
     *
     * @var string|null
     */
    protected $street;
    /**
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
     *
     * @var string|null
     */
    protected $postCode;
    /**
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Country code.
     *
     * @var string|null
     */
    protected $countryCode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Company or person name. Length is dependent on specified 'countryCode' - for CZ and SK length is equal to 50 characters, for other countries - 200.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Street name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 35 characters, for other countries - 200.
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Post code format is dependent on 'countryCode' - PL='XX-XXX', CZ='XXX XX', SK='XXX XX' for other countries format is less restrictive - 16 characters alphanumeric with ' '(space) and '-' allowed.
     */
    public function setPostCode(?string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * City name. Length is dependent on specified 'countryCode' - for PL, CZ and SK length is equal to 30 characters, for other countries - 200.
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

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
}
