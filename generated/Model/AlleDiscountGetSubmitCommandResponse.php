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

class AlleDiscountGetSubmitCommandResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the command.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Provided submit offer command input data.
     *
     * @var AlleDiscountGetSubmitCommandResponseInput|null
     */
    protected $input;
    /**
     * Submit offer command output data.
     *
     * @var AlleDiscountGetSubmitCommandResponseOutput|null
     */
    protected $output;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the command.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The id of the command.
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
    public function getInput(): ?AlleDiscountGetSubmitCommandResponseInput
    {
        return $this->input;
    }

    /**
     * Provided submit offer command input data.
     */
    public function setInput(?AlleDiscountGetSubmitCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    /**
     * Submit offer command output data.
     */
    public function getOutput(): ?AlleDiscountGetSubmitCommandResponseOutput
    {
        return $this->output;
    }

    /**
     * Submit offer command output data.
     */
    public function setOutput(?AlleDiscountGetSubmitCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }
}
