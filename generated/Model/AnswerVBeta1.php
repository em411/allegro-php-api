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

class AnswerVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Answer creation datetime in ISO 8601 format.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Answer message.
     *
     * @var string|null
     */
    protected $text;
    /**
     * Language of the user comment.
     *
     * @var string|null
     */
    protected $language;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Answer creation datetime in ISO 8601 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Answer creation datetime in ISO 8601 format.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Answer message.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Answer message.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Language of the user comment.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of the user comment.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
