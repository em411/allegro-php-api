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

class Message extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var ThreadId|null
     */
    protected $thread;
    /**
     * @var MessageAuthor|null
     */
    protected $author;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $subject;
    /**
     * @var MessageRelatedObject|null
     */
    protected $relatesTo;
    /**
     * @var bool|null
     */
    protected $hasAdditionalAttachments;
    /**
     * @var list<MessageAttachmentInfo>|null
     */
    protected $attachments;
    /**
     * Contains optional contextual information linked to message.
     *
     * @var MessageAdditionalInformation|null
     */
    protected $additionalInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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

    public function getThread(): ?ThreadId
    {
        return $this->thread;
    }

    public function setThread(?ThreadId $thread): self
    {
        $this->initialized['thread'] = true;
        $this->thread = $thread;

        return $this;
    }

    public function getAuthor(): ?MessageAuthor
    {
        return $this->author;
    }

    public function setAuthor(?MessageAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    public function getRelatesTo(): ?MessageRelatedObject
    {
        return $this->relatesTo;
    }

    public function setRelatesTo(?MessageRelatedObject $relatesTo): self
    {
        $this->initialized['relatesTo'] = true;
        $this->relatesTo = $relatesTo;

        return $this;
    }

    public function getHasAdditionalAttachments(): ?bool
    {
        return $this->hasAdditionalAttachments;
    }

    public function setHasAdditionalAttachments(?bool $hasAdditionalAttachments): self
    {
        $this->initialized['hasAdditionalAttachments'] = true;
        $this->hasAdditionalAttachments = $hasAdditionalAttachments;

        return $this;
    }

    /**
     * @return list<MessageAttachmentInfo>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param list<MessageAttachmentInfo>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Contains optional contextual information linked to message.
     */
    public function getAdditionalInformation(): ?MessageAdditionalInformation
    {
        return $this->additionalInformation;
    }

    /**
     * Contains optional contextual information linked to message.
     */
    public function setAdditionalInformation(?MessageAdditionalInformation $additionalInformation): self
    {
        $this->initialized['additionalInformation'] = true;
        $this->additionalInformation = $additionalInformation;

        return $this;
    }
}
