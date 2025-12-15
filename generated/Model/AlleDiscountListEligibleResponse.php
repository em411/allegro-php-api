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

class AlleDiscountListEligibleResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @var list<AlleDiscountEligibleOfferDto>|null
     */
    protected $eligibleOffers;
    /**
     * Number of offers returned in page.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of eligible offers.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @return list<AlleDiscountEligibleOfferDto>|null
     */
    public function getEligibleOffers(): ?array
    {
        return $this->eligibleOffers;
    }

    /**
     * Array of offers eligible to be submitted to given AlleDiscount campaign.
     *
     * @param list<AlleDiscountEligibleOfferDto>|null $eligibleOffers
     */
    public function setEligibleOffers(?array $eligibleOffers): self
    {
        $this->initialized['eligibleOffers'] = true;
        $this->eligibleOffers = $eligibleOffers;

        return $this;
    }

    /**
     * Number of offers returned in page.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of offers returned in page.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of eligible offers.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of eligible offers.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
