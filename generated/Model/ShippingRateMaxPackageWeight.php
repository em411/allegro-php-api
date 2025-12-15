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

class ShippingRateMaxPackageWeight extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Weight value with an accuracy of three decimal places.
     *
     * @var string|null
     */
    protected $value;
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
     * Weight value with an accuracy of three decimal places.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Weight value with an accuracy of three decimal places.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

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
