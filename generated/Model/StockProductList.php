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

class StockProductList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of products with their quantity.
     *
     * @var list<StockProductItem>|null
     */
    protected $stock;
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
     * List of products with their quantity.
     *
     * @return list<StockProductItem>|null
     */
    public function getStock(): ?array
    {
        return $this->stock;
    }

    /**
     * List of products with their quantity.
     *
     * @param list<StockProductItem>|null $stock
     */
    public function setStock(?array $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

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

    public function definedProperties(): array
    {
        return ['stock' => ['stock', 'getStock', 'setStock'], 'count' => ['count', 'getCount', 'setCount'], 'totalCount' => ['totalCount', 'getTotalCount', 'setTotalCount']];
    }
}
