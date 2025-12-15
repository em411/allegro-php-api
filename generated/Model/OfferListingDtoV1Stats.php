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

class OfferListingDtoV1Stats extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The number of users who added this offer to their watch lists.
     *
     * @var int|null
     */
    protected $watchersCount;
    /**
     * The number of unique users viewing this offer in the past 30 days.
     *
     * @var int|null
     */
    protected $visitsCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The number of users who added this offer to their watch lists.
     */
    public function getWatchersCount(): ?int
    {
        return $this->watchersCount;
    }

    /**
     * The number of users who added this offer to their watch lists.
     */
    public function setWatchersCount(?int $watchersCount): self
    {
        $this->initialized['watchersCount'] = true;
        $this->watchersCount = $watchersCount;

        return $this;
    }

    /**
     * The number of unique users viewing this offer in the past 30 days.
     */
    public function getVisitsCount(): ?int
    {
        return $this->visitsCount;
    }

    /**
     * The number of unique users viewing this offer in the past 30 days.
     */
    public function setVisitsCount(?int $visitsCount): self
    {
        $this->initialized['visitsCount'] = true;
        $this->visitsCount = $visitsCount;

        return $this;
    }
}
