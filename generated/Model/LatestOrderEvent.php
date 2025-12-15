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

class LatestOrderEvent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * event id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Date when the event occurred.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * event id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * event id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Date when the event occurred.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * Date when the event occurred.
     */
    public function setOccurredAt(?\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;

        return $this;
    }
}
