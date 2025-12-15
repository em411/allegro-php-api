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

class AuthError extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Authorization error code.
     *
     * @var string|null
     */
    protected $error;
    /**
     * Authorization error message.
     *
     * @var string|null
     */
    protected $errorDescription;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Authorization error code.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Authorization error code.
     */
    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }

    /**
     * Authorization error message.
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    /**
     * Authorization error message.
     */
    public function setErrorDescription(?string $errorDescription): self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;

        return $this;
    }
}
