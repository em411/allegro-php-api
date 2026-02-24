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

class SubsidyManageOffersCommandResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique identifier of the command.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Current status of the command.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Timestamp when the command was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique identifier of the command.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Unique identifier of the command.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * Current status of the command.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Current status of the command.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Timestamp when the command was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Timestamp when the command was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }
}
