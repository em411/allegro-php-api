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

class UpdateSubmittedHandlingUnitInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
     *
     * @var float|null
     */
    protected $amount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Number of handling units. Depending on the selected handling unit type, it's the number of boxes, pallets or packages placed in the container to be dispatched.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }
}
