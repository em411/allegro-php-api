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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class SelectedOffersResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offers selected for the campaign, in the order returned by the campaign service.
     *
     * @var list<SelectedOffer>|null
     */
    protected $selectedOffers;
    /**
     * Number of offers in this response page.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of selected offers for the campaign.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offers selected for the campaign, in the order returned by the campaign service.
     *
     * @return list<SelectedOffer>|null
     */
    public function getSelectedOffers(): ?array
    {
        return $this->selectedOffers;
    }

    /**
     * Offers selected for the campaign, in the order returned by the campaign service.
     *
     * @param list<SelectedOffer>|null $selectedOffers
     */
    public function setSelectedOffers(?array $selectedOffers): self
    {
        $this->initialized['selectedOffers'] = true;
        $this->selectedOffers = $selectedOffers;

        return $this;
    }

    /**
     * Number of offers in this response page.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of offers in this response page.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of selected offers for the campaign.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of selected offers for the campaign.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['selectedOffers' => ['selectedOffers', 'getSelectedOffers', 'setSelectedOffers'], 'count' => ['count', 'getCount', 'setCount'], 'totalCount' => ['totalCount', 'getTotalCount', 'setTotalCount']];
    }
}
