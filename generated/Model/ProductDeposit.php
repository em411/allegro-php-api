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
    /**
     * Seller-provided price of a single deposit. Required for deposit types with `pricingMode` set to `CUSTOM`; the currency must match the type's `currency` returned by GET /deposit/types. The amount must be nonnegative and use the precision supported by that currency. For deposit types with `pricingMode` set to `FIXED`, omit this field or set it to null when submitting a deposit; providing a price object is rejected. In responses, this field is returned only for `CUSTOM` deposits and omitted for `FIXED` deposits.
     *
     * @var ProductDepositPrice|null
     */
    protected $price;

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

    /**
     * Seller-provided price of a single deposit. Required for deposit types with `pricingMode` set to `CUSTOM`; the currency must match the type's `currency` returned by GET /deposit/types. The amount must be nonnegative and use the precision supported by that currency. For deposit types with `pricingMode` set to `FIXED`, omit this field or set it to null when submitting a deposit; providing a price object is rejected. In responses, this field is returned only for `CUSTOM` deposits and omitted for `FIXED` deposits.
     */
    public function getPrice(): ?ProductDepositPrice
    {
        return $this->price;
    }

    /**
     * Seller-provided price of a single deposit. Required for deposit types with `pricingMode` set to `CUSTOM`; the currency must match the type's `currency` returned by GET /deposit/types. The amount must be nonnegative and use the precision supported by that currency. For deposit types with `pricingMode` set to `FIXED`, omit this field or set it to null when submitting a deposit; providing a price object is rejected. In responses, this field is returned only for `CUSTOM` deposits and omitted for `FIXED` deposits.
     */
    public function setPrice(?ProductDepositPrice $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
