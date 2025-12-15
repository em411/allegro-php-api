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

class StockSellingStats extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Moving daily sales average calculated for last week (7 calendar days before current day). Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @deprecated
     *
     * @var float|null
     */
    protected $lastWeekAverage;
    /**
     * Moving daily sales average calculated for last 14 calendar days before current day. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @var float|null
     */
    protected $lastFourteenDaysAverage;
    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @var float|null
     */
    protected $lastThirtyDaysSum;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Moving daily sales average calculated for last week (7 calendar days before current day). Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @deprecated
     */
    public function getLastWeekAverage(): ?float
    {
        return $this->lastWeekAverage;
    }

    /**
     * Moving daily sales average calculated for last week (7 calendar days before current day). Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     *
     * @deprecated
     */
    public function setLastWeekAverage(?float $lastWeekAverage): self
    {
        $this->initialized['lastWeekAverage'] = true;
        $this->lastWeekAverage = $lastWeekAverage;

        return $this;
    }

    /**
     * Moving daily sales average calculated for last 14 calendar days before current day. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     */
    public function getLastFourteenDaysAverage(): ?float
    {
        return $this->lastFourteenDaysAverage;
    }

    /**
     * Moving daily sales average calculated for last 14 calendar days before current day. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     */
    public function setLastFourteenDaysAverage(?float $lastFourteenDaysAverage): self
    {
        $this->initialized['lastFourteenDaysAverage'] = true;
        $this->lastFourteenDaysAverage = $lastFourteenDaysAverage;

        return $this;
    }

    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     */
    public function getLastThirtyDaysSum(): ?float
    {
        return $this->lastThirtyDaysSum;
    }

    /**
     * Total sales for the last 30 calendar days. Doesn't include sales for current day. Note that this number is not stable and might change between subsequent requests due to e.g. cancellations of orders within the calculation period.
     */
    public function setLastThirtyDaysSum(?float $lastThirtyDaysSum): self
    {
        $this->initialized['lastThirtyDaysSum'] = true;
        $this->lastThirtyDaysSum = $lastThirtyDaysSum;

        return $this;
    }
}
