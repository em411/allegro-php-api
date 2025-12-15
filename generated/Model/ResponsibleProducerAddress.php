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

class ResponsibleProducerAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Code of responsible producer country (ISO 3166).
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Street and number.
     *
     * @var string|null
     */
    protected $street;
    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * City.
     *
     * @var string|null
     */
    protected $city;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Code of responsible producer country (ISO 3166).
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Code of responsible producer country (ISO 3166).
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Street and number.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Street and number.
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * Postal code.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Postal code.
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * City.
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }
}
