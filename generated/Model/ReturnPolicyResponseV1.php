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

class ReturnPolicyResponseV1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the return policy definition.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Indicates if the return policy is for One Fulfillment offers.
     *
     * @var bool|null
     */
    protected $isFulfillment;
    /**
     * @var Seller|null
     */
    protected $seller;
    /**
     * Return policy name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var ReturnPolicyAvailability|null
     */
    protected $availability;
    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     *
     * @var string|null
     */
    protected $withdrawalPeriod;
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyReturnCost|null
     */
    protected $returnCost;
    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyAddress|null
     */
    protected $address;
    /**
     * @var ReturnPolicyContactV1|null
     */
    protected $contact;
    /**
     * Can be null if availability range is 'DISABLED'.
     *
     * @var ReturnPolicyOptions|null
     */
    protected $options;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the return policy definition.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the return policy definition.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates if the return policy is for One Fulfillment offers.
     */
    public function getIsFulfillment(): ?bool
    {
        return $this->isFulfillment;
    }

    /**
     * Indicates if the return policy is for One Fulfillment offers.
     */
    public function setIsFulfillment(?bool $isFulfillment): self
    {
        $this->initialized['isFulfillment'] = true;
        $this->isFulfillment = $isFulfillment;

        return $this;
    }

    public function getSeller(): ?Seller
    {
        return $this->seller;
    }

    public function setSeller(?Seller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }

    /**
     * Return policy name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Return policy name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getAvailability(): ?ReturnPolicyAvailability
    {
        return $this->availability;
    }

    public function setAvailability(?ReturnPolicyAvailability $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     */
    public function getWithdrawalPeriod(): ?string
    {
        return $this->withdrawalPeriod;
    }

    /**
     * Period in ISO 8601 format. Can be null if availability range is 'DISABLED'.
     */
    public function setWithdrawalPeriod(?string $withdrawalPeriod): self
    {
        $this->initialized['withdrawalPeriod'] = true;
        $this->withdrawalPeriod = $withdrawalPeriod;

        return $this;
    }

    /**
     * Can be null if availability range is 'DISABLED'.
     */
    public function getReturnCost(): ?ReturnPolicyReturnCost
    {
        return $this->returnCost;
    }

    /**
     * Can be null if availability range is 'DISABLED'.
     */
    public function setReturnCost(?ReturnPolicyReturnCost $returnCost): self
    {
        $this->initialized['returnCost'] = true;
        $this->returnCost = $returnCost;

        return $this;
    }

    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     */
    public function getAddress(): ?ReturnPolicyAddress
    {
        return $this->address;
    }

    /**
     * The return address of the policy. Can be null if availability range is 'DISABLED'.
     */
    public function setAddress(?ReturnPolicyAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function getContact(): ?ReturnPolicyContactV1
    {
        return $this->contact;
    }

    public function setContact(?ReturnPolicyContactV1 $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * Can be null if availability range is 'DISABLED'.
     */
    public function getOptions(): ?ReturnPolicyOptions
    {
        return $this->options;
    }

    /**
     * Can be null if availability range is 'DISABLED'.
     */
    public function setOptions(?ReturnPolicyOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
