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

class TurnoverDiscountDefinitionDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * First day of cumulating turnover against definition.
     *
     * @var \DateTime|null
     */
    protected $cumulatingFromDate;
    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     *
     * @var \DateTime|null
     */
    protected $cumulatingToDate;
    /**
     * First day of applying discount from this definition based on cumulated turnover.
     *
     * @var \DateTime|null
     */
    protected $spendingFromDate;
    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     *
     * @var \DateTime|null
     */
    protected $spendingToDate;
    /**
     * Creation date of the definition.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Last update date of the definition.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Turnover discount thresholds.
     *
     * @var list<TurnoverDiscountThresholdDto>|null
     */
    protected $thresholds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * First day of cumulating turnover against definition.
     */
    public function getCumulatingFromDate(): ?\DateTime
    {
        return $this->cumulatingFromDate;
    }

    /**
     * First day of cumulating turnover against definition.
     */
    public function setCumulatingFromDate(?\DateTime $cumulatingFromDate): self
    {
        $this->initialized['cumulatingFromDate'] = true;
        $this->cumulatingFromDate = $cumulatingFromDate;

        return $this;
    }

    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     */
    public function getCumulatingToDate(): ?\DateTime
    {
        return $this->cumulatingToDate;
    }

    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     */
    public function setCumulatingToDate(?\DateTime $cumulatingToDate): self
    {
        $this->initialized['cumulatingToDate'] = true;
        $this->cumulatingToDate = $cumulatingToDate;

        return $this;
    }

    /**
     * First day of applying discount from this definition based on cumulated turnover.
     */
    public function getSpendingFromDate(): ?\DateTime
    {
        return $this->spendingFromDate;
    }

    /**
     * First day of applying discount from this definition based on cumulated turnover.
     */
    public function setSpendingFromDate(?\DateTime $spendingFromDate): self
    {
        $this->initialized['spendingFromDate'] = true;
        $this->spendingFromDate = $spendingFromDate;

        return $this;
    }

    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     */
    public function getSpendingToDate(): ?\DateTime
    {
        return $this->spendingToDate;
    }

    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     */
    public function setSpendingToDate(?\DateTime $spendingToDate): self
    {
        $this->initialized['spendingToDate'] = true;
        $this->spendingToDate = $spendingToDate;

        return $this;
    }

    /**
     * Creation date of the definition.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Creation date of the definition.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Last update date of the definition.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Last update date of the definition.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Turnover discount thresholds.
     *
     * @return list<TurnoverDiscountThresholdDto>|null
     */
    public function getThresholds(): ?array
    {
        return $this->thresholds;
    }

    /**
     * Turnover discount thresholds.
     *
     * @param list<TurnoverDiscountThresholdDto>|null $thresholds
     */
    public function setThresholds(?array $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;

        return $this;
    }
}
