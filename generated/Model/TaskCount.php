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

class TaskCount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Current number of failed offers updates.
     *
     * @var int|null
     */
    protected $failed;
    /**
     * Current number of success offers updates.
     *
     * @var int|null
     */
    protected $success;
    /**
     * Total number of scheduled offers updates.
     *
     * @var int|null
     */
    protected $total;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Current number of failed offers updates.
     */
    public function getFailed(): ?int
    {
        return $this->failed;
    }

    /**
     * Current number of failed offers updates.
     */
    public function setFailed(?int $failed): self
    {
        $this->initialized['failed'] = true;
        $this->failed = $failed;

        return $this;
    }

    /**
     * Current number of success offers updates.
     */
    public function getSuccess(): ?int
    {
        return $this->success;
    }

    /**
     * Current number of success offers updates.
     */
    public function setSuccess(?int $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }

    /**
     * Total number of scheduled offers updates.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total number of scheduled offers updates.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }
}
