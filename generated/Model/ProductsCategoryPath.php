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

class ProductsCategoryPath extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Category id.
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Category id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Category id.
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
}
