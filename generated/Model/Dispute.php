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

class Dispute extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the dispute.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Subject of the dispute.
     *
     * @var Subject|null
     */
    protected $subject;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $messagesStatus;
    /**
     * @var DisputeUser|null
     */
    protected $buyer;
    /**
     * @var DisputeCheckoutForm|null
     */
    protected $checkoutForm;
    /**
     * Initial dispute message with text OR attachment OR both.
     *
     * @var DisputeFirstMessage|null
     */
    protected $message;
    /**
     * @var int|null
     */
    protected $messagesCount;
    /**
     * Recent date when the dispute has been opened or reopened.
     *
     * @var \DateTime|null
     */
    protected $openedDate;
    /**
     * @var \DateTime|null
     */
    protected $lastMessageCreationDate;
    /**
     * Buyer's claim data for the dispute.
     *
     * @var DisputeClaim|null
     */
    protected $claim;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the dispute.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the dispute.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Subject of the dispute.
     */
    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    /**
     * Subject of the dispute.
     */
    public function setSubject(?Subject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

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

    public function getMessagesStatus(): ?string
    {
        return $this->messagesStatus;
    }

    public function setMessagesStatus(?string $messagesStatus): self
    {
        $this->initialized['messagesStatus'] = true;
        $this->messagesStatus = $messagesStatus;

        return $this;
    }

    public function getBuyer(): ?DisputeUser
    {
        return $this->buyer;
    }

    public function setBuyer(?DisputeUser $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    public function getCheckoutForm(): ?DisputeCheckoutForm
    {
        return $this->checkoutForm;
    }

    public function setCheckoutForm(?DisputeCheckoutForm $checkoutForm): self
    {
        $this->initialized['checkoutForm'] = true;
        $this->checkoutForm = $checkoutForm;

        return $this;
    }

    /**
     * Initial dispute message with text OR attachment OR both.
     */
    public function getMessage(): ?DisputeFirstMessage
    {
        return $this->message;
    }

    /**
     * Initial dispute message with text OR attachment OR both.
     */
    public function setMessage(?DisputeFirstMessage $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getMessagesCount(): ?int
    {
        return $this->messagesCount;
    }

    public function setMessagesCount(?int $messagesCount): self
    {
        $this->initialized['messagesCount'] = true;
        $this->messagesCount = $messagesCount;

        return $this;
    }

    /**
     * Recent date when the dispute has been opened or reopened.
     */
    public function getOpenedDate(): ?\DateTime
    {
        return $this->openedDate;
    }

    /**
     * Recent date when the dispute has been opened or reopened.
     */
    public function setOpenedDate(?\DateTime $openedDate): self
    {
        $this->initialized['openedDate'] = true;
        $this->openedDate = $openedDate;

        return $this;
    }

    public function getLastMessageCreationDate(): ?\DateTime
    {
        return $this->lastMessageCreationDate;
    }

    public function setLastMessageCreationDate(?\DateTime $lastMessageCreationDate): self
    {
        $this->initialized['lastMessageCreationDate'] = true;
        $this->lastMessageCreationDate = $lastMessageCreationDate;

        return $this;
    }

    /**
     * Buyer's claim data for the dispute.
     */
    public function getClaim(): ?DisputeClaim
    {
        return $this->claim;
    }

    /**
     * Buyer's claim data for the dispute.
     */
    public function setClaim(?DisputeClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;

        return $this;
    }
}
