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

class ProductDeposit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The deposit ID. Reference <a href="https://developer.allegro.pl/documentation#operation/getDepositTypes">Docs</a>.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Total amount of deposits of given type in this product.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The deposit ID. Reference <a href="https://developer.allegro.pl/documentation#operation/getDepositTypes">Docs</a>.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The deposit ID. Reference <a href="https://developer.allegro.pl/documentation#operation/getDepositTypes">Docs</a>.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Total amount of deposits of given type in this product.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Total amount of deposits of given type in this product.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }
}
