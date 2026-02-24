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

class OfferStatusQueryResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of offers matching the query criteria. Each offer contains detailed information about its Allegro Prices status.
     *
     * @var list<OfferStatusItemDto>|null
     */
    protected $offers;
    /**
     * Total count of offers matching the query criteria.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Number of offers returned in this response (may be less than limit if fewer offers are available).
     *
     * @var int|null
     */
    protected $count;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of offers matching the query criteria. Each offer contains detailed information about its Allegro Prices status.
     *
     * @return list<OfferStatusItemDto>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * List of offers matching the query criteria. Each offer contains detailed information about its Allegro Prices status.
     *
     * @param list<OfferStatusItemDto>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    /**
     * Total count of offers matching the query criteria.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total count of offers matching the query criteria.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Number of offers returned in this response (may be less than limit if fewer offers are available).
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of offers returned in this response (may be less than limit if fewer offers are available).
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }
}
