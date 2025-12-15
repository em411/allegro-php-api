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

class UserRatingSummaryResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     *
     * @var AverageRates|null
     */
    protected $averageRates;
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @var UserRatingSummaryResponseNotRecommended|null
     */
    protected $notRecommended;
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @var UserRatingSummaryResponseRecommended|null
     */
    protected $recommended;
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @var string|null
     */
    protected $recommendedPercentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     */
    public function getAverageRates(): ?AverageRates
    {
        return $this->averageRates;
    }

    /**
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     */
    public function setAverageRates(?AverageRates $averageRates): self
    {
        $this->initialized['averageRates'] = true;
        $this->averageRates = $averageRates;

        return $this;
    }

    /**
     * Summary of data concerning users that do not recommend the seller.
     */
    public function getNotRecommended(): ?UserRatingSummaryResponseNotRecommended
    {
        return $this->notRecommended;
    }

    /**
     * Summary of data concerning users that do not recommend the seller.
     */
    public function setNotRecommended(?UserRatingSummaryResponseNotRecommended $notRecommended): self
    {
        $this->initialized['notRecommended'] = true;
        $this->notRecommended = $notRecommended;

        return $this;
    }

    /**
     * Summary of data concerning users that recommend the seller.
     */
    public function getRecommended(): ?UserRatingSummaryResponseRecommended
    {
        return $this->recommended;
    }

    /**
     * Summary of data concerning users that recommend the seller.
     */
    public function setRecommended(?UserRatingSummaryResponseRecommended $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Percentage of unique buyers recommending the seller.
     */
    public function getRecommendedPercentage(): ?string
    {
        return $this->recommendedPercentage;
    }

    /**
     * Percentage of unique buyers recommending the seller.
     */
    public function setRecommendedPercentage(?string $recommendedPercentage): self
    {
        $this->initialized['recommendedPercentage'] = true;
        $this->recommendedPercentage = $recommendedPercentage;

        return $this;
    }
}
