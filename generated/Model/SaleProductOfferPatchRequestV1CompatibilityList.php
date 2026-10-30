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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class SaleProductOfferPatchRequestV1CompatibilityList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @var list<CompatibilityListTextItem>|list<CompatibilityListIdItem>|null
     */
    protected $items;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @return list<CompatibilityListTextItem>|list<CompatibilityListIdItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @param list<CompatibilityListTextItem>|list<CompatibilityListIdItem>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['items' => ['items', 'getItems', 'setItems']];
    }
}
