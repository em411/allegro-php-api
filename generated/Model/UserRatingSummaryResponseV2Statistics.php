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

class UserRatingSummaryResponseV2Statistics extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Summary of received ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsReceived|null
     */
    protected $received;
    /**
     * Summary of excluded ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsExcluded|null
     */
    protected $excluded;
    /**
     * Summary of removed ratings.
     *
     * @var UserRatingSummaryResponseV2StatisticsRemoved|null
     */
    protected $removed;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Summary of received ratings.
     */
    public function getReceived(): ?UserRatingSummaryResponseV2StatisticsReceived
    {
        return $this->received;
    }

    /**
     * Summary of received ratings.
     */
    public function setReceived(?UserRatingSummaryResponseV2StatisticsReceived $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;

        return $this;
    }

    /**
     * Summary of excluded ratings.
     */
    public function getExcluded(): ?UserRatingSummaryResponseV2StatisticsExcluded
    {
        return $this->excluded;
    }

    /**
     * Summary of excluded ratings.
     */
    public function setExcluded(?UserRatingSummaryResponseV2StatisticsExcluded $excluded): self
    {
        $this->initialized['excluded'] = true;
        $this->excluded = $excluded;

        return $this;
    }

    /**
     * Summary of removed ratings.
     */
    public function getRemoved(): ?UserRatingSummaryResponseV2StatisticsRemoved
    {
        return $this->removed;
    }

    /**
     * Summary of removed ratings.
     */
    public function setRemoved(?UserRatingSummaryResponseV2StatisticsRemoved $removed): self
    {
        $this->initialized['removed'] = true;
        $this->removed = $removed;

        return $this;
    }
}
