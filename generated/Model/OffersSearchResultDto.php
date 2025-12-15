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

class OffersSearchResultDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The list of seller's offers matching the request's criteria.
     *
     * @var list<OfferListingDto>|null
     */
    protected $offers;
    /**
     * Number of offers in the search result.
     *
     * @var int|null
     */
    protected $count;
    /**
     * The total number of offers matching the request's criteria.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The list of seller's offers matching the request's criteria.
     *
     * @return list<OfferListingDto>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * The list of seller's offers matching the request's criteria.
     *
     * @param list<OfferListingDto>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    /**
     * Number of offers in the search result.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of offers in the search result.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * The total number of offers matching the request's criteria.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * The total number of offers matching the request's criteria.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
