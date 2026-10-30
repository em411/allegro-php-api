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

class QuantityModification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * modification type.
     *
     * @var string|null
     */
    protected $changeType;
    /**
     * - For changeType = "FIXED", a new stock quantity > 0
     * - For changeType = "GAIN", an increase/decrease in stock quantity.
     *
     * @var int|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * modification type.
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * modification type.
     */
    public function setChangeType(?string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;

        return $this;
    }

    /**
     * - For changeType = "FIXED", a new stock quantity > 0
     * - For changeType = "GAIN", an increase/decrease in stock quantity.
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * - For changeType = "FIXED", a new stock quantity > 0
     * - For changeType = "GAIN", an increase/decrease in stock quantity.
     */
    public function setValue(?int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['changeType' => ['changeType', 'getChangeType', 'setChangeType'], 'value' => ['value', 'getValue', 'setValue']];
    }
}
