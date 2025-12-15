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

class ChangePrice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The unique command id provided in the input.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The input of the command, i.e. the new Buy Now price for the offer.
     *
     * @var ChangePriceInput|null
     */
    protected $input;
    /**
     * The output of the command.
     *
     * @var CommandOutput|null
     */
    protected $output;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The unique command id provided in the input.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique command id provided in the input.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The input of the command, i.e. the new Buy Now price for the offer.
     */
    public function getInput(): ?ChangePriceInput
    {
        return $this->input;
    }

    /**
     * The input of the command, i.e. the new Buy Now price for the offer.
     */
    public function setInput(?ChangePriceInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    /**
     * The output of the command.
     */
    public function getOutput(): ?CommandOutput
    {
        return $this->output;
    }

    /**
     * The output of the command.
     */
    public function setOutput(?CommandOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;

        return $this;
    }
}
