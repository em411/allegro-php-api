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

class ReceivingState extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Stage of Advance Ship Notice receiving.
     *
     * @var string|null
     */
    protected $stage;
    /**
     * A human friendly identifier of Advance Ship Notice.
     *
     * @var string|null
     */
    protected $displayNumber;
    /**
     * The list of products with receiving status.
     *
     * @var list<ReceivingEntry>|null
     */
    protected $content;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Stage of Advance Ship Notice receiving.
     */
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * Stage of Advance Ship Notice receiving.
     */
    public function setStage(?string $stage): self
    {
        $this->initialized['stage'] = true;
        $this->stage = $stage;

        return $this;
    }

    /**
     * A human friendly identifier of Advance Ship Notice.
     */
    public function getDisplayNumber(): ?string
    {
        return $this->displayNumber;
    }

    /**
     * A human friendly identifier of Advance Ship Notice.
     */
    public function setDisplayNumber(?string $displayNumber): self
    {
        $this->initialized['displayNumber'] = true;
        $this->displayNumber = $displayNumber;

        return $this;
    }

    /**
     * The list of products with receiving status.
     *
     * @return list<ReceivingEntry>|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * The list of products with receiving status.
     *
     * @param list<ReceivingEntry>|null $content
     */
    public function setContent(?array $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }
}
