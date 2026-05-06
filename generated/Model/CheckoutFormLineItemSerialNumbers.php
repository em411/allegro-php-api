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

class CheckoutFormLineItemSerialNumbers extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Informs whether the serial numbers are expected to be entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     *
     * @var bool|null
     */
    protected $expected;
    /**
     * @var list<CheckoutFormLineItemSerialNumbersEntry>|null
     */
    protected $entries;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Informs whether the serial numbers are expected to be entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     */
    public function getExpected(): ?bool
    {
        return $this->expected;
    }

    /**
     * Informs whether the serial numbers are expected to be entered by the Seller. The seller is expected to provide serial numbers when processing an order whose destination country requires them and the product category qualifies for serial numbers.
     */
    public function setExpected(?bool $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;

        return $this;
    }

    /**
     * @return list<CheckoutFormLineItemSerialNumbersEntry>|null
     */
    public function getEntries(): ?array
    {
        return $this->entries;
    }

    /**
     * @param list<CheckoutFormLineItemSerialNumbersEntry>|null $entries
     */
    public function setEntries(?array $entries): self
    {
        $this->initialized['entries'] = true;
        $this->entries = $entries;

        return $this;
    }
}
