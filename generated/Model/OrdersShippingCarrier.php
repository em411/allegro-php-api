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

class OrdersShippingCarrier extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of a carrier - unique to every carrier.
     *
     * It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of a carrier.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of a carrier - unique to every carrier.
     *
     * It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of a carrier - unique to every carrier.
     *
     * It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of a carrier.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of a carrier.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
