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

class PickupDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Pickup identification number used in the carrier systems.
     *
     * @var string|null
     */
    protected $carrierPickupId;
    /**
     * ID of carrier that handles the service of the shipment.
     *
     * @var string|null
     */
    protected $carrier;
    /**
     * ID of carrier that transports the package from the pickup.
     *
     * @var string|null
     */
    protected $pickupCarrier;
    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     *
     * @var SenderAddressDto|null
     */
    protected $address;
    /**
     * List of shipment IDs regarding this pickup.
     *
     * @var list<string>|null
     */
    protected $shipmentIds;
    /**
     * List of waybills regarding this pickup.
     *
     * @var list<string>|null
     */
    protected $waybills;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Pickup identification number used in the carrier systems.
     */
    public function getCarrierPickupId(): ?string
    {
        return $this->carrierPickupId;
    }

    /**
     * Pickup identification number used in the carrier systems.
     */
    public function setCarrierPickupId(?string $carrierPickupId): self
    {
        $this->initialized['carrierPickupId'] = true;
        $this->carrierPickupId = $carrierPickupId;

        return $this;
    }

    /**
     * ID of carrier that handles the service of the shipment.
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * ID of carrier that handles the service of the shipment.
     */
    public function setCarrier(?string $carrier): self
    {
        $this->initialized['carrier'] = true;
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * ID of carrier that transports the package from the pickup.
     */
    public function getPickupCarrier(): ?string
    {
        return $this->pickupCarrier;
    }

    /**
     * ID of carrier that transports the package from the pickup.
     */
    public function setPickupCarrier(?string $pickupCarrier): self
    {
        $this->initialized['pickupCarrier'] = true;
        $this->pickupCarrier = $pickupCarrier;

        return $this;
    }

    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     */
    public function getAddress(): ?SenderAddressDto
    {
        return $this->address;
    }

    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     */
    public function setAddress(?SenderAddressDto $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * List of shipment IDs regarding this pickup.
     *
     * @return list<string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->shipmentIds;
    }

    /**
     * List of shipment IDs regarding this pickup.
     *
     * @param list<string>|null $shipmentIds
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;

        return $this;
    }

    /**
     * List of waybills regarding this pickup.
     *
     * @return list<string>|null
     */
    public function getWaybills(): ?array
    {
        return $this->waybills;
    }

    /**
     * List of waybills regarding this pickup.
     *
     * @param list<string>|null $waybills
     */
    public function setWaybills(?array $waybills): self
    {
        $this->initialized['waybills'] = true;
        $this->waybills = $waybills;

        return $this;
    }
}
