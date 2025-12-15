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

class AdditionalMarketplacesRefusalReasonResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Technical code of the refusal reason.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Short description of the refusal reason in natural language.
     *
     * @var string|null
     */
    protected $userMessage;
    /**
     * Additional technical parameters of the refusal reason.
     *
     * @var array<string, list<string>>|null
     */
    protected $parameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Technical code of the refusal reason.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Technical code of the refusal reason.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Short description of the refusal reason in natural language.
     */
    public function getUserMessage(): ?string
    {
        return $this->userMessage;
    }

    /**
     * Short description of the refusal reason in natural language.
     */
    public function setUserMessage(?string $userMessage): self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;

        return $this;
    }

    /**
     * Additional technical parameters of the refusal reason.
     *
     * @return array<string, list<string>>|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }

    /**
     * Additional technical parameters of the refusal reason.
     *
     * @param array<string, list<string>>|null $parameters
     */
    public function setParameters(?iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }
}
