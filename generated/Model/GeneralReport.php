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

class GeneralReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Command ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * Offers updates summary.
     *
     * @var TaskCount|null
     */
    protected $taskCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Command ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Command ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date of command creation. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }

    /**
     * Date of command completion. Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;

        return $this;
    }

    /**
     * Offers updates summary.
     */
    public function getTaskCount(): ?TaskCount
    {
        return $this->taskCount;
    }

    /**
     * Offers updates summary.
     */
    public function setTaskCount(?TaskCount $taskCount): self
    {
        $this->initialized['taskCount'] = true;
        $this->taskCount = $taskCount;

        return $this;
    }
}
