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

class ModificationDelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ShippingRates|null
     */
    protected $shippingRates;
    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     *
     * @var string|null
     */
    protected $handlingTime;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getShippingRates(): ?ShippingRates
    {
        return $this->shippingRates;
    }

    public function setShippingRates(?ShippingRates $shippingRates): self
    {
        $this->initialized['shippingRates'] = true;
        $this->shippingRates = $shippingRates;

        return $this;
    }

    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     */
    public function getHandlingTime(): ?string
    {
        return $this->handlingTime;
    }

    /**
     * Handling time, ISO 8601 duration format. PT0S for immediately.
     */
    public function setHandlingTime(?string $handlingTime): self
    {
        $this->initialized['handlingTime'] = true;
        $this->handlingTime = $handlingTime;

        return $this;
    }
}
