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

class ParcelTrackingHistoryTrackingDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of parcel shipping statuses.
     *
     * @var list<ParcelTrackingStatus>|null
     */
    protected $statuses;
    /**
     * The start time parcel tracking recording in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Time of registration of the last shipment status change in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of parcel shipping statuses.
     *
     * @return list<ParcelTrackingStatus>|null
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }

    /**
     * List of parcel shipping statuses.
     *
     * @param list<ParcelTrackingStatus>|null $statuses
     */
    public function setStatuses(?array $statuses): self
    {
        $this->initialized['statuses'] = true;
        $this->statuses = $statuses;

        return $this;
    }

    /**
     * The start time parcel tracking recording in ISO 8601 format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * The start time parcel tracking recording in ISO 8601 format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Time of registration of the last shipment status change in ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Time of registration of the last shipment status change in ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
