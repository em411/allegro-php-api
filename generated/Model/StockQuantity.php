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

class StockQuantity extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     *
     * @var float|null
     */
    protected $available;
    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     *
     * @var float|null
     */
    protected $onOrder;
    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     *
     * @var float|null
     */
    protected $onHold;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     */
    public function getAvailable(): ?float
    {
        return $this->available;
    }

    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     */
    public function setAvailable(?float $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     */
    public function getOnOrder(): ?float
    {
        return $this->onOrder;
    }

    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     */
    public function setOnOrder(?float $onOrder): self
    {
        $this->initialized['onOrder'] = true;
        $this->onOrder = $onOrder;

        return $this;
    }

    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     */
    public function getOnHold(): ?float
    {
        return $this->onHold;
    }

    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     */
    public function setOnHold(?float $onHold): self
    {
        $this->initialized['onHold'] = true;
        $this->onHold = $onHold;

        return $this;
    }
}
