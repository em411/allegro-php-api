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

class PublicationModification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Action to perform.
     *
     * @var string|null
     */
    protected $action;
    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions.
     *
     * @var \DateTime|null
     */
    protected $scheduledFor;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Action to perform.
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * Action to perform.
     */
    public function setAction(?string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }

    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions.
     */
    public function getScheduledFor(): ?\DateTime
    {
        return $this->scheduledFor;
    }

    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions.
     */
    public function setScheduledFor(?\DateTime $scheduledFor): self
    {
        $this->initialized['scheduledFor'] = true;
        $this->scheduledFor = $scheduledFor;

        return $this;
    }
}
