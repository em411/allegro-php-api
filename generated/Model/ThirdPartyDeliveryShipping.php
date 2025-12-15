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

class ThirdPartyDeliveryShipping extends ShippingExtended
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Represents shipping details from third party.
     *
     * @var ThirdParty|null
     */
    protected $thirdParty;
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime|null
     */
    protected $estimatedTimeOfArrival;
    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     *
     * @var string|null
     */
    protected $countryCode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Represents shipping details from third party.
     */
    public function getThirdParty(): ?ThirdParty
    {
        return $this->thirdParty;
    }

    /**
     * Represents shipping details from third party.
     */
    public function setThirdParty(?ThirdParty $thirdParty): self
    {
        $this->initialized['thirdParty'] = true;
        $this->thirdParty = $thirdParty;

        return $this;
    }

    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getEstimatedTimeOfArrival(): ?\DateTime
    {
        return $this->estimatedTimeOfArrival;
    }

    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setEstimatedTimeOfArrival(?\DateTime $estimatedTimeOfArrival): self
    {
        $this->initialized['estimatedTimeOfArrival'] = true;
        $this->estimatedTimeOfArrival = $estimatedTimeOfArrival;

        return $this;
    }

    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country code in ISO 3166-1 alpha-2 format (two-letter code), which means the country from which Advance Ship Notice is sent.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }
}
