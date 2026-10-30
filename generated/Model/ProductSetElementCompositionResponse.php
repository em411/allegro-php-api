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

class ProductSetElementCompositionResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Composition of the product, consisting of components and their ingredients.
     *
     * @var ProductSetElementCompositionResponseComposition|null
     */
    protected $composition;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Composition of the product, consisting of components and their ingredients.
     */
    public function getComposition(): ?ProductSetElementCompositionResponseComposition
    {
        return $this->composition;
    }

    /**
     * Composition of the product, consisting of components and their ingredients.
     */
    public function setComposition(?ProductSetElementCompositionResponseComposition $composition): self
    {
        $this->initialized['composition'] = true;
        $this->composition = $composition;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['composition' => ['composition', 'getComposition', 'setComposition']];
    }
}
