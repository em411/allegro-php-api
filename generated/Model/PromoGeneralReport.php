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

class PromoGeneralReport extends \ArrayObject
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
