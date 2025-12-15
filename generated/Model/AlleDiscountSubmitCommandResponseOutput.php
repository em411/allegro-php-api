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

class AlleDiscountSubmitCommandResponseOutput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Execution status of the command.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Creation date of the command. ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Update date of the command. ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Execution status of the command.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Execution status of the command.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Creation date of the command. ISO 8601 format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Creation date of the command. ISO 8601 format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Update date of the command. ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Update date of the command. ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
