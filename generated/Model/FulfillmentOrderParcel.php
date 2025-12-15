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

class FulfillmentOrderParcel extends \ArrayObject
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
     * List of parcels' items.
     *
     * @var list<FulfillmentOrderParcelItem>|null
     */
    protected $items;

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
     * List of parcels' items.
     *
     * @return list<FulfillmentOrderParcelItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of parcels' items.
     *
     * @param list<FulfillmentOrderParcelItem>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}
