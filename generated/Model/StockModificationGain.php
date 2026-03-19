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

class StockModificationGain extends OfferBulkModificationStock
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * An increase/decrease stock value set with the `GAIN` type modification.
     *
     * @var int|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * An increase/decrease stock value set with the `GAIN` type modification.
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * An increase/decrease stock value set with the `GAIN` type modification.
     */
    public function setValue(?int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
