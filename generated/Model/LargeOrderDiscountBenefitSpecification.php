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

class LargeOrderDiscountBenefitSpecification extends BenefitSpecification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @var list<LargeOrderDiscountBenefitSpecificationthresholdsItem>|null
     */
    protected $thresholds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @return list<LargeOrderDiscountBenefitSpecificationthresholdsItem>|null
     */
    public function getThresholds(): ?array
    {
        return $this->thresholds;
    }

    /**
     * List of order discount thresholds. A threshold with a higher orderValue.lowerBound.amount than another one must also have a higher discount.percentage.
     *
     * @param list<LargeOrderDiscountBenefitSpecificationthresholdsItem>|null $thresholds
     */
    public function setThresholds(?array $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;

        return $this;
    }
}
