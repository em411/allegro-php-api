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

class GetSaleProductsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<BaseSaleProductResponseDto>|null
     */
    protected $products;
    /**
     * @var SaleProductResponseCategoriesDto|null
     */
    protected $categories;
    /**
     * @var list<ListingResponseFilters>|null
     */
    protected $filters;
    /**
     * @var GetSaleProductsResponseNextPage|null
     */
    protected $nextPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<BaseSaleProductResponseDto>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param list<BaseSaleProductResponseDto>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    public function getCategories(): ?SaleProductResponseCategoriesDto
    {
        return $this->categories;
    }

    public function setCategories(?SaleProductResponseCategoriesDto $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return list<ListingResponseFilters>|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param list<ListingResponseFilters>|null $filters
     */
    public function setFilters(?array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;

        return $this;
    }

    public function getNextPage(): ?GetSaleProductsResponseNextPage
    {
        return $this->nextPage;
    }

    public function setNextPage(?GetSaleProductsResponseNextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }
}
