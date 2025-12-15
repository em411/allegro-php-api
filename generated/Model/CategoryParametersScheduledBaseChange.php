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

class CategoryParametersScheduledBaseChange extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime|null
     */
    protected $scheduledAt;
    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime|null
     */
    protected $scheduledFor;
    /**
     * The type of the change.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function getScheduledAt(): ?\DateTime
    {
        return $this->scheduledAt;
    }

    /**
     * The date and time when the change was scheduled, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function setScheduledAt(?\DateTime $scheduledAt)
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;
    }

    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function getScheduledFor(): ?\DateTime
    {
        return $this->scheduledFor;
    }

    /**
     * The date and time when the change will be effective from, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function setScheduledFor(?\DateTime $scheduledFor)
    {
        $this->initialized['scheduledFor'] = true;
        $this->scheduledFor = $scheduledFor;
    }

    /**
     * The type of the change.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the change.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}
