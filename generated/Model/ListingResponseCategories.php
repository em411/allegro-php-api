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

class ListingResponseCategories extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Categories with counters, which can be used to refine search results.
     *
     * @var list<ListingCategoryWithCount>|null
     */
    protected $subcategories;
    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @var list<ListingCategory>|null
     */
    protected $path;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Categories with counters, which can be used to refine search results.
     *
     * @return list<ListingCategoryWithCount>|null
     */
    public function getSubcategories(): ?array
    {
        return $this->subcategories;
    }

    /**
     * Categories with counters, which can be used to refine search results.
     *
     * @param list<ListingCategoryWithCount>|null $subcategories
     */
    public function setSubcategories(?array $subcategories): self
    {
        $this->initialized['subcategories'] = true;
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @return list<ListingCategory>|null
     */
    public function getPath(): ?array
    {
        return $this->path;
    }

    /**
     * Categories path to the current listing category (breadcrumbs).
     *
     * @param list<ListingCategory>|null $path
     */
    public function setPath(?array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }
}
