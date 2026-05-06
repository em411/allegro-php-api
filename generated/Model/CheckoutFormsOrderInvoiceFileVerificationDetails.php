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

class CheckoutFormsOrderInvoiceFileVerificationDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * WARNING if the issue doesn't prevent the invoice from being accepted, ERROR if the issue prevents the invoice from being accepted.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Technical code of the warning or error.
     *
     * @var string|null
     */
    protected $code;
    /**
     * User friendly message to display.
     *
     * @var string|null
     */
    protected $message;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * WARNING if the issue doesn't prevent the invoice from being accepted, ERROR if the issue prevents the invoice from being accepted.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * WARNING if the issue doesn't prevent the invoice from being accepted, ERROR if the issue prevents the invoice from being accepted.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Technical code of the warning or error.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Technical code of the warning or error.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * User friendly message to display.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * User friendly message to display.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
