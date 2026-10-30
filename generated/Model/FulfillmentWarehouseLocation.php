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

class FulfillmentWarehouseLocation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The warehouse street address.
     *
     * @var string|null
     */
    protected $street;
    /**
     * The warehouse city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The warehouse country code in ISO 3166-1 alpha-2 format.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The warehouse postal code.
     *
     * @var string|null
     */
    protected $postCode;
    /**
     * The province code.
     *
     * @var string|null
     */
    protected $province;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The warehouse street address.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * The warehouse street address.
     */
    public function setStreet(?string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * The warehouse city.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * The warehouse city.
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * The warehouse country code in ISO 3166-1 alpha-2 format.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The warehouse country code in ISO 3166-1 alpha-2 format.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The warehouse postal code.
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * The warehouse postal code.
     */
    public function setPostCode(?string $postCode): self
    {
        $this->initialized['postCode'] = true;
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * The province code.
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * The province code.
     */
    public function setProvince(?string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;

        return $this;
    }
}
