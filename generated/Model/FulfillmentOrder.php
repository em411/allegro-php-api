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

class FulfillmentOrder extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * order identifier.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * @var list<FulfillmentOrderParcel>|null
     */
    protected $parcels;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * order identifier.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * order identifier.
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return list<FulfillmentOrderParcel>|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @param list<FulfillmentOrderParcel>|null $parcels
     */
    public function setParcels(?array $parcels): self
    {
        $this->initialized['parcels'] = true;
        $this->parcels = $parcels;

        return $this;
    }
}
