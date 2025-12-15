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

class SaleProductResponseCategoriesDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A list of categories that contain results for given search parameters.
     *
     * @var list<ProductsCategorySubcategories>|null
     */
    protected $subcategories;
    /**
     * The path of current category used as categrory filter in search.
     *
     * @var list<ProductsCategoryPath>|null
     */
    protected $path;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A list of categories that contain results for given search parameters.
     *
     * @return list<ProductsCategorySubcategories>|null
     */
    public function getSubcategories(): ?array
    {
        return $this->subcategories;
    }

    /**
     * A list of categories that contain results for given search parameters.
     *
     * @param list<ProductsCategorySubcategories>|null $subcategories
     */
    public function setSubcategories(?array $subcategories): self
    {
        $this->initialized['subcategories'] = true;
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * The path of current category used as categrory filter in search.
     *
     * @return list<ProductsCategoryPath>|null
     */
    public function getPath(): ?array
    {
        return $this->path;
    }

    /**
     * The path of current category used as categrory filter in search.
     *
     * @param list<ProductsCategoryPath>|null $path
     */
    public function setPath(?array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }
}
