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

class ListingResponseFiltersValues extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     *
     * @var string|null
     */
    protected $name;
    /**
     * Filter value. Should be used as query parameter value in the request. This can be:
     *
     *  - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
     *  filter),
     *  - for other types - a value entered by user.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     *
     * @var string|null
     */
    protected $idSuffix;
    /**
     * Number of search results matching this filter value.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Indicates whether this filter value was used in the current request.
     *
     * @var bool|null
     */
    protected $selected;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the option; for NUMERIC parameters - word indicating start or end of range (i.e. *from*, *to*).
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Filter value. Should be used as query parameter value in the request. This can be:
     *
     *  - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
     *  filter),
     *  - for other types - a value entered by user.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Filter value. Should be used as query parameter value in the request. This can be:
     *
     * - for MULTI and SINGLE parameters - a value identifier (e.g. KUJAWSKO_POMORSKIE option in location.province
     * filter),
     * - for other types - a value entered by user.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     */
    public function getIdSuffix(): ?string
    {
        return $this->idSuffix;
    }

    /**
     * Suffix used as a second part of query parameter name to be used in the request (the first part is the filter ID). Applicable for NUMERIC values only.
     */
    public function setIdSuffix(?string $idSuffix): self
    {
        $this->initialized['idSuffix'] = true;
        $this->idSuffix = $idSuffix;

        return $this;
    }

    /**
     * Number of search results matching this filter value.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of search results matching this filter value.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Indicates whether this filter value was used in the current request.
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }

    /**
     * Indicates whether this filter value was used in the current request.
     */
    public function setSelected(?bool $selected): self
    {
        $this->initialized['selected'] = true;
        $this->selected = $selected;

        return $this;
    }
}
