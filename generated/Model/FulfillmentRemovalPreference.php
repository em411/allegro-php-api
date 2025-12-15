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

class FulfillmentRemovalPreference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Preference what kind of operation to execute on undesirable items WITHDRAWAL/DISPOSAL (required).
     *
     * @var string|null
     */
    protected $operation;
    /**
     * Represents information about address passed for withdrawal purpose.
     *
     * @var FulfillmentWithdrawalAddress|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Preference what kind of operation to execute on undesirable items WITHDRAWAL/DISPOSAL (required).
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * Preference what kind of operation to execute on undesirable items WITHDRAWAL/DISPOSAL (required).
     */
    public function setOperation(?string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;

        return $this;
    }

    /**
     * Represents information about address passed for withdrawal purpose.
     */
    public function getAddress(): ?FulfillmentWithdrawalAddress
    {
        return $this->address;
    }

    /**
     * Represents information about address passed for withdrawal purpose.
     */
    public function setAddress(?FulfillmentWithdrawalAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
