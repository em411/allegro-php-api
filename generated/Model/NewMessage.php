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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class NewMessage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Recipient|null
     */
    protected $recipient;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var list<MessageAttachmentId>|null
     */
    protected $attachments;
    /**
     * @var MessageOrder|null
     */
    protected $order;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getRecipient(): ?Recipient
    {
        return $this->recipient;
    }

    public function setRecipient(?Recipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;

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

    /**
     * @return list<MessageAttachmentId>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param list<MessageAttachmentId>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    public function getOrder(): ?MessageOrder
    {
        return $this->order;
    }

    public function setOrder(?MessageOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['recipient' => ['recipient', 'getRecipient', 'setRecipient'], 'text' => ['text', 'getText', 'setText'], 'attachments' => ['attachments', 'getAttachments', 'setAttachments'], 'order' => ['order', 'getOrder', 'setOrder']];
    }
}
