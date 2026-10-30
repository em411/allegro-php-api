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

class ProductIngredientsRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Optional identifier of the product the ingredients belong to. At most one product in a request may omit this field. When provided, it must not be blank.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * Raw, free-text ingredients declaration to parse. May describe a single ingredients list, or multiple named components separated by newlines, each in the `name:\n ingredient1, ingredient2, ...` format.
     *
     * @var string|null
     */
    protected $ingredients;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Optional identifier of the product the ingredients belong to. At most one product in a request may omit this field. When provided, it must not be blank.
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Optional identifier of the product the ingredients belong to. At most one product in a request may omit this field. When provided, it must not be blank.
     */
    public function setProductId(?string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;

        return $this;
    }

    /**
     * Raw, free-text ingredients declaration to parse. May describe a single ingredients list, or multiple named components separated by newlines, each in the `name:\n ingredient1, ingredient2, ...` format.
     */
    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    /**
     * Raw, free-text ingredients declaration to parse. May describe a single ingredients list, or multiple named components separated by newlines, each in the `name:\n ingredient1, ingredient2, ...` format.
     */
    public function setIngredients(?string $ingredients): self
    {
        $this->initialized['ingredients'] = true;
        $this->ingredients = $ingredients;

        return $this;
    }
}
