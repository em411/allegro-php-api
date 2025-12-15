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

class SubmitCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The identifier of command.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Represents input of the Advance Ship Notice submit command.
     *
     * @var SubmitCommandInput|null
     */
    protected $input;
    /**
     * Represents output of the Advance Ship Notice submit command.
     *
     * @var SubmitCommandOutput|null
     */
    protected $output;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The identifier of command.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The identifier of command.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Represents input of the Advance Ship Notice submit command.
     */
    public function getInput(): ?SubmitCommandInput
    {
        return $this->input;
    }

    /**
     * Represents input of the Advance Ship Notice submit command.
     */
    public function setInput(?SubmitCommandInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    /**
     * Represents output of the Advance Ship Notice submit command.
     */
    public function getOutput(): ?SubmitCommandOutput
    {
        return $this->output;
    }

    /**
     * Represents output of the Advance Ship Notice submit command.
     */
    public function setOutput(?SubmitCommandOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }
}
