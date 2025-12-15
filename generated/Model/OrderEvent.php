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

class OrderEvent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * event id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Order event data.
     *
     * @var OrderEventData|null
     */
    protected $order;
    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro.
     *
     * @var mixed|null
     */
    protected $type;
    /**
     * Date when the event occurred.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * event id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * event id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Order event data.
     */
    public function getOrder(): ?OrderEventData
    {
        return $this->order;
    }

    /**
     * Order event data.
     */
    public function setOrder(?OrderEventData $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro.
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Date when the event occurred.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * Date when the event occurred.
     */
    public function setOccurredAt(?\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;

        return $this;
    }
}
