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

class OfferRating extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Average score of offer rating.
     *
     * @var string|null
     */
    protected $averageScore;
    /**
     * List score distribution with count.
     *
     * @var list<OfferRatingScoreDistributionItem>|null
     */
    protected $scoreDistribution;
    /**
     * Number of total responses.
     *
     * @var int|null
     */
    protected $totalResponses;
    /**
     * List of size feedback.
     *
     * @var list<OfferRatingSizeFeedbackItem>|null
     */
    protected $sizeFeedback;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Average score of offer rating.
     */
    public function getAverageScore(): ?string
    {
        return $this->averageScore;
    }

    /**
     * Average score of offer rating.
     */
    public function setAverageScore(?string $averageScore): self
    {
        $this->initialized['averageScore'] = true;
        $this->averageScore = $averageScore;

        return $this;
    }

    /**
     * List score distribution with count.
     *
     * @return list<OfferRatingScoreDistributionItem>|null
     */
    public function getScoreDistribution(): ?array
    {
        return $this->scoreDistribution;
    }

    /**
     * List score distribution with count.
     *
     * @param list<OfferRatingScoreDistributionItem>|null $scoreDistribution
     */
    public function setScoreDistribution(?array $scoreDistribution): self
    {
        $this->initialized['scoreDistribution'] = true;
        $this->scoreDistribution = $scoreDistribution;

        return $this;
    }

    /**
     * Number of total responses.
     */
    public function getTotalResponses(): ?int
    {
        return $this->totalResponses;
    }

    /**
     * Number of total responses.
     */
    public function setTotalResponses(?int $totalResponses): self
    {
        $this->initialized['totalResponses'] = true;
        $this->totalResponses = $totalResponses;

        return $this;
    }

    /**
     * List of size feedback.
     *
     * @return list<OfferRatingSizeFeedbackItem>|null
     */
    public function getSizeFeedback(): ?array
    {
        return $this->sizeFeedback;
    }

    /**
     * List of size feedback.
     *
     * @param list<OfferRatingSizeFeedbackItem>|null $sizeFeedback
     */
    public function setSizeFeedback(?array $sizeFeedback): self
    {
        $this->initialized['sizeFeedback'] = true;
        $this->sizeFeedback = $sizeFeedback;

        return $this;
    }
}
