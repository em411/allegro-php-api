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

class AlleDiscountSubmitCommandRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The command UUID. If empty, system generates new one.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Command input.
     *
     * @var AlleDiscountSubmitCommandRequestInput|null
     */
    protected $input;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The command UUID. If empty, system generates new one.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * The command UUID. If empty, system generates new one.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * Command input.
     */
    public function getInput(): ?AlleDiscountSubmitCommandRequestInput
    {
        return $this->input;
    }

    /**
     * Command input.
     */
    public function setInput(?AlleDiscountSubmitCommandRequestInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }
}
