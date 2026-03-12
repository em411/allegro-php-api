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

class PickupDateProposalsDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $shipmentId;
    /**
     * @deprecated
     *
     * @var list<PickupDateProposalDto>|null
     */
    protected $proposalItems;
    /**
     * @var list<PickupTimeDto>|null
     */
    protected $pickupTimes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }

    public function setShipmentId(?string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<PickupDateProposalDto>|null
     */
    public function getProposalItems(): ?array
    {
        return $this->proposalItems;
    }

    /**
     * @param list<PickupDateProposalDto>|null $proposalItems
     *
     * @deprecated
     */
    public function setProposalItems(?array $proposalItems): self
    {
        $this->initialized['proposalItems'] = true;
        $this->proposalItems = $proposalItems;

        return $this;
    }

    /**
     * @return list<PickupTimeDto>|null
     */
    public function getPickupTimes(): ?array
    {
        return $this->pickupTimes;
    }

    /**
     * @param list<PickupTimeDto>|null $pickupTimes
     */
    public function setPickupTimes(?array $pickupTimes): self
    {
        $this->initialized['pickupTimes'] = true;
        $this->pickupTimes = $pickupTimes;

        return $this;
    }
}
