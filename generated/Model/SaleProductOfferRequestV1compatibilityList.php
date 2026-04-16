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

class SaleProductOfferRequestV1compatibilityList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the compatibility list.
     *
     * @var string|null
     */
    protected $type;
    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @var list<mixed>|null
     */
    protected $items;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the compatibility list.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the compatibility list.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @return list<mixed>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @param list<mixed>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}
