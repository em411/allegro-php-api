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

class CategoryResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of the additional services category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var list<CategoryDefinitionResponse>|null
     */
    protected $definitions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the additional services category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the additional services category.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<CategoryDefinitionResponse>|null
     */
    public function getDefinitions(): ?array
    {
        return $this->definitions;
    }

    /**
     * @param list<CategoryDefinitionResponse>|null $definitions
     */
    public function setDefinitions(?array $definitions): self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;

        return $this;
    }
}
