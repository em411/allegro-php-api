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

class CheckoutFormAddWaybillRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     *
     * @var string|null
     */
    protected $carrierId;
    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     *
     * @var string|null
     */
    protected $waybill;
    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     *
     * @var string|null
     */
    protected $carrierName;
    /**
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @var list<CheckoutFormAddWaybillRequestLineItemsItem>|null
     */
    protected $lineItems;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     */
    public function getCarrierId(): ?string
    {
        return $this->carrierId;
    }

    /**
     * Supported carriers are available via <a href="#operation/getOrdersCarriersUsingGET" target="_blank">shipping carriers resource</a>.
     */
    public function setCarrierId(?string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;

        return $this;
    }

    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     */
    public function getWaybill(): ?string
    {
        return $this->waybill;
    }

    /**
     * Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters.
     */
    public function setWaybill(?string $waybill): self
    {
        $this->initialized['waybill'] = true;
        $this->waybill = $waybill;

        return $this;
    }

    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters.
     */
    public function setCarrierName(?string $carrierName): self
    {
        $this->initialized['carrierName'] = true;
        $this->carrierName = $carrierName;

        return $this;
    }

    /**
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @return list<CheckoutFormAddWaybillRequestLineItemsItem>|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment.
     *
     * @param list<CheckoutFormAddWaybillRequestLineItemsItem>|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }
}
