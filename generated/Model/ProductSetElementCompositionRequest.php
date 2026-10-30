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

class ProductSetElementCompositionRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Composition of the product, consisting of components and their ingredients.
     *
     * @var ProductSetElementCompositionRequestComposition|null
     */
    protected $composition;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Composition of the product, consisting of components and their ingredients.
     */
    public function getComposition(): ?ProductSetElementCompositionRequestComposition
    {
        return $this->composition;
    }

    /**
     * Composition of the product, consisting of components and their ingredients.
     */
    public function setComposition(?ProductSetElementCompositionRequestComposition $composition): self
    {
        $this->initialized['composition'] = true;
        $this->composition = $composition;

        return $this;
    }
}
