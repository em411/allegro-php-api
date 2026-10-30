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

class OfferProductSetProductReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Product quantity in a product set.
     *
     * @var float|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Product quantity in a product set.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Product quantity in a product set.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}
