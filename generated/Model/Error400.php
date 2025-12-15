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

class Error400 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The error code. You can use this code when contacting us about any problems with our systems.
     *
     * @var string|null
     */
    protected $code;
    /**
     * For some cases, this field provides more details regarding the error. This field can not be null.
     *
     * @var string|null
     */
    protected $details;
    /**
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
     *
     * @var string|null
     */
    protected $message;
    /**
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty.
     *
     * @var string|null
     */
    protected $path;
    /**
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
     *
     * @var string|null
     */
    protected $userMessage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The error code. You can use this code when contacting us about any problems with our systems.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The error code. You can use this code when contacting us about any problems with our systems.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * For some cases, this field provides more details regarding the error. This field can not be null.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * For some cases, this field provides more details regarding the error. This field can not be null.
     */
    public function setDetails(?string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    /**
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A message directed to the developer of the program. This message give you some more technical details on what exactly has happened.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty.
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }

    /**
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
     */
    public function getUserMessage(): ?string
    {
        return $this->userMessage;
    }

    /**
     * The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the `Accept-Language` header. By default message in Polish is returned.
     */
    public function setUserMessage(?string $userMessage): self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;

        return $this;
    }
}
