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

class SellerDiscountDeclaration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum discount percentage that the seller is willing to contribute (0-100).
     *
     * @var string|null
     */
    protected $maxContributionPercentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum discount percentage that the seller is willing to contribute (0-100).
     */
    public function getMaxContributionPercentage(): ?string
    {
        return $this->maxContributionPercentage;
    }

    /**
     * Maximum discount percentage that the seller is willing to contribute (0-100).
     */
    public function setMaxContributionPercentage(?string $maxContributionPercentage): self
    {
        $this->initialized['maxContributionPercentage'] = true;
        $this->maxContributionPercentage = $maxContributionPercentage;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['maxContributionPercentage' => ['maxContributionPercentage', 'getMaxContributionPercentage', 'setMaxContributionPercentage']];
    }
}
