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

class CheckoutFormFulfillmentShipmentSummary extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates how many line items have tracking number specified.
     *
     * @var mixed|null
     */
    protected $lineItemsSent;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates how many line items have tracking number specified.
     */
    public function getLineItemsSent()
    {
        return $this->lineItemsSent;
    }

    /**
     * Indicates how many line items have tracking number specified.
     */
    public function setLineItemsSent($lineItemsSent): self
    {
        $this->initialized['lineItemsSent'] = true;
        $this->lineItemsSent = $lineItemsSent;

        return $this;
    }
}
