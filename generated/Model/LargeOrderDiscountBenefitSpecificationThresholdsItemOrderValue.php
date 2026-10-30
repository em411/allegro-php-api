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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class LargeOrderDiscountBenefitSpecificationThresholdsItemOrderValue implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $lowerBound;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price data.
     */
    public function getLowerBound(): ?Price
    {
        return $this->lowerBound;
    }

    /**
     * The price data.
     */
    public function setLowerBound(?Price $lowerBound): self
    {
        $this->initialized['lowerBound'] = true;
        $this->lowerBound = $lowerBound;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['lowerBound' => ['lowerBound', 'getLowerBound', 'setLowerBound']];
    }
}
