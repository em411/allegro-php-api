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

class OfferTaxRate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Tax rate value.
     *
     * @var string|null
     */
    protected $rate;
    /**
     * Tax rate country code.
     *
     * @var string|null
     */
    protected $countryCode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Tax rate value.
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }

    /**
     * Tax rate value.
     */
    public function setRate(?string $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }

    /**
     * Tax rate country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Tax rate country code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }
}
