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

class CheckoutFormAdditionalService extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Additional service id.
     *
     * @var string|null
     */
    protected $definitionId;
    /**
     * Additional service name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $price;
    /**
     * Quantity of an additional service.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Additional service id.
     */
    public function getDefinitionId(): ?string
    {
        return $this->definitionId;
    }

    /**
     * Additional service id.
     */
    public function setDefinitionId(?string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;

        return $this;
    }

    /**
     * Additional service name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Additional service name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * The price data.
     */
    public function setPrice(?Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * Quantity of an additional service.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Quantity of an additional service.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }
}
