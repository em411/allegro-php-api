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

class OfferBulkChangeCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The unique identifier for the command.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * A list of modifications price or stock to apply to offers. Multiple modifications of the same type for the same offerId are not allowed (eg. price and offerId).
     *
     * @var list<OfferBulkModification>|null
     */
    protected $modifications;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The unique identifier for the command.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * The unique identifier for the command.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * A list of modifications price or stock to apply to offers. Multiple modifications of the same type for the same offerId are not allowed (eg. price and offerId).
     *
     * @return list<OfferBulkModification>|null
     */
    public function getModifications(): ?array
    {
        return $this->modifications;
    }

    /**
     * A list of modifications price or stock to apply to offers. Multiple modifications of the same type for the same offerId are not allowed (eg. price and offerId).
     *
     * @param list<OfferBulkModification>|null $modifications
     */
    public function setModifications(?array $modifications): self
    {
        $this->initialized['modifications'] = true;
        $this->modifications = $modifications;

        return $this;
    }
}
