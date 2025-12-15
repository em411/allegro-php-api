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

class CategoryParameterList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The list of parameters supported by the category.
     *
     * @var list<CategoryParameter>|null
     */
    protected $parameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The list of parameters supported by the category.
     *
     * @return list<CategoryParameter>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * The list of parameters supported by the category.
     *
     * @param list<CategoryParameter>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }
}
