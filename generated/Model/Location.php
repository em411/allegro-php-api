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

class Location extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $city;
    /**
     * The 2-letter country code as defined in ISO 3166.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
     *
     * @var string|null
     */
    protected $postCode;
    /**
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     *
     * @var string|null
     */
    protected $province;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * The 2-letter country code as defined in ISO 3166.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The 2-letter country code as defined in ISO 3166.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * The format of post code depends on 'countryCode'. For countryCode equal to 'PL', the expected format is 'XX-XXX', for other countries format is less restrictive - 12 characters or less are expected.
     */
    public function setPostCode(?string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * This field is mandatory if countryCode is set to "PL", for other values, currently, it is ignored. For countryCode equalling "PL", this field must be set to one of the following: DOLNOSLASKIE, KUJAWSKO_POMORSKIE, LUBELSKIE, LUBUSKIE, LODZKIE, MALOPOLSKIE, MAZOWIECKIE, OPOLSKIE, PODKARPACKIE, PODLASKIE, POMORSKIE, SLASKIE, SWIETOKRZYSKIE, WARMINSKO_MAZURSKIE, WIELKOPOLSKIE, ZACHODNIOPOMORSKIE.
     */
    public function setProvince(?string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;

        return $this;
    }
}
