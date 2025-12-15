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

class ParcelTrackingHistory extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Waybill number (parcel tracking number).
     *
     * @var string|null
     */
    protected $waybill;
    /**
     * Parcel tracking history if available.
     *
     * @var ParcelTrackingHistoryTrackingDetails|null
     */
    protected $trackingDetails;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Waybill number (parcel tracking number).
     */
    public function getWaybill(): ?string
    {
        return $this->waybill;
    }

    /**
     * Waybill number (parcel tracking number).
     */
    public function setWaybill(?string $waybill): self
    {
        $this->initialized['waybill'] = true;
        $this->waybill = $waybill;

        return $this;
    }

    /**
     * Parcel tracking history if available.
     */
    public function getTrackingDetails(): ?ParcelTrackingHistoryTrackingDetails
    {
        return $this->trackingDetails;
    }

    /**
     * Parcel tracking history if available.
     */
    public function setTrackingDetails(?ParcelTrackingHistoryTrackingDetails $trackingDetails): self
    {
        $this->initialized['trackingDetails'] = true;
        $this->trackingDetails = $trackingDetails;

        return $this;
    }
}
