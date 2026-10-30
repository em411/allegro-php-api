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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class PickupDateProposalsDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $shipmentId;
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

    public function definedProperties(): array
    {
        return ['shipmentId' => ['shipmentId', 'getShipmentId', 'setShipmentId'], 'pickupTimes' => ['pickupTimes', 'getPickupTimes', 'setPickupTimes']];
    }
}
