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

class CheckoutFormOrderWaybillResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @var list<CheckoutFormAddWaybillCreated>|null
     */
    protected $shipments;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @return list<CheckoutFormAddWaybillCreated>|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * List of parcel tracking numbers currently assigned to the order.
     *
     * @param list<CheckoutFormAddWaybillCreated>|null $shipments
     */
    public function setShipments(?array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;

        return $this;
    }
}
