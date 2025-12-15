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

class AlleDiscountListSubmittedResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @var list<AlleDiscountSubmittedOfferDto>|null
     */
    protected $submittedOffers;
    /**
     * Number of offers returned in page.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of submitted offers.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @return list<AlleDiscountSubmittedOfferDto>|null
     */
    public function getSubmittedOffers(): ?array
    {
        return $this->submittedOffers;
    }

    /**
     * Array of offers submitted to a given AlleDiscount campaign. This list contains all active and non active offer participations. There can be only one submission for offer in one AlleDiscount campaign.
     *
     * @param list<AlleDiscountSubmittedOfferDto>|null $submittedOffers
     */
    public function setSubmittedOffers(?array $submittedOffers): self
    {
        $this->initialized['submittedOffers'] = true;
        $this->submittedOffers = $submittedOffers;

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
     * Total number of submitted offers.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of submitted offers.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
