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

class CategoryDto extends \ArrayObject
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
     * Name of the category in Polish.
     *
     * @var string|null
     */
    protected $name;
    /**
     * A list of the different options which can be used with this category.
     *
     * @var CategoryOptionsDto|null
     */
    protected $options;
    /**
     * The parent category data.
     *
     * @var CategoryDtoParent|null
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
     * Name of the category in Polish.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the category in Polish.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * A list of the different options which can be used with this category.
     */
    public function getOptions(): ?CategoryOptionsDto
    {
        return $this->options;
    }

    /**
     * A list of the different options which can be used with this category.
     */
    public function setOptions(?CategoryOptionsDto $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }

    /**
     * The parent category data.
     */
    public function getParent(): ?CategoryDtoParent
    {
        return $this->parent;
    }

    /**
     * The parent category data.
     */
    public function setParent(?CategoryDtoParent $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;

        return $this;
    }
}
