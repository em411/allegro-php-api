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

class Benefit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification.
     *
     * @var BenefitSpecification|null
     */
    protected $specification;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification.
     */
    public function getSpecification(): ?BenefitSpecification
    {
        return $this->specification;
    }

    /**
     * One of: LargeOrderDiscountBenefitSpecification, WholesalePriceListBenefitSpecification, MultiPackBenefitSpecification.
     */
    public function setSpecification(?BenefitSpecification $specification): self
    {
        $this->initialized['specification'] = true;
        $this->specification = $specification;

        return $this;
    }
}
