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

class ProductParameterDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * Parameter's range value.
     *
     * @var ParameterRangeValue|null
     */
    protected $rangeValue;
    /**
     * @var list<string>|null
     */
    protected $values;
    /**
     * @var list<string>|null
     */
    protected $valuesIds;
    /**
     * @var list<string>|null
     */
    protected $valuesLabels;
    /**
     * @var string|null
     */
    protected $unit;
    /**
     * @var ProductParameterDtoOptions|null
     */
    protected $options;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Parameter's range value.
     */
    public function getRangeValue(): ?ParameterRangeValue
    {
        return $this->rangeValue;
    }

    /**
     * Parameter's range value.
     */
    public function setRangeValue(?ParameterRangeValue $rangeValue): self
    {
        $this->initialized['rangeValue'] = true;
        $this->rangeValue = $rangeValue;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param list<string>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getValuesIds(): ?array
    {
        return $this->valuesIds;
    }

    /**
     * @param list<string>|null $valuesIds
     */
    public function setValuesIds(?array $valuesIds): self
    {
        $this->initialized['valuesIds'] = true;
        $this->valuesIds = $valuesIds;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getValuesLabels(): ?array
    {
        return $this->valuesLabels;
    }

    /**
     * @param list<string>|null $valuesLabels
     */
    public function setValuesLabels(?array $valuesLabels): self
    {
        $this->initialized['valuesLabels'] = true;
        $this->valuesLabels = $valuesLabels;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    public function getOptions(): ?ProductParameterDtoOptions
    {
        return $this->options;
    }

    public function setOptions(?ProductParameterDtoOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
