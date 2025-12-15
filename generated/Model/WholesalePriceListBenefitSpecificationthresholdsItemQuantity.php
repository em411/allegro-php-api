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

class WholesalePriceListBenefitSpecificationthresholdsItemQuantity extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Minimum number of units of an offer for which the threshold is applicable.
     *
     * @var float|null
     */
    protected $lowerBound;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Minimum number of units of an offer for which the threshold is applicable.
     */
    public function getLowerBound(): ?float
    {
        return $this->lowerBound;
    }

    /**
     * Minimum number of units of an offer for which the threshold is applicable.
     */
    public function setLowerBound(?float $lowerBound): self
    {
        $this->initialized['lowerBound'] = true;
        $this->lowerBound = $lowerBound;

        return $this;
    }
}
