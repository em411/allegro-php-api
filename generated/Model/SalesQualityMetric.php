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

class SalesQualityMetric extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The code name of the metric.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Translated name of the metric.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The score for the given metric.
     *
     * @var float|null
     */
    protected $score;
    /**
     * The maximum possible score for the given metric.
     *
     * @var float|null
     */
    protected $maxScore;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The code name of the metric.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The code name of the metric.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Translated name of the metric.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Translated name of the metric.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The score for the given metric.
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * The score for the given metric.
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * The maximum possible score for the given metric.
     */
    public function getMaxScore(): ?float
    {
        return $this->maxScore;
    }

    /**
     * The maximum possible score for the given metric.
     */
    public function setMaxScore(?float $maxScore): self
    {
        $this->initialized['maxScore'] = true;
        $this->maxScore = $maxScore;

        return $this;
    }
}
