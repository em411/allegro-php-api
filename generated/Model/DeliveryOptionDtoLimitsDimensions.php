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

class DeliveryOptionDtoLimitsDimensions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var DimensionValue|null
     */
    protected $length;
    /**
     * @var DimensionValue|null
     */
    protected $width;
    /**
     * @var DimensionValue|null
     */
    protected $height;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getLength(): ?DimensionValue
    {
        return $this->length;
    }

    public function setLength(?DimensionValue $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?DimensionValue
    {
        return $this->width;
    }

    public function setWidth(?DimensionValue $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?DimensionValue
    {
        return $this->height;
    }

    public function setHeight(?DimensionValue $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;

        return $this;
    }
}
