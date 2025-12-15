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

class ReceivingEntry extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Expected product quantity.
     *
     * @var int|null
     */
    protected $expected;
    /**
     * The product data.
     *
     * @var Product|null
     */
    protected $product;
    /**
     * @var list<ReceivingStatus>|null
     */
    protected $received;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Expected product quantity.
     */
    public function getExpected(): ?int
    {
        return $this->expected;
    }

    /**
     * Expected product quantity.
     */
    public function setExpected(?int $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;

        return $this;
    }

    /**
     * The product data.
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * The product data.
     */
    public function setProduct(?Product $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * @return list<ReceivingStatus>|null
     */
    public function getReceived(): ?array
    {
        return $this->received;
    }

    /**
     * @param list<ReceivingStatus>|null $received
     */
    public function setReceived(?array $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;

        return $this;
    }
}
