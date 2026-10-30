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

class ParseIngredientsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parsing result for every product submitted in the request, in the same order.
     *
     * @var list<ProductParseResult>|null
     */
    protected $products;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parsing result for every product submitted in the request, in the same order.
     *
     * @return list<ProductParseResult>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * Parsing result for every product submitted in the request, in the same order.
     *
     * @param list<ProductParseResult>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['products' => ['products', 'getProducts', 'setProducts']];
    }
}
