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

class PaymentsRefundsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Collection of payments refunds.
     *
     * @var list<RefundDetails>|null
     */
    protected $refunds;
    /**
     * Number of payment operations returned in search result for the given parameters.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of payment operations for the given parameters.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Collection of payments refunds.
     *
     * @return list<RefundDetails>|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    /**
     * Collection of payments refunds.
     *
     * @param list<RefundDetails>|null $refunds
     */
    public function setRefunds(?array $refunds): self
    {
        $this->initialized['refunds'] = true;
        $this->refunds = $refunds;

        return $this;
    }

    /**
     * Number of payment operations returned in search result for the given parameters.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of payment operations returned in search result for the given parameters.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of payment operations for the given parameters.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of payment operations for the given parameters.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
