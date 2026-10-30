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

class ProductSetElementQuantity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     *
     * @var ProductSetElementQuantityQuantity|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     */
    public function getQuantity(): ?ProductSetElementQuantityQuantity
    {
        return $this->quantity;
    }

    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     */
    public function setQuantity(?ProductSetElementQuantityQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}
