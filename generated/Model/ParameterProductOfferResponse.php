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

class ParameterProductOfferResponse extends \ArrayObject
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
     * The name of the parameter.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var ParameterProductOfferResponseRangeValue|null
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

    /**
     * The name of the parameter.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the parameter.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getRangeValue(): ?ParameterProductOfferResponseRangeValue
    {
        return $this->rangeValue;
    }

    public function setRangeValue(?ParameterProductOfferResponseRangeValue $rangeValue): self
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
}
