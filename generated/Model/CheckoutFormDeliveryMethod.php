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

class CheckoutFormDeliveryMethod extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Delivery method id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Delivery method name.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Delivery method id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Delivery method id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Delivery method name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Delivery method name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
