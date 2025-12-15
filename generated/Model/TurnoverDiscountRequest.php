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

class TurnoverDiscountRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of thresholds to apply to cumulated turnover.
     *
     * @var list<TurnoverDiscountThresholdDto>|null
     */
    protected $thresholds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of thresholds to apply to cumulated turnover.
     *
     * @return list<TurnoverDiscountThresholdDto>|null
     */
    public function getThresholds(): ?array
    {
        return $this->thresholds;
    }

    /**
     * List of thresholds to apply to cumulated turnover.
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
