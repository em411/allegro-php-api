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

class TaskWithSubjectReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Results with a list of task with subject (offer+field).
     *
     * @var list<mixed>|null
     */
    protected $tasks;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Results with a list of task with subject (offer+field).
     *
     * @return list<mixed>|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    /**
     * Results with a list of task with subject (offer+field).
     *
     * @param list<mixed>|null $tasks
     */
    public function setTasks(?array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks = $tasks;

        return $this;
    }
}
