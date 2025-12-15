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

class BaseOperation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the operation.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The group to which the given operation type belongs.
     *
     * @var string|null
     */
    protected $group;
    /**
     * The state of the wallet after the operation.
     *
     * @var Wallet|null
     */
    protected $wallet;
    /**
     * The operation value.
     *
     * @var OperationValue|null
     */
    protected $value;
    /**
     * Date and time of the operation in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;
    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     *
     * @var string|null
     */
    protected $marketplaceId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the operation.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the operation.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * The group to which the given operation type belongs.
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * The group to which the given operation type belongs.
     */
    public function setGroup(?string $group)
    {
        $this->initialized['group'] = true;
        $this->group = $group;
    }

    /**
     * The state of the wallet after the operation.
     */
    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    /**
     * The state of the wallet after the operation.
     */
    public function setWallet(?Wallet $wallet)
    {
        $this->initialized['wallet'] = true;
        $this->wallet = $wallet;
    }

    /**
     * The operation value.
     */
    public function getValue(): ?OperationValue
    {
        return $this->value;
    }

    /**
     * The operation value.
     */
    public function setValue(?OperationValue $value)
    {
        $this->initialized['value'] = true;
        $this->value = $value;
    }

    /**
     * Date and time of the operation in ISO 8601 format.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * Date and time of the operation in ISO 8601 format.
     */
    public function setOccurredAt(?\DateTime $occurredAt)
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
    }

    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The marketplace ID where operation was made. Value may be `null` for operations not assigned to any marketplace.
     */
    public function setMarketplaceId(?string $marketplaceId)
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
    }
}
