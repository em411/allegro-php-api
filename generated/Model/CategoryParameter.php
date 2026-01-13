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

class CategoryParameter extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the parameter.
     *
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
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     *
     * @var bool|null
     */
    protected $required;
    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     *
     * @var bool|null
     */
    protected $requiredForProduct;
    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @var CategoryParameterRequirementConditions|null
     */
    protected $requiredIf;
    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     *
     * @var CategoryParameterDisplayConditions|null
     */
    protected $displayedIf;
    /**
     * The unit in which values of the parameter are used. May be `null`.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * A list of the different options which can be used with this parameter.
     *
     * @var CategoryParameterOptions|null
     */
    protected $options;
    /**
     * Data which this parameter had in this category earlier. This field is not visible in JSON if no portion of historical data exists. Otherwise this field is present in JSON with at least one filled field. Please use this field to update your parameter mappings. The contained fields are guaranteed to contain former data at least from the last month.
     *
     * @var FormerCategoryParameterData|null
     */
    protected $formerData;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the parameter.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the parameter.
     */
    public function setId(?string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    public function setName(?string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }

    /**
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the parameter. Other fields in this structure may appear based on the type of the parameter.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also `requiredIf`.
     */
    public function setRequired(?bool $required)
    {
        $this->initialized['required'] = true;
        $this->required = $required;
    }

    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     */
    public function getRequiredForProduct(): ?bool
    {
        return $this->requiredForProduct;
    }

    /**
     * Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created.
     */
    public function setRequiredForProduct(?bool $requiredForProduct)
    {
        $this->initialized['requiredForProduct'] = true;
        $this->requiredForProduct = $requiredForProduct;
    }

    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     */
    public function getRequiredIf(): ?CategoryParameterRequirementConditions
    {
        return $this->requiredIf;
    }

    /**
     * Restricts the circumstances when this parameter is required. `null` if solely the `required` flag determines if this parameter is required. Present if this parameter is required only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     */
    public function setRequiredIf(?CategoryParameterRequirementConditions $requiredIf)
    {
        $this->initialized['requiredIf'] = true;
        $this->requiredIf = $requiredIf;
    }

    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     */
    public function getDisplayedIf(): ?CategoryParameterDisplayConditions
    {
        return $this->displayedIf;
    }

    /**
     * Restricts the circumstances when this parameter should be displayed e.g. on a user form. `null` if this parameter is displayed always. Present if this parameter should be displayed only if all of the contained conditions of all condition types are fulfilled. At least one condition is contained if this field is present.
     */
    public function setDisplayedIf(?CategoryParameterDisplayConditions $displayedIf)
    {
        $this->initialized['displayedIf'] = true;
        $this->displayedIf = $displayedIf;
    }

    /**
     * The unit in which values of the parameter are used. May be `null`.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * The unit in which values of the parameter are used. May be `null`.
     */
    public function setUnit(?string $unit)
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
    }

    /**
     * A list of the different options which can be used with this parameter.
     */
    public function getOptions(): ?CategoryParameterOptions
    {
        return $this->options;
    }

    /**
     * A list of the different options which can be used with this parameter.
     */
    public function setOptions(?CategoryParameterOptions $options)
    {
        $this->initialized['options'] = true;
        $this->options = $options;
    }

    /**
     * Data which this parameter had in this category earlier. This field is not visible in JSON if no portion of historical data exists. Otherwise this field is present in JSON with at least one filled field. Please use this field to update your parameter mappings. The contained fields are guaranteed to contain former data at least from the last month.
     */
    public function getFormerData(): ?FormerCategoryParameterData
    {
        return $this->formerData;
    }

    /**
     * Data which this parameter had in this category earlier. This field is not visible in JSON if no portion of historical data exists. Otherwise this field is present in JSON with at least one filled field. Please use this field to update your parameter mappings. The contained fields are guaranteed to contain former data at least from the last month.
     */
    public function setFormerData(?FormerCategoryParameterData $formerData)
    {
        $this->initialized['formerData'] = true;
        $this->formerData = $formerData;
    }
}
