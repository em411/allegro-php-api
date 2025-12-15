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

class ListingResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The lists of search results.
     *
     * @var ListingResponseOffers|null
     */
    protected $items;
    /**
     * Information about categories.
     *
     * @var ListingResponseCategories|null
     */
    protected $categories;
    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @var list<ListingResponseFilters>|null
     */
    protected $filters;
    /**
     * Search metadata.
     *
     * @var ListingResponseSearchMeta|null
     */
    protected $searchMeta;
    /**
     * Available sorting options.
     *
     * @var list<ListingResponseSort>|null
     */
    protected $sort;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The lists of search results.
     */
    public function getItems(): ?ListingResponseOffers
    {
        return $this->items;
    }

    /**
     * The lists of search results.
     */
    public function setItems(?ListingResponseOffers $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * Information about categories.
     */
    public function getCategories(): ?ListingResponseCategories
    {
        return $this->categories;
    }

    /**
     * Information about categories.
     */
    public function setCategories(?ListingResponseCategories $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }

    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @return list<ListingResponseFilters>|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @param list<ListingResponseFilters>|null $filters
     */
    public function setFilters(?array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;

        return $this;
    }

    /**
     * Search metadata.
     */
    public function getSearchMeta(): ?ListingResponseSearchMeta
    {
        return $this->searchMeta;
    }

    /**
     * Search metadata.
     */
    public function setSearchMeta(?ListingResponseSearchMeta $searchMeta): self
    {
        $this->initialized['searchMeta'] = true;
        $this->searchMeta = $searchMeta;

        return $this;
    }

    /**
     * Available sorting options.
     *
     * @return list<ListingResponseSort>|null
     */
    public function getSort(): ?array
    {
        return $this->sort;
    }

    /**
     * Available sorting options.
     *
     * @param list<ListingResponseSort>|null $sort
     */
    public function setSort(?array $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;

        return $this;
    }
}
