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

class FulfillmentRefundDispositionsValidationError extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Validation error code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $details;
    /**
     * Technical message describing the error.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Request path related to the validation error.
     *
     * @var string|null
     */
    protected $path;
    /**
     * User-facing message describing the validation error.
     *
     * @var string|null
     */
    protected $userMessage;
    /**
     * Additional metadata related to the validation error.
     *
     * @var array<string, string>|null
     */
    protected $metadata;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Validation error code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Validation error code.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    /**
     * Technical message describing the error.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Technical message describing the error.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * Request path related to the validation error.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Request path related to the validation error.
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }

    /**
     * User-facing message describing the validation error.
     */
    public function getUserMessage(): ?string
    {
        return $this->userMessage;
    }

    /**
     * User-facing message describing the validation error.
     */
    public function setUserMessage(?string $userMessage): self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;

        return $this;
    }

    /**
     * Additional metadata related to the validation error.
     *
     * @return array<string, string>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }

    /**
     * Additional metadata related to the validation error.
     *
     * @param array<string, string>|null $metadata
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }
}
