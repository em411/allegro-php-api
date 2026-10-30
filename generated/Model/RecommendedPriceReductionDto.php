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

class RecommendedPriceReductionDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Recommended maximum seller declared discount percentage.
     *
     * @var string|null
     */
    protected $sellerMaxDeclaredPercentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Recommended maximum seller declared discount percentage.
     */
    public function getSellerMaxDeclaredPercentage(): ?string
    {
        return $this->sellerMaxDeclaredPercentage;
    }

    /**
     * Recommended maximum seller declared discount percentage.
     */
    public function setSellerMaxDeclaredPercentage(?string $sellerMaxDeclaredPercentage): self
    {
        $this->initialized['sellerMaxDeclaredPercentage'] = true;
        $this->sellerMaxDeclaredPercentage = $sellerMaxDeclaredPercentage;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['sellerMaxDeclaredPercentage' => ['sellerMaxDeclaredPercentage', 'getSellerMaxDeclaredPercentage', 'setSellerMaxDeclaredPercentage']];
    }
}
