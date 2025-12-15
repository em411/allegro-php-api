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

class PickupProposalsRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<string>|null
     */
    protected $shipmentIds;
    /**
     * Date when shipments will be ready.
     *
     * @var string|null
     */
    protected $readyDate;
    /**
     * Address where the courier will pick up parcels to be sent.
     *
     * @var PickupAddressDto|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->shipmentIds;
    }

    /**
     * @param list<string>|null $shipmentIds
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;

        return $this;
    }

    /**
     * Date when shipments will be ready.
     */
    public function getReadyDate(): ?string
    {
        return $this->readyDate;
    }

    /**
     * Date when shipments will be ready.
     */
    public function setReadyDate(?string $readyDate): self
    {
        $this->initialized['readyDate'] = true;
        $this->readyDate = $readyDate;

        return $this;
    }

    /**
     * Address where the courier will pick up parcels to be sent.
     */
    public function getAddress(): ?PickupAddressDto
    {
        return $this->address;
    }

    /**
     * Address where the courier will pick up parcels to be sent.
     */
    public function setAddress(?PickupAddressDto $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
