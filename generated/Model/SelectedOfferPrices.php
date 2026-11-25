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

class SelectedOfferPrices implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer base price before the campaign; null when unavailable.
     *
     * @var SelectedOfferPricesBase|null
     */
    protected $base;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer base price before the campaign; null when unavailable.
     */
    public function getBase(): ?SelectedOfferPricesBase
    {
        return $this->base;
    }

    /**
     * Offer base price before the campaign; null when unavailable.
     */
    public function setBase(?SelectedOfferPricesBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['base' => ['base', 'getBase', 'setBase']];
    }
}
