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

class CategoryParameterRequirementConditions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @var list<CategoryParameterWithValue>|null
     */
    protected $parametersWithValue;
    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @var list<CategoryParameterWithoutValue>|null
     */
    protected $parametersWithoutValue;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @return list<CategoryParameterWithValue>|null
     */
    public function getParametersWithValue(): ?array
    {
        return $this->parametersWithValue;
    }

    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present.
     *
     * @param list<CategoryParameterWithValue>|null $parametersWithValue
     */
    public function setParametersWithValue(?array $parametersWithValue): self
    {
        $this->initialized['parametersWithValue'] = true;
        $this->parametersWithValue = $parametersWithValue;

        return $this;
    }

    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @return list<CategoryParameterWithoutValue>|null
     */
    public function getParametersWithoutValue(): ?array
    {
        return $this->parametersWithoutValue;
    }

    /**
     * Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present.
     *
     * @param list<CategoryParameterWithoutValue>|null $parametersWithoutValue
     */
    public function setParametersWithoutValue(?array $parametersWithoutValue): self
    {
        $this->initialized['parametersWithoutValue'] = true;
        $this->parametersWithoutValue = $parametersWithoutValue;

        return $this;
    }
}
