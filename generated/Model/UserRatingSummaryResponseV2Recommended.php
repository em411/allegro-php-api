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

class UserRatingSummaryResponseV2Recommended extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Number of recommending unique users.
     *
     * @var int|null
     */
    protected $unique;
    /**
     * Total number of positive feedbacks received.
     *
     * @var int|null
     */
    protected $total;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Number of recommending unique users.
     */
    public function getUnique(): ?int
    {
        return $this->unique;
    }

    /**
     * Number of recommending unique users.
     */
    public function setUnique(?int $unique): self
    {
        $this->initialized['unique'] = true;
        $this->unique = $unique;

        return $this;
    }

    /**
     * Total number of positive feedbacks received.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total number of positive feedbacks received.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }
}
