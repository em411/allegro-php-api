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

class RefundDetailsAdditionalServices implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Additional services amount for payment refund.
     *
     * @var RefundAdditionalServicesValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Additional services amount for payment refund.
     */
    public function getValue(): ?RefundAdditionalServicesValue
    {
        return $this->value;
    }

    /**
     * Additional services amount for payment refund.
     */
    public function setValue(?RefundAdditionalServicesValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue']];
    }
}
