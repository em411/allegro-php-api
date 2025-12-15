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

class AllegroParcelTrackingStatus extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Actual shipment status change time in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;
    /**
     * Status of the shipment. - `AVAILABLE_FOR_PICKUP` - The parcel is awaiting for pickup. - `DELIVERED` - The parcel was delivered to the receiver / collected by the receiver. - `IN_TRANSIT` - The parcel is on its way to the receiver. The status includes events such as acceptance of the shipment by the carrier, arriving at the hub or redirecting to another address. - `ISSUE` - Problem with shipment. It includes events such as the parcel was refused by the receiver or was lost. - `NOTICE_LEFT` - A notice was left because of an unsuccessful delivery attempt (for example, due to nobody was at the delivery address). - `PENDING` - The shipment has been prepared and it is awaiting to be sent. - `RELEASED_FOR_DELIVERY` - The parcel has been released for delivery to its final destination. - `RETURNED` - The parcel is being or has been returned to the sender.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Optional description for a given status, mainly intended to describe the problem with the shipment.
     *
     * @var string|null
     */
    protected $details;
    /**
     * Indicates the final status, after which there should be no more status changes.
     *
     * @var bool|null
     */
    protected $terminal;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Actual shipment status change time in ISO 8601 format.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * Actual shipment status change time in ISO 8601 format.
     */
    public function setOccurredAt(?\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;

        return $this;
    }

    /**
     * Status of the shipment. - `AVAILABLE_FOR_PICKUP` - The parcel is awaiting for pickup. - `DELIVERED` - The parcel was delivered to the receiver / collected by the receiver. - `IN_TRANSIT` - The parcel is on its way to the receiver. The status includes events such as acceptance of the shipment by the carrier, arriving at the hub or redirecting to another address. - `ISSUE` - Problem with shipment. It includes events such as the parcel was refused by the receiver or was lost. - `NOTICE_LEFT` - A notice was left because of an unsuccessful delivery attempt (for example, due to nobody was at the delivery address). - `PENDING` - The shipment has been prepared and it is awaiting to be sent. - `RELEASED_FOR_DELIVERY` - The parcel has been released for delivery to its final destination. - `RETURNED` - The parcel is being or has been returned to the sender.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Status of the shipment. - `AVAILABLE_FOR_PICKUP` - The parcel is awaiting for pickup. - `DELIVERED` - The parcel was delivered to the receiver / collected by the receiver. - `IN_TRANSIT` - The parcel is on its way to the receiver. The status includes events such as acceptance of the shipment by the carrier, arriving at the hub or redirecting to another address. - `ISSUE` - Problem with shipment. It includes events such as the parcel was refused by the receiver or was lost. - `NOTICE_LEFT` - A notice was left because of an unsuccessful delivery attempt (for example, due to nobody was at the delivery address). - `PENDING` - The shipment has been prepared and it is awaiting to be sent. - `RELEASED_FOR_DELIVERY` - The parcel has been released for delivery to its final destination. - `RETURNED` - The parcel is being or has been returned to the sender.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Optional description for a given status, mainly intended to describe the problem with the shipment.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Optional description for a given status, mainly intended to describe the problem with the shipment.
     */
    public function setDetails(?string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    /**
     * Indicates the final status, after which there should be no more status changes.
     */
    public function getTerminal(): ?bool
    {
        return $this->terminal;
    }

    /**
     * Indicates the final status, after which there should be no more status changes.
     */
    public function setTerminal(?bool $terminal): self
    {
        $this->initialized['terminal'] = true;
        $this->terminal = $terminal;

        return $this;
    }
}
