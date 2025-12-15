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

class SaleProductOfferStatusResponseOperation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The unique operation identifier (UUID).
     *
     * @var string|null
     */
    protected $id;
    /**
     * Status of the operation.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The starting date and time of operation.
     *
     * @var string|null
     */
    protected $startedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The unique operation identifier (UUID).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique operation identifier (UUID).
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Status of the operation.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of the operation.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The starting date and time of operation.
     */
    public function getStartedAt(): ?string
    {
        return $this->startedAt;
    }

    /**
     * The starting date and time of operation.
     */
    public function setStartedAt(?string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;

        return $this;
    }
}
