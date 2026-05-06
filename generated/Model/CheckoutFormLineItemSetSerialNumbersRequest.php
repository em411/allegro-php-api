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

class CheckoutFormLineItemSetSerialNumbersRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Line item identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Serial numbers entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     *
     * @var CheckoutFormLineItemSerialNumbersEntries|null
     */
    protected $serialNumbers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Line item identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Line item identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Serial numbers entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     */
    public function getSerialNumbers(): ?CheckoutFormLineItemSerialNumbersEntries
    {
        return $this->serialNumbers;
    }

    /**
     * Serial numbers entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     */
    public function setSerialNumbers(?CheckoutFormLineItemSerialNumbersEntries $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }
}
