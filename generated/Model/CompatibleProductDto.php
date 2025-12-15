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

class CompatibleProductDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the compatible product.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Textual representation of the compatible product.
     *
     * @var string|null
     */
    protected $text;
    /**
     * Group to which compatible product is assigned to.
     *
     * @var CompatibleProductDtoGroup|null
     */
    protected $group;
    /**
     * List of compatible products attributes.
     *
     * @var list<CompatibleProductDtoAttributesItem>|null
     */
    protected $attributes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the compatible product.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the compatible product.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Textual representation of the compatible product.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Textual representation of the compatible product.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Group to which compatible product is assigned to.
     */
    public function getGroup(): ?CompatibleProductDtoGroup
    {
        return $this->group;
    }

    /**
     * Group to which compatible product is assigned to.
     */
    public function setGroup(?CompatibleProductDtoGroup $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    /**
     * List of compatible products attributes.
     *
     * @return list<CompatibleProductDtoAttributesItem>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * List of compatible products attributes.
     *
     * @param list<CompatibleProductDtoAttributesItem>|null $attributes
     */
    public function setAttributes(?array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }
}
