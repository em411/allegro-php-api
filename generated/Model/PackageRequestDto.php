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

class PackageRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     *
     * @var string|null
     */
    protected $type;
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
    /**
     * @var WeightValue|null
     */
    protected $weight;
    /**
     * Additional information on the package label.
     *
     * @var string|null
     */
    protected $textOnLabel;
    /**
     * Information about carriers involved in transport of that package.
     *
     * @var list<TransportingInfoDto>|null
     */
    protected $transportingInfo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
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

    public function getWeight(): ?WeightValue
    {
        return $this->weight;
    }

    public function setWeight(?WeightValue $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }

    /**
     * Additional information on the package label.
     */
    public function getTextOnLabel(): ?string
    {
        return $this->textOnLabel;
    }

    /**
     * Additional information on the package label.
     */
    public function setTextOnLabel(?string $textOnLabel): self
    {
        $this->initialized['textOnLabel'] = true;
        $this->textOnLabel = $textOnLabel;

        return $this;
    }

    /**
     * Information about carriers involved in transport of that package.
     *
     * @return list<TransportingInfoDto>|null
     */
    public function getTransportingInfo(): ?array
    {
        return $this->transportingInfo;
    }

    /**
     * Information about carriers involved in transport of that package.
     *
     * @param list<TransportingInfoDto>|null $transportingInfo
     */
    public function setTransportingInfo(?array $transportingInfo): self
    {
        $this->initialized['transportingInfo'] = true;
        $this->transportingInfo = $transportingInfo;

        return $this;
    }
}
