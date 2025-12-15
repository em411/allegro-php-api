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

class RemovalRequestVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Removal request creation datetime in ISO 8601 format.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Message containing explanation for removing rating.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Language of the message.
     *
     * @var string|null
     */
    protected $language;
    /**
     * Message containing information who requested removing of a rating.
     *
     * @var string|null
     */
    protected $source;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Removal request creation datetime in ISO 8601 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Removal request creation datetime in ISO 8601 format.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Message containing explanation for removing rating.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Message containing explanation for removing rating.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * Language of the message.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of the message.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Message containing information who requested removing of a rating.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Message containing information who requested removing of a rating.
     */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }
}
