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

class AvailableProductsList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of products.
     *
     * @var list<AvailableProductResponse>|null
     */
    protected $products;
    /**
     * Number of returned products.
     *
     * @var float|null
     */
    protected $count;
    /**
     * Total number of available products.
     *
     * @var float|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of products.
     *
     * @return list<AvailableProductResponse>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * List of products.
     *
     * @param list<AvailableProductResponse>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    /**
     * Number of returned products.
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * Number of returned products.
     */
    public function setCount(?float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of available products.
     */
    public function getTotalCount(): ?float
    {
        return $this->totalCount;
    }

    /**
     * Total number of available products.
     */
    public function setTotalCount(?float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
