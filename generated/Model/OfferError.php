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

class OfferError extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Error message describing what went wrong.
     *
     * @var string|null
     */
    protected $message;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Error message describing what went wrong.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Error message describing what went wrong.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
