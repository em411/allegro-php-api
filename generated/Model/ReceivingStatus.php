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

class ReceivingStatus extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product quantity.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Received item condition.
     *
     * @var string|null
     */
    protected $receivedType;
    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE".
     *
     * @var string|null
     */
    protected $reasonCode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product quantity.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Product quantity.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Received item condition.
     */
    public function getReceivedType(): ?string
    {
        return $this->receivedType;
    }

    /**
     * Received item condition.
     */
    public function setReceivedType(?string $receivedType): self
    {
        $this->initialized['receivedType'] = true;
        $this->receivedType = $receivedType;

        return $this;
    }

    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE".
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * The reasonCode indicates the condition of the product after unpacking. For sellable product is given the reasonCode SELLABLE. For a product that is not suitable for sale receives a code specifying a detailed reason for rejection, e.g. "DAMAGED_IN_TRANSPORT" or "NO_BARCODE".
     */
    public function setReasonCode(?string $reasonCode): self
    {
        $this->initialized['reasonCode'] = true;
        $this->reasonCode = $reasonCode;

        return $this;
    }
}
