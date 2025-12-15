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

class UserRatingSummaryResponseV2 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @var UserRatingSummaryResponseV2Recommended|null
     */
    protected $recommended;
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @var UserRatingSummaryResponseV2NotRecommended|null
     */
    protected $notRecommended;
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @var string|null
     */
    protected $recommendedPercentage;
    /**
     * Summary of ratings statistics.
     *
     * @var UserRatingSummaryResponseV2Statistics|null
     */
    protected $statistics;
    /**
     * Information about the user.
     *
     * @var UserRatingSummaryResponseV2User|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Summary of data concerning users that recommend the seller.
     */
    public function getRecommended(): ?UserRatingSummaryResponseV2Recommended
    {
        return $this->recommended;
    }

    /**
     * Summary of data concerning users that recommend the seller.
     */
    public function setRecommended(?UserRatingSummaryResponseV2Recommended $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Summary of data concerning users that do not recommend the seller.
     */
    public function getNotRecommended(): ?UserRatingSummaryResponseV2NotRecommended
    {
        return $this->notRecommended;
    }

    /**
     * Summary of data concerning users that do not recommend the seller.
     */
    public function setNotRecommended(?UserRatingSummaryResponseV2NotRecommended $notRecommended): self
    {
        $this->initialized['notRecommended'] = true;
        $this->notRecommended = $notRecommended;

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

    /**
     * Summary of ratings statistics.
     */
    public function getStatistics(): ?UserRatingSummaryResponseV2Statistics
    {
        return $this->statistics;
    }

    /**
     * Summary of ratings statistics.
     */
    public function setStatistics(?UserRatingSummaryResponseV2Statistics $statistics): self
    {
        $this->initialized['statistics'] = true;
        $this->statistics = $statistics;

        return $this;
    }

    /**
     * Information about the user.
     */
    public function getUser(): ?UserRatingSummaryResponseV2User
    {
        return $this->user;
    }

    /**
     * Information about the user.
     */
    public function setUser(?UserRatingSummaryResponseV2User $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
