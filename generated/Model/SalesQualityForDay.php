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

class SalesQualityForDay extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date for which the result is calculated.
     *
     * @var \DateTime|null
     */
    protected $resultFor;
    /**
     * The total score for the given day.
     *
     * @var float|null
     */
    protected $score;
    /**
     * The main sales quality level for the given day.
     *
     * @var string|null
     */
    protected $grade;
    /**
     * The maximum possible total score for the given day.
     *
     * @var float|null
     */
    protected $maxScore;
    /**
     * @var list<SalesQualityMetric>|null
     */
    protected $metrics;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date for which the result is calculated.
     */
    public function getResultFor(): ?\DateTime
    {
        return $this->resultFor;
    }

    /**
     * Date for which the result is calculated.
     */
    public function setResultFor(?\DateTime $resultFor): self
    {
        $this->initialized['resultFor'] = true;
        $this->resultFor = $resultFor;

        return $this;
    }

    /**
     * The total score for the given day.
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * The total score for the given day.
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * The main sales quality level for the given day.
     */
    public function getGrade(): ?string
    {
        return $this->grade;
    }

    /**
     * The main sales quality level for the given day.
     */
    public function setGrade(?string $grade): self
    {
        $this->initialized['grade'] = true;
        $this->grade = $grade;

        return $this;
    }

    /**
     * The maximum possible total score for the given day.
     */
    public function getMaxScore(): ?float
    {
        return $this->maxScore;
    }

    /**
     * The maximum possible total score for the given day.
     */
    public function setMaxScore(?float $maxScore): self
    {
        $this->initialized['maxScore'] = true;
        $this->maxScore = $maxScore;

        return $this;
    }

    /**
     * @return list<SalesQualityMetric>|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param list<SalesQualityMetric>|null $metrics
     */
    public function setMetrics(?array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }
}
