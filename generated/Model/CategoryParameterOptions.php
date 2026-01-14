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

class CategoryParameterOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parameters with this option enabled can be used for offer variants creation.
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $variantsAllowed;
    /**
     * All offer variants must have the same values in parameters with this option enabled.
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $variantsEqual;
    /**
     * Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     *
     * @var string|null
     */
    protected $ambiguousValueId;
    /**
     * Indicates whether this parameter's allowed values depend on another parameter's values. This field is set
     * only for dictionary parameters which have at least one dictionary value with dependent values (see also
     * `dictionary[].dependsOnValueIds`). Otherwise this field is null.
     *
     * @var string|null
     */
    protected $dependsOnParameterId;
    /**
     * Indicates if parameter is used to define products.
     *
     * @var bool|null
     */
    protected $describesProduct;
    /**
     * Indicates if a custom value can be added to a parameter with an ambiguous value.
     *
     * @var bool|null
     */
    protected $customValuesEnabled;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parameters with this option enabled can be used for offer variants creation.
     *
     * @deprecated
     */
    public function getVariantsAllowed(): ?bool
    {
        return $this->variantsAllowed;
    }

    /**
     * Parameters with this option enabled can be used for offer variants creation.
     *
     * @deprecated
     */
    public function setVariantsAllowed(?bool $variantsAllowed): self
    {
        $this->initialized['variantsAllowed'] = true;
        $this->variantsAllowed = $variantsAllowed;

        return $this;
    }

    /**
     * All offer variants must have the same values in parameters with this option enabled.
     *
     * @deprecated
     */
    public function getVariantsEqual(): ?bool
    {
        return $this->variantsEqual;
    }

    /**
     * All offer variants must have the same values in parameters with this option enabled.
     *
     * @deprecated
     */
    public function setVariantsEqual(?bool $variantsEqual): self
    {
        $this->initialized['variantsEqual'] = true;
        $this->variantsEqual = $variantsEqual;

        return $this;
    }

    /**
     * Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     */
    public function getAmbiguousValueId(): ?string
    {
        return $this->ambiguousValueId;
    }

    /**
     * Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     */
    public function setAmbiguousValueId(?string $ambiguousValueId): self
    {
        $this->initialized['ambiguousValueId'] = true;
        $this->ambiguousValueId = $ambiguousValueId;

        return $this;
    }

    /**
     * Indicates whether this parameter's allowed values depend on another parameter's values. This field is set
     * only for dictionary parameters which have at least one dictionary value with dependent values (see also
     * `dictionary[].dependsOnValueIds`). Otherwise this field is null.
     */
    public function getDependsOnParameterId(): ?string
    {
        return $this->dependsOnParameterId;
    }

    /**
     * Indicates whether this parameter's allowed values depend on another parameter's values. This field is set
     * only for dictionary parameters which have at least one dictionary value with dependent values (see also
     * `dictionary[].dependsOnValueIds`). Otherwise this field is null.
     */
    public function setDependsOnParameterId(?string $dependsOnParameterId): self
    {
        $this->initialized['dependsOnParameterId'] = true;
        $this->dependsOnParameterId = $dependsOnParameterId;

        return $this;
    }

    /**
     * Indicates if parameter is used to define products.
     */
    public function getDescribesProduct(): ?bool
    {
        return $this->describesProduct;
    }

    /**
     * Indicates if parameter is used to define products.
     */
    public function setDescribesProduct(?bool $describesProduct): self
    {
        $this->initialized['describesProduct'] = true;
        $this->describesProduct = $describesProduct;

        return $this;
    }

    /**
     * Indicates if a custom value can be added to a parameter with an ambiguous value.
     */
    public function getCustomValuesEnabled(): ?bool
    {
        return $this->customValuesEnabled;
    }

    /**
     * Indicates if a custom value can be added to a parameter with an ambiguous value.
     */
    public function setCustomValuesEnabled(?bool $customValuesEnabled): self
    {
        $this->initialized['customValuesEnabled'] = true;
        $this->customValuesEnabled = $customValuesEnabled;

        return $this;
    }
}
