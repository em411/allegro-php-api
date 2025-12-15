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

class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     *
     * @var string|null
     */
    protected $categoryId;
    /**
     * Name of supported category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Type of the compatible item.
     *
     * @var string|null
     */
    protected $itemsType;
    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul>.
     *
     * @var string|null
     */
    protected $inputType;
    /**
     * Additional information about constraints assigned to the category.
     *
     * @var CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules|null
     */
    protected $validationRules;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Name of supported category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of supported category.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Type of the compatible item.
     */
    public function getItemsType(): ?string
    {
        return $this->itemsType;
    }

    /**
     * Type of the compatible item.
     */
    public function setItemsType(?string $itemsType): self
    {
        $this->initialized['itemsType'] = true;
        $this->itemsType = $itemsType;

        return $this;
    }

    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul>.
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul>.
     */
    public function setInputType(?string $inputType): self
    {
        $this->initialized['inputType'] = true;
        $this->inputType = $inputType;

        return $this;
    }

    /**
     * Additional information about constraints assigned to the category.
     */
    public function getValidationRules(): ?CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules
    {
        return $this->validationRules;
    }

    /**
     * Additional information about constraints assigned to the category.
     */
    public function setValidationRules(?CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules $validationRules): self
    {
        $this->initialized['validationRules'] = true;
        $this->validationRules = $validationRules;

        return $this;
    }
}
