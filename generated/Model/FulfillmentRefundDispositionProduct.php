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

class FulfillmentRefundDispositionProduct extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product GTINs.
     *
     * @var list<string>|null
     */
    protected $gtins;
    /**
     * Product name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Product quantity.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product GTINs.
     *
     * @return list<string>|null
     */
    public function getGtins(): ?array
    {
        return $this->gtins;
    }

    /**
     * Product GTINs.
     *
     * @param list<string>|null $gtins
     */
    public function setGtins(?array $gtins): self
    {
        $this->initialized['gtins'] = true;
        $this->gtins = $gtins;

        return $this;
    }

    /**
     * Product name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Product name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
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
}
