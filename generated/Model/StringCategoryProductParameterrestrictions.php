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

class StringCategoryProductParameterrestrictions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The minimum length of the parameter value.
     *
     * @var int|null
     */
    protected $minLength;
    /**
     * The maximum length of the parameter value.
     *
     * @var int|null
     */
    protected $maxLength;
    /**
     * Indicates how many different values can be provided for this parameter.
     *
     * @var int|null
     */
    protected $allowedNumberOfValues;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The minimum length of the parameter value.
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * The minimum length of the parameter value.
     */
    public function setMinLength(?int $minLength): self
    {
        $this->initialized['minLength'] = true;
        $this->minLength = $minLength;

        return $this;
    }

    /**
     * The maximum length of the parameter value.
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * The maximum length of the parameter value.
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->initialized['maxLength'] = true;
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * Indicates how many different values can be provided for this parameter.
     */
    public function getAllowedNumberOfValues(): ?int
    {
        return $this->allowedNumberOfValues;
    }

    /**
     * Indicates how many different values can be provided for this parameter.
     */
    public function setAllowedNumberOfValues(?int $allowedNumberOfValues): self
    {
        $this->initialized['allowedNumberOfValues'] = true;
        $this->allowedNumberOfValues = $allowedNumberOfValues;

        return $this;
    }
}
