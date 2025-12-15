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

class CheckoutFormFulfillmentProvider extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates who is in charge to manage the order: * `SELLER` - the order is managed directly by seller * `ALLEGRO` - the order is managed by Allegro warehouse (One Fulfillment).
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates who is in charge to manage the order: * `SELLER` - the order is managed directly by seller * `ALLEGRO` - the order is managed by Allegro warehouse (One Fulfillment).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Indicates who is in charge to manage the order: * `SELLER` - the order is managed directly by seller * `ALLEGRO` - the order is managed by Allegro warehouse (One Fulfillment).
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
