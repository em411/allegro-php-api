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

class PostPurchaseIssueChat extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Summary of the most recent message data.
     *
     * @var PostPurchaseIssueLastMessage|null
     */
    protected $lastMessage;
    /**
     * @var int|null
     */
    protected $messagesCount;
    /**
     * Message with text, attachment or both.
     *
     * @var PostPurchaseIssueFirstMessage|null
     */
    protected $initialMessage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Summary of the most recent message data.
     */
    public function getLastMessage(): ?PostPurchaseIssueLastMessage
    {
        return $this->lastMessage;
    }

    /**
     * Summary of the most recent message data.
     */
    public function setLastMessage(?PostPurchaseIssueLastMessage $lastMessage): self
    {
        $this->initialized['lastMessage'] = true;
        $this->lastMessage = $lastMessage;

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
     * Message with text, attachment or both.
     */
    public function getInitialMessage(): ?PostPurchaseIssueFirstMessage
    {
        return $this->initialMessage;
    }

    /**
     * Message with text, attachment or both.
     */
    public function setInitialMessage(?PostPurchaseIssueFirstMessage $initialMessage): self
    {
        $this->initialized['initialMessage'] = true;
        $this->initialMessage = $initialMessage;

        return $this;
    }
}
