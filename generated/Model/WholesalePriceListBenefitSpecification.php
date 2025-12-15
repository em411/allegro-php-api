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

class WholesalePriceListBenefitSpecification extends BenefitSpecification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Price list name (visible to you only).
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @var list<WholesalePriceListBenefitSpecificationthresholdsItem>|null
     */
    protected $thresholds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Price list name (visible to you only).
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Price list name (visible to you only).
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @return list<WholesalePriceListBenefitSpecificationthresholdsItem>|null
     */
    public function getThresholds(): ?array
    {
        return $this->thresholds;
    }

    /**
     * List of discount thresholds. A threshold with a higher quantity.lowerBound than another must also have a higher discount.percentage.
     *
     * @param list<WholesalePriceListBenefitSpecificationthresholdsItem>|null $thresholds
     */
    public function setThresholds(?array $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;

        return $this;
    }
}
