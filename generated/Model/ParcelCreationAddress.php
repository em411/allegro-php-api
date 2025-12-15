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

class ParcelCreationAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $street;
    /**
     * @var string|null
     */
    protected $postCode;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     *
     * @var string|null
     */
    protected $countryCode = 'PL';
    /**
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code ).
     *
     * @var string|null
     */
    protected $county;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(?string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code ).
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * Required for shipments to Irleand ( county name ), United States ( state abbreviation / ISO code ), Canada ( province postal code / ISO code ).
     */
    public function setCounty(?string $county): self
    {
        $this->initialized['county'] = true;
        $this->county = $county;

        return $this;
    }
}
