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

class SelectedOfferRestrictionsCampaignStock implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Minimum campaign stock; null when no minimum is provided.
     *
     * @var int|null
     */
    protected $min;
    /**
     * Maximum campaign stock; null when no maximum is provided.
     *
     * @var int|null
     */
    protected $max;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Minimum campaign stock; null when no minimum is provided.
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * Minimum campaign stock; null when no minimum is provided.
     */
    public function setMin(?int $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    /**
     * Maximum campaign stock; null when no maximum is provided.
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * Maximum campaign stock; null when no maximum is provided.
     */
    public function setMax(?int $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['min' => ['min', 'getMin', 'setMin'], 'max' => ['max', 'getMax', 'setMax']];
    }
}
