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

class CategorySuggestionCategoryNode extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of category.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Category name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Category suggestion category object.
     *
     * @var CategorySuggestionCategoryNode|null
     */
    protected $parent;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of category.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of category.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Category name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Category name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Category suggestion category object.
     */
    public function getParent(): ?self
    {
        return $this->parent;
    }

    /**
     * Category suggestion category object.
     */
    public function setParent(?self $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;

        return $this;
    }
}
