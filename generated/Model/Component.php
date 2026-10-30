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

class Component implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Optional name of the component. It is required when the product contains more than one component.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Array of ingredients included in this component.
     *
     * @var list<Ingredient>|null
     */
    protected $ingredients;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Optional name of the component. It is required when the product contains more than one component.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Optional name of the component. It is required when the product contains more than one component.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Array of ingredients included in this component.
     *
     * @return list<Ingredient>|null
     */
    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    /**
     * Array of ingredients included in this component.
     *
     * @param list<Ingredient>|null $ingredients
     */
    public function setIngredients(?array $ingredients): self
    {
        $this->initialized['ingredients'] = true;
        $this->ingredients = $ingredients;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'ingredients' => ['ingredients', 'getIngredients', 'setIngredients']];
    }
}
