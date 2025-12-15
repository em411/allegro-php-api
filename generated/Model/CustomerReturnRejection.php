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

class CustomerReturnRejection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Refund rejection code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Reason of refund cancellation.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Refund rejection code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Refund rejection code.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Reason of refund cancellation.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Reason of refund cancellation.
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }
}
