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

/**
 * @deprecated
 */
class DeliverySettingsRequestCustomCost extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * If true the customer can enter a custom shipping cost.
     *
     * @var bool|null
     */
    protected $allowed;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * If true the customer can enter a custom shipping cost.
     */
    public function getAllowed(): ?bool
    {
        return $this->allowed;
    }

    /**
     * If true the customer can enter a custom shipping cost.
     */
    public function setAllowed(?bool $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;

        return $this;
    }
}
