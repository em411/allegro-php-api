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

class ParseIngredientsRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The category ID of the offer.
     *
     * @var string|null
     */
    protected $categoryId;
    /**
     * List of products for which raw ingredients text should be parsed. Must not be empty.
     *
     * @var list<ProductIngredientsRequest>|null
     */
    protected $products;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The category ID of the offer.
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * The category ID of the offer.
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * List of products for which raw ingredients text should be parsed. Must not be empty.
     *
     * @return list<ProductIngredientsRequest>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * List of products for which raw ingredients text should be parsed. Must not be empty.
     *
     * @param list<ProductIngredientsRequest>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }
}
