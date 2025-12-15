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

class SmartSellerClassificationReportConditionsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Technical condition name.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Condition name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Minimum required `value` of related user attribute.
     *
     * @var float|null
     */
    protected $threshold;
    /**
     * Indicates whether this condition is met.
     *
     * @var bool|null
     */
    protected $fulfilled;
    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     *
     * @var bool|null
     */
    protected $required;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Technical condition name.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Technical condition name.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Condition name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Condition name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Value of related user attribute that this condition tests. Has to be greater that threshold if present.
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Minimum required `value` of related user attribute.
     */
    public function getThreshold(): ?float
    {
        return $this->threshold;
    }

    /**
     * Minimum required `value` of related user attribute.
     */
    public function setThreshold(?float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;

        return $this;
    }

    /**
     * Indicates whether this condition is met.
     */
    public function getFulfilled(): ?bool
    {
        return $this->fulfilled;
    }

    /**
     * Indicates whether this condition is met.
     */
    public function setFulfilled(?bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Indicates whether this condition is required to obtain Smart! status. Please note that certain conditions may be required (or not) based on result of checking other conditions.
     */
    public function setRequired(?bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }
}
