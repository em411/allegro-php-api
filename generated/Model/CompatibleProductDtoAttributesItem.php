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

class CompatibleProductDtoAttributesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of an attribute.
     *
     * @var string|null
     */
    protected $id;
    /**
     * List of attribute's values.
     *
     * @var list<string>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of an attribute.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of an attribute.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * List of attribute's values.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * List of attribute's values.
     *
     * @param list<string>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
