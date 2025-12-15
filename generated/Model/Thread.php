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

class Thread extends \ArrayObject
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
     * @var bool|null
     */
    protected $read;
    /**
     * @var \DateTime|null
     */
    protected $lastMessageDateTime;
    /**
     * @var Interlocutor|null
     */
    protected $interlocutor;

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

    public function getRead(): ?bool
    {
        return $this->read;
    }

    public function setRead(?bool $read): self
    {
        $this->initialized['read'] = true;
        $this->read = $read;

        return $this;
    }

    public function getLastMessageDateTime(): ?\DateTime
    {
        return $this->lastMessageDateTime;
    }

    public function setLastMessageDateTime(?\DateTime $lastMessageDateTime): self
    {
        $this->initialized['lastMessageDateTime'] = true;
        $this->lastMessageDateTime = $lastMessageDateTime;

        return $this;
    }

    public function getInterlocutor(): ?Interlocutor
    {
        return $this->interlocutor;
    }

    public function setInterlocutor(?Interlocutor $interlocutor): self
    {
        $this->initialized['interlocutor'] = true;
        $this->interlocutor = $interlocutor;

        return $this;
    }
}
