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

class UpdateSubmittedShippingInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime|null
     */
    protected $estimatedTimeOfArrival;
    /**
     * Vehicle licence plate number.
     *
     * @var string|null
     */
    protected $truckLicencePlate;
    /**
     * Represents courier details of shipping.
     *
     * @var Courier|null
     */
    protected $courier;
    /**
     * Represents shipping details from third party.
     *
     * @var ThirdParty|null
     */
    protected $thirdParty;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Vehicle licence plate number.
     */
    public function getTruckLicencePlate(): ?string
    {
        return $this->truckLicencePlate;
    }

    /**
     * Vehicle licence plate number.
     */
    public function setTruckLicencePlate(?string $truckLicencePlate): self
    {
        $this->initialized['truckLicencePlate'] = true;
        $this->truckLicencePlate = $truckLicencePlate;

        return $this;
    }

    /**
     * Represents courier details of shipping.
     */
    public function getCourier(): ?Courier
    {
        return $this->courier;
    }

    /**
     * Represents courier details of shipping.
     */
    public function setCourier(?Courier $courier): self
    {
        $this->initialized['courier'] = true;
        $this->courier = $courier;

        return $this;
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
}
