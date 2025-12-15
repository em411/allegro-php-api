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

class ShipmentCreateCommandDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Command UUID. If empty, then system generate new one.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * @var ShipmentCreateRequestDto|null
     */
    protected $input;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Command UUID. If empty, then system generate new one.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Command UUID. If empty, then system generate new one.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    public function getInput(): ?ShipmentCreateRequestDto
    {
        return $this->input;
    }

    public function setInput(?ShipmentCreateRequestDto $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }
}
