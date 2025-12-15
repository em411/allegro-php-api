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

class CategoryEventBaseCategory extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     *
     * @var bool|null
     */
    protected $leaf;
    /**
     * Name of the category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The parent category data.
     *
     * @var CategoryEventBaseCategoryParent|null
     */
    protected $parent;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the category. This can be either in UUID format or an integer format. You should be ready to accept any string value as the category ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     */
    public function getLeaf(): ?bool
    {
        return $this->leaf;
    }

    /**
     * Indicates whether the category is at the lowest level. Leaf categories do not have any children. Offers can be listed only in leaf categories.
     */
    public function setLeaf(?bool $leaf): self
    {
        $this->initialized['leaf'] = true;
        $this->leaf = $leaf;

        return $this;
    }

    /**
     * Name of the category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the category.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The parent category data.
     */
    public function getParent(): ?CategoryEventBaseCategoryParent
    {
        return $this->parent;
    }

    /**
     * The parent category data.
     */
    public function setParent(?CategoryEventBaseCategoryParent $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;

        return $this;
    }
}
