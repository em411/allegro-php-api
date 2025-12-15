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

class AdvanceShipNoticeList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<AdvanceShipNoticeListItemResponse>|null
     */
    protected $advanceShipNotices;
    /**
     * A number of Advance Ship Notices in response.
     *
     * @var float|null
     */
    protected $count;
    /**
     * A number of Advance Ship Notices in total.
     *
     * @var float|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<AdvanceShipNoticeListItemResponse>|null
     */
    public function getAdvanceShipNotices(): ?array
    {
        return $this->advanceShipNotices;
    }

    /**
     * @param list<AdvanceShipNoticeListItemResponse>|null $advanceShipNotices
     */
    public function setAdvanceShipNotices(?array $advanceShipNotices): self
    {
        $this->initialized['advanceShipNotices'] = true;
        $this->advanceShipNotices = $advanceShipNotices;

        return $this;
    }

    /**
     * A number of Advance Ship Notices in response.
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * A number of Advance Ship Notices in response.
     */
    public function setCount(?float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * A number of Advance Ship Notices in total.
     */
    public function getTotalCount(): ?float
    {
        return $this->totalCount;
    }

    /**
     * A number of Advance Ship Notices in total.
     */
    public function setTotalCount(?float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
