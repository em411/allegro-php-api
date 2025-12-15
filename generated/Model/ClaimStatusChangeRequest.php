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

class ClaimStatusChangeRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $partialRefund;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPartialRefund(): ?Price
    {
        return $this->partialRefund;
    }

    /**
     * The price data.
     */
    public function setPartialRefund(?Price $partialRefund): self
    {
        $this->initialized['partialRefund'] = true;
        $this->partialRefund = $partialRefund;

        return $this;
    }
}
