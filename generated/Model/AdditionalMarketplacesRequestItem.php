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

class AdditionalMarketplacesRequestItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AdditionalMarketplacesRequestItemSellingMode|null
     */
    protected $sellingMode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getSellingMode(): ?AdditionalMarketplacesRequestItemSellingMode
    {
        return $this->sellingMode;
    }

    public function setSellingMode(?AdditionalMarketplacesRequestItemSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['sellingMode' => ['sellingMode', 'getSellingMode', 'setSellingMode']];
    }
}
