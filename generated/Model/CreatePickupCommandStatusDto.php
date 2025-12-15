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

class CreatePickupCommandStatusDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Command UUID.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @var list<Error400>|null
     */
    protected $errors;
    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @var string|null
     */
    protected $pickupId;
    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @var string|null
     */
    protected $carrierPickupId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Command UUID.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Command UUID.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @return list<Error400>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @param list<Error400>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     */
    public function getPickupId(): ?string
    {
        return $this->pickupId;
    }

    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     */
    public function setPickupId(?string $pickupId): self
    {
        $this->initialized['pickupId'] = true;
        $this->pickupId = $pickupId;

        return $this;
    }

    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     */
    public function getCarrierPickupId(): ?string
    {
        return $this->carrierPickupId;
    }

    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     */
    public function setCarrierPickupId(?string $carrierPickupId): self
    {
        $this->initialized['carrierPickupId'] = true;
        $this->carrierPickupId = $carrierPickupId;

        return $this;
    }
}
