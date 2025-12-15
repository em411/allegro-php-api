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

class CarrierParcelTrackingResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Carrier identifier.
     *
     * @var string|null
     */
    protected $carrierId;
    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @var list<ParcelTrackingHistory>|null
     */
    protected $waybills;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Carrier identifier.
     */
    public function getCarrierId(): ?string
    {
        return $this->carrierId;
    }

    /**
     * Carrier identifier.
     */
    public function setCarrierId(?string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;

        return $this;
    }

    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @return list<ParcelTrackingHistory>|null
     */
    public function getWaybills(): ?array
    {
        return $this->waybills;
    }

    /**
     * Allegro parcel tracking history for multiple tracking numbers (waybills).
     *
     * @param list<ParcelTrackingHistory>|null $waybills
     */
    public function setWaybills(?array $waybills): self
    {
        $this->initialized['waybills'] = true;
        $this->waybills = $waybills;

        return $this;
    }
}
