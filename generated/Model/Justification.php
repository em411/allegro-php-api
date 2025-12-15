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

class Justification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Text of justification.
     *
     * @var string|null
     */
    protected $text;
    /**
     * When set to false, given justification is visible only for the seller and not for the buyer.
     *
     * @var bool|null
     */
    protected $visibleForBuyer;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Text of justification.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Text of justification.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * When set to false, given justification is visible only for the seller and not for the buyer.
     */
    public function getVisibleForBuyer(): ?bool
    {
        return $this->visibleForBuyer;
    }

    /**
     * When set to false, given justification is visible only for the seller and not for the buyer.
     */
    public function setVisibleForBuyer(?bool $visibleForBuyer): self
    {
        $this->initialized['visibleForBuyer'] = true;
        $this->visibleForBuyer = $visibleForBuyer;

        return $this;
    }
}
