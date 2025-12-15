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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     *
     * @var bool|null
     */
    protected $supported;
    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @var string|null
     */
    protected $min;
    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     *
     * @var string|null
     */
    protected $max;
    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     *
     * @var string|null
     */
    protected $unit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     */
    public function getSupported(): ?bool
    {
        return $this->supported;
    }

    /**
     * Indicates whether the maximum package weight can be set in shipping rates for the delivery method.
     */
    public function setSupported(?bool $supported): self
    {
        $this->initialized['supported'] = true;
        $this->supported = $supported;

        return $this;
    }

    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     */
    public function getMin(): ?string
    {
        return $this->min;
    }

    /**
     * Lower limit for the maximum package weight, provided in a string format to avoid rounding errors.
     */
    public function setMin(?string $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     */
    public function getMax(): ?string
    {
        return $this->max;
    }

    /**
     * Upper limit for the maximum package weight, provided in a string format to avoid rounding errors.
     */
    public function setMax(?string $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }

    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Weight unit. Currently only `KILOGRAM` is supported.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }
}
