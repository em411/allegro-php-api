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

class CompatibleProductsListDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of compatible products for given type and parameters.
     *
     * @var list<CompatibleProductDto>|null
     */
    protected $compatibleProducts;
    /**
     * Number of returned elements.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of compatible products for given type and parameters.
     *
     * @return list<CompatibleProductDto>|null
     */
    public function getCompatibleProducts(): ?array
    {
        return $this->compatibleProducts;
    }

    /**
     * List of compatible products for given type and parameters.
     *
     * @param list<CompatibleProductDto>|null $compatibleProducts
     */
    public function setCompatibleProducts(?array $compatibleProducts): self
    {
        $this->initialized['compatibleProducts'] = true;
        $this->compatibleProducts = $compatibleProducts;

        return $this;
    }

    /**
     * Number of returned elements.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of returned elements.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of available elements. Field is not present when `phrase` parameter is used.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
