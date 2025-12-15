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

class PickupProposalsResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<PickupDateProposalsDto>|null
     */
    protected $proposals;
    /**
     * Address where the courier will pick up parcels to be sent.
     *
     * @var PickupAddressDto|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<PickupDateProposalsDto>|null
     */
    public function getProposals(): ?array
    {
        return $this->proposals;
    }

    /**
     * @param list<PickupDateProposalsDto>|null $proposals
     */
    public function setProposals(?array $proposals): self
    {
        $this->initialized['proposals'] = true;
        $this->proposals = $proposals;

        return $this;
    }

    /**
     * Address where the courier will pick up parcels to be sent.
     */
    public function getAddress(): ?PickupAddressDto
    {
        return $this->address;
    }

    /**
     * Address where the courier will pick up parcels to be sent.
     */
    public function setAddress(?PickupAddressDto $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
