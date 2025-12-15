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

class ProductCategoryWithPath extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Category identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var list<ProductsCategoryPath>|null
     */
    protected $path;
    /**
     * A list of similar categories in which you can sell this product.
     *
     * @var list<ProductSimilarCategoryWithPath>|null
     */
    protected $similar;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Category identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Category identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return list<ProductsCategoryPath>|null
     */
    public function getPath(): ?array
    {
        return $this->path;
    }

    /**
     * @param list<ProductsCategoryPath>|null $path
     */
    public function setPath(?array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }

    /**
     * A list of similar categories in which you can sell this product.
     *
     * @return list<ProductSimilarCategoryWithPath>|null
     */
    public function getSimilar(): ?array
    {
        return $this->similar;
    }

    /**
     * A list of similar categories in which you can sell this product.
     *
     * @param list<ProductSimilarCategoryWithPath>|null $similar
     */
    public function setSimilar(?array $similar): self
    {
        $this->initialized['similar'] = true;
        $this->similar = $similar;

        return $this;
    }
}
