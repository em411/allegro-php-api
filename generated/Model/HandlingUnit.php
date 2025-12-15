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

class HandlingUnit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     *
     * @var string|null
     */
    protected $unitType;
    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     *
     * @var string|null
     */
    protected $labelsType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     */
    public function getUnitType(): ?string
    {
        return $this->unitType;
    }

    /**
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     */
    public function setUnitType(?string $unitType): self
    {
        $this->initialized['unitType'] = true;
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     */
    public function getLabelsType(): ?string
    {
        return $this->labelsType;
    }

    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     */
    public function setLabelsType(?string $labelsType): self
    {
        $this->initialized['labelsType'] = true;
        $this->labelsType = $labelsType;

        return $this;
    }
}
