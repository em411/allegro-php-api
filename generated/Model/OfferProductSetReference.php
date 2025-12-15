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

class OfferProductSetReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of products in a product set.
     *
     * @var list<OfferProductSetProductReference>|null
     */
    protected $products;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of products in a product set.
     *
     * @return list<OfferProductSetProductReference>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * List of products in a product set.
     *
     * @param list<OfferProductSetProductReference>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }
}
