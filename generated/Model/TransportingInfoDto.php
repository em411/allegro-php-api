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

class TransportingInfoDto extends \ArrayObject
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
     * Carrier Waybill number.
     *
     * @var string|null
     */
    protected $carrierWaybill;

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
     * Carrier Waybill number.
     */
    public function getCarrierWaybill(): ?string
    {
        return $this->carrierWaybill;
    }

    /**
     * Carrier Waybill number.
     */
    public function setCarrierWaybill(?string $carrierWaybill): self
    {
        $this->initialized['carrierWaybill'] = true;
        $this->carrierWaybill = $carrierWaybill;

        return $this;
    }
}
