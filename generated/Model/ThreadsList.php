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

class ThreadsList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Thread>|null
     */
    protected $threads;
    /**
     * @var int|null
     */
    protected $offset;
    /**
     * @var int|null
     */
    protected $limit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Thread>|null
     */
    public function getThreads(): ?array
    {
        return $this->threads;
    }

    /**
     * @param list<Thread>|null $threads
     */
    public function setThreads(?array $threads): self
    {
        $this->initialized['threads'] = true;
        $this->threads = $threads;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(?int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }
}
