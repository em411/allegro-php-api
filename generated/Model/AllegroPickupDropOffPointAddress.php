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

class AllegroPickupDropOffPointAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $postCode;
    /**
     * City name.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Street.
     *
     * @var string|null
     */
    protected $street;
    /**
     * Country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * @var Coordinates|null
     */
    protected $coordinates;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Postal code.
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Postal code.
     */
    public function setPostCode(?string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;

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
     * Street.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Street.
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

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

    public function getCoordinates(): ?Coordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(?Coordinates $coordinates): self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;

        return $this;
    }
}
