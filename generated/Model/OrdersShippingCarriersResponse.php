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

class OrdersShippingCarriersResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of shipping carriers.
     *
     * @var list<OrdersShippingCarrier>|null
     */
    protected $carriers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of shipping carriers.
     *
     * @return list<OrdersShippingCarrier>|null
     */
    public function getCarriers(): ?array
    {
        return $this->carriers;
    }

    /**
     * List of shipping carriers.
     *
     * @param list<OrdersShippingCarrier>|null $carriers
     */
    public function setCarriers(?array $carriers): self
    {
        $this->initialized['carriers'] = true;
        $this->carriers = $carriers;

        return $this;
    }
}
