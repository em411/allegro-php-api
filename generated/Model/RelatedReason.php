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

class RelatedReason extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Refusal reason code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Refusal reason parameters.
     *
     * @var array<string, list<string>>|null
     */
    protected $parameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Refusal reason code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Refusal reason code.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Refusal reason parameters.
     *
     * @return array<string, list<string>>|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }

    /**
     * Refusal reason parameters.
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
