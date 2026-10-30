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

class ThreadsListVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ThreadVBeta1>|null
     */
    protected $threads;
    /**
     * @var ThreadsListVBeta1NextPage|null
     */
    protected $nextPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ThreadVBeta1>|null
     */
    public function getThreads(): ?array
    {
        return $this->threads;
    }

    /**
     * @param list<ThreadVBeta1>|null $threads
     */
    public function setThreads(?array $threads): self
    {
        $this->initialized['threads'] = true;
        $this->threads = $threads;

        return $this;
    }

    public function getNextPage(): ?ThreadsListVBeta1NextPage
    {
        return $this->nextPage;
    }

    public function setNextPage(?ThreadsListVBeta1NextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }
}
