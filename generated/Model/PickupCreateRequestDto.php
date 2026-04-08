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

class PickupCreateRequestDto extends \ArrayObject
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
     * Internal pickup proposal ID. Required if pickupTime not provided.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $pickupDateProposalId;
    /**
     * Pickup time date proposal. Required if pickupDateProposalId not provided.
     *
     * @var PickupTimeDto|null
     */
    protected $pickupTime;
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
     * Internal pickup proposal ID. Required if pickupTime not provided.
     *
     * @deprecated
     */
    public function getPickupDateProposalId(): ?string
    {
        return $this->pickupDateProposalId;
    }

    /**
     * Internal pickup proposal ID. Required if pickupTime not provided.
     *
     * @deprecated
     */
    public function setPickupDateProposalId(?string $pickupDateProposalId): self
    {
        $this->initialized['pickupDateProposalId'] = true;
        $this->pickupDateProposalId = $pickupDateProposalId;

        return $this;
    }

    /**
     * Pickup time date proposal. Required if pickupDateProposalId not provided.
     */
    public function getPickupTime(): ?PickupTimeDto
    {
        return $this->pickupTime;
    }

    /**
     * Pickup time date proposal. Required if pickupDateProposalId not provided.
     */
    public function setPickupTime(?PickupTimeDto $pickupTime): self
    {
        $this->initialized['pickupTime'] = true;
        $this->pickupTime = $pickupTime;

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
