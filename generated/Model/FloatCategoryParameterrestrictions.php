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

class FloatCategoryParameterrestrictions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     *
     * @var float|null
     */
    protected $min;
    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     *
     * @var float|null
     */
    protected $max;
    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     *
     * @var bool|null
     */
    protected $range;
    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     *
     * @var int|null
     */
    protected $precision;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * The minimum value of this parameter. Lower than or equal to `max`.
     */
    public function setMin(?float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * The maximum value of this parameter. Greater than or equal to `min`.
     */
    public function setMax(?float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }

    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     */
    public function getRange(): ?bool
    {
        return $this->range;
    }

    /**
     * Indicates whether this is a range parameter. If this is `true`, then you have to provide two values for this parameter - `from` and `to`. Both these values have to be between the `min` and `max`.
     */
    public function setRange(?bool $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;

        return $this;
    }

    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     */
    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    /**
     * Number of digits you can provide after a comma that can be transferred in the parameter value.
     */
    public function setPrecision(?int $precision): self
    {
        $this->initialized['precision'] = true;
        $this->precision = $precision;

        return $this;
    }
}
