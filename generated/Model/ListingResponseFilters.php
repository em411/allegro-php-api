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

class ListingResponseFilters extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     *
     * @var string|null
     */
    protected $id;
    /**
     * The type of the filter:
     *
     *  - *MULTI* - multiple choice filter,
     *  - *SINGLE* - single select (dropdown) filter,
     *  - *NUMERIC* - range of numeric values (search offers with value matching this range),
     *  - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
     *  - *TEXT* - filter allowing user to input any text.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Name of the filter.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Available filter values.
     *
     * @var list<ListingResponseFiltersValues>|null
     */
    protected $values;
    /**
     * Minimum valid value for filters of type NUMERIC.
     *
     * @var float|null
     */
    protected $minValue;
    /**
     * Maximum valid value for filters of type NUMERIC.
     *
     * @var float|null
     */
    protected $maxValue;
    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     *
     * @var string|null
     */
    protected $unit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters).
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The type of the filter:
     *
     *  - *MULTI* - multiple choice filter,
     *  - *SINGLE* - single select (dropdown) filter,
     *  - *NUMERIC* - range of numeric values (search offers with value matching this range),
     *  - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
     *  - *TEXT* - filter allowing user to input any text.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the filter:
     *
     * - *MULTI* - multiple choice filter,
     * - *SINGLE* - single select (dropdown) filter,
     * - *NUMERIC* - range of numeric values (search offers with value matching this range),
     * - *NUMERIC_SINGLE* - single numeric value (search offers with given value matching the range defined in offer),
     * - *TEXT* - filter allowing user to input any text.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Name of the filter.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the filter.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Available filter values.
     *
     * @return list<ListingResponseFiltersValues>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * Available filter values.
     *
     * @param list<ListingResponseFiltersValues>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }

    /**
     * Minimum valid value for filters of type NUMERIC.
     */
    public function getMinValue(): ?float
    {
        return $this->minValue;
    }

    /**
     * Minimum valid value for filters of type NUMERIC.
     */
    public function setMinValue(?float $minValue): self
    {
        $this->initialized['minValue'] = true;
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * Maximum valid value for filters of type NUMERIC.
     */
    public function getMaxValue(): ?float
    {
        return $this->maxValue;
    }

    /**
     * Maximum valid value for filters of type NUMERIC.
     */
    public function setMaxValue(?float $maxValue): self
    {
        $this->initialized['maxValue'] = true;
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Unit of the NUMERIC/NUMERIC_SINGLE filter.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }
}
