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

class ProductItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The product data.
     *
     * @var Product|null
     */
    protected $product;
    /**
     * The quantity of the product.
     *
     * @var float|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The product data.
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * The product data.
     */
    public function setProduct(?Product $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * The quantity of the product.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * The quantity of the product.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }
}
