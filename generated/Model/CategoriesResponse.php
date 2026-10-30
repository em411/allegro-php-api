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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class CategoriesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<CategoryResponse>|null
     */
    protected $categories;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<CategoryResponse>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param list<CategoryResponse>|null $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['categories' => ['categories', 'getCategories', 'setCategories']];
    }
}
