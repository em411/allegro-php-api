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

class PostPurchaseIssueState extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $status;
    /**
     * Deadline for the seller to accept or reject the claim. Null for disputes.
     *
     * @var \DateTime|null
     */
    protected $statusDueDate;
    /**
     * Return decision made by the seller. For claims `true` means return was specified to be required, `false` means return is not required, and `null` means the seller haven't made a decision yet. For disputes it's always `null`.
     *
     * @var bool|null
     */
    protected $returnRequired;
    /**
     * Indicates whether it is currently possible to send new messages within this post-purchase issue.
     *   true – Sending of new messages for this issue is active (allowed).
     *   false – Sending of new messages for this issue is inactive (not allowed).
     *
     * @var bool|null
     */
    protected $chatActive;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Deadline for the seller to accept or reject the claim. Null for disputes.
     */
    public function getStatusDueDate(): ?\DateTime
    {
        return $this->statusDueDate;
    }

    /**
     * Deadline for the seller to accept or reject the claim. Null for disputes.
     */
    public function setStatusDueDate(?\DateTime $statusDueDate): self
    {
        $this->initialized['statusDueDate'] = true;
        $this->statusDueDate = $statusDueDate;

        return $this;
    }

    /**
     * Return decision made by the seller. For claims `true` means return was specified to be required, `false` means return is not required, and `null` means the seller haven't made a decision yet. For disputes it's always `null`.
     */
    public function getReturnRequired(): ?bool
    {
        return $this->returnRequired;
    }

    /**
     * Return decision made by the seller. For claims `true` means return was specified to be required, `false` means return is not required, and `null` means the seller haven't made a decision yet. For disputes it's always `null`.
     */
    public function setReturnRequired(?bool $returnRequired): self
    {
        $this->initialized['returnRequired'] = true;
        $this->returnRequired = $returnRequired;

        return $this;
    }

    /**
     * Indicates whether it is currently possible to send new messages within this post-purchase issue.
     *   true – Sending of new messages for this issue is active (allowed).
     *   false – Sending of new messages for this issue is inactive (not allowed).
     */
    public function getChatActive(): ?bool
    {
        return $this->chatActive;
    }

    /**
     * Indicates whether it is currently possible to send new messages within this post-purchase issue.
     * true – Sending of new messages for this issue is active (allowed).
     * false – Sending of new messages for this issue is inactive (not allowed).
     */
    public function setChatActive(?bool $chatActive): self
    {
        $this->initialized['chatActive'] = true;
        $this->chatActive = $chatActive;

        return $this;
    }
}
