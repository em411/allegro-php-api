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

class WeightValue extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Weight value, provided in a string format to avoid rounding errors.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Weight unit. Currently only `KILOGRAMS` is accepted.
     *
     * @var string|null
     */
    protected $unit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Weight value, provided in a string format to avoid rounding errors.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Weight value, provided in a string format to avoid rounding errors.
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Weight unit. Currently only `KILOGRAMS` is accepted.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Weight unit. Currently only `KILOGRAMS` is accepted.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }
}
