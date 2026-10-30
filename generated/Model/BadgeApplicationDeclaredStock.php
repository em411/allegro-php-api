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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class BadgeApplicationDeclaredStock implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Stock declared in particular campaign.
     *
     * @var float|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Stock declared in particular campaign.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Stock declared in particular campaign.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}
