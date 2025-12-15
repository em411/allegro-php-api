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

class AlleDiscountSubmitCommandResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Provided UUID of the submit offer command or generated UUID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Provided submit offer command input data.
     *
     * @var AlleDiscountSubmitCommandResponseInput|null
     */
    protected $input;
    /**
     * Submit offer command output data.
     *
     * @var AlleDiscountSubmitCommandResponseOutput|null
     */
    protected $output;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Provided UUID of the submit offer command or generated UUID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Provided UUID of the submit offer command or generated UUID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Provided submit offer command input data.
     */
    public function getInput(): ?AlleDiscountSubmitCommandResponseInput
    {
        return $this->input;
    }

    /**
     * Provided submit offer command input data.
     */
    public function setInput(?AlleDiscountSubmitCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    /**
     * Submit offer command output data.
     */
    public function getOutput(): ?AlleDiscountSubmitCommandResponseOutput
    {
        return $this->output;
    }

    /**
     * Submit offer command output data.
     */
    public function setOutput(?AlleDiscountSubmitCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }
}
