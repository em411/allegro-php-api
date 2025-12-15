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

class VariantSetsVariantSet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Variant set id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Variant set name.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Variant set id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Variant set id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Variant set name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Variant set name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
