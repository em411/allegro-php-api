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

class MultiPackBenefitSpecificationConfiguration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * discount percentage.
     *
     * @var float|null
     */
    protected $percentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * discount percentage.
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    /**
     * discount percentage.
     */
    public function setPercentage(?float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['percentage' => ['percentage', 'getPercentage', 'setPercentage']];
    }
}
