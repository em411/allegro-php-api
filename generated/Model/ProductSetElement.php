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

class ProductSetElement extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @var mixed|null
     */
    protected $product;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     */
    public function setProduct($product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }
}
