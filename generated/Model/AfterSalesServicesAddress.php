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

class AfterSalesServicesAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Company or person name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Street name.
     *
     * @var string|null
     */
    protected $street;
    /**
     * Post code.
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
     * Company or person name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Company or person name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
     * Post code.
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Post code.
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
