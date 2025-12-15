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

class CheckoutFormFulfillment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Order seller status. The status is managed by the seller, however in some cases the seller can enable automatic change of the status in the Orders [settings](https://salescenter.allegro.com/orders/settings). Order changes to `SENT` status when a tracking number is added to the order and the seller has enabled corresponding setting (see: [here](https://help.allegro.com/sell/en/a/sales-management-via-advanced-settings-of-the-list-of-offers-and-orders-6M9E0wr5Rt5#automatic-status-change-after-adding-a-tracking-number)). Order can be switched to `RETURNED` status when both the buyer returns all order's items and the seller makes a refund for all of the order's items (either automatically or manually, see: [here](https://help.allegro.com/sell/en/a/how-can-i-issue-a-refund-to-the-buyer-k1wRo9wBXUx)). The `RETURNED` status cannot be set by the seller - it changes automatically when corresponding setting is enabled in sale settings (see: [here](https://help.allegro.com/sell/en/a/how-to-use-the-orders-tab-6M9E0wO9BFw#filtering-and-searching-for-orders)).
     *
     * @var mixed|null
     */
    protected $status;
    /**
     * @var CheckoutFormFulfillmentShipmentSummary|null
     */
    protected $shipmentSummary;
    /**
     * @var CheckoutFormFulfillmentProvider|null
     */
    protected $provider;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Order seller status. The status is managed by the seller, however in some cases the seller can enable automatic change of the status in the Orders [settings](https://salescenter.allegro.com/orders/settings). Order changes to `SENT` status when a tracking number is added to the order and the seller has enabled corresponding setting (see: [here](https://help.allegro.com/sell/en/a/sales-management-via-advanced-settings-of-the-list-of-offers-and-orders-6M9E0wr5Rt5#automatic-status-change-after-adding-a-tracking-number)). Order can be switched to `RETURNED` status when both the buyer returns all order's items and the seller makes a refund for all of the order's items (either automatically or manually, see: [here](https://help.allegro.com/sell/en/a/how-can-i-issue-a-refund-to-the-buyer-k1wRo9wBXUx)). The `RETURNED` status cannot be set by the seller - it changes automatically when corresponding setting is enabled in sale settings (see: [here](https://help.allegro.com/sell/en/a/how-to-use-the-orders-tab-6M9E0wO9BFw#filtering-and-searching-for-orders)).
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Order seller status. The status is managed by the seller, however in some cases the seller can enable automatic change of the status in the Orders [settings](https://salescenter.allegro.com/orders/settings). Order changes to `SENT` status when a tracking number is added to the order and the seller has enabled corresponding setting (see: [here](https://help.allegro.com/sell/en/a/sales-management-via-advanced-settings-of-the-list-of-offers-and-orders-6M9E0wr5Rt5#automatic-status-change-after-adding-a-tracking-number)). Order can be switched to `RETURNED` status when both the buyer returns all order's items and the seller makes a refund for all of the order's items (either automatically or manually, see: [here](https://help.allegro.com/sell/en/a/how-can-i-issue-a-refund-to-the-buyer-k1wRo9wBXUx)). The `RETURNED` status cannot be set by the seller - it changes automatically when corresponding setting is enabled in sale settings (see: [here](https://help.allegro.com/sell/en/a/how-to-use-the-orders-tab-6M9E0wO9BFw#filtering-and-searching-for-orders)).
     */
    public function setStatus($status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getShipmentSummary(): ?CheckoutFormFulfillmentShipmentSummary
    {
        return $this->shipmentSummary;
    }

    public function setShipmentSummary(?CheckoutFormFulfillmentShipmentSummary $shipmentSummary): self
    {
        $this->initialized['shipmentSummary'] = true;
        $this->shipmentSummary = $shipmentSummary;

        return $this;
    }

    public function getProvider(): ?CheckoutFormFulfillmentProvider
    {
        return $this->provider;
    }

    public function setProvider(?CheckoutFormFulfillmentProvider $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;

        return $this;
    }
}
