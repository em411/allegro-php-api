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

class CommandOutput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The processing status of the command.
     *
     * @var string|null
     */
    protected $status;
    /**
     * @var list<Error>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The processing status of the command.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The processing status of the command.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param list<Error>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
