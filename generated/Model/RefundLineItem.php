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

class RefundLineItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The line-item identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
     *
     * @var string|null
     */
    protected $type;
    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     *
     * @var RefundLineItemValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The line-item identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The line-item identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type for line items refund. QUANTITY is provided when you can refund one or more items. AMOUNT is provided when you can refund a partial price.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * This field is provided for QUANTITY type only. It specifies how many items will be refunded.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     */
    public function getValue(): ?RefundLineItemValue
    {
        return $this->value;
    }

    /**
     * This field is available for AMOUNT type only and specifies the amount refunded to the customer.
     */
    public function setValue(?RefundLineItemValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
