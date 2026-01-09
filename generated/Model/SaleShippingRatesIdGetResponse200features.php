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

class SaleShippingRatesIdGetResponse200features extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the shipping rates set is managed by Allegro and cannot be modified via API.
     *
     * @var bool|null
     */
    protected $managedByAllegro;
    /**
     * Indicates whether the shipping rates set is for One Fulfillment offers.
     *
     * @var bool|null
     */
    protected $isFulfillment;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the shipping rates set is managed by Allegro and cannot be modified via API.
     */
    public function getManagedByAllegro(): ?bool
    {
        return $this->managedByAllegro;
    }

    /**
     * Indicates whether the shipping rates set is managed by Allegro and cannot be modified via API.
     */
    public function setManagedByAllegro(?bool $managedByAllegro): self
    {
        $this->initialized['managedByAllegro'] = true;
        $this->managedByAllegro = $managedByAllegro;

        return $this;
    }

    /**
     * Indicates whether the shipping rates set is for One Fulfillment offers.
     */
    public function getIsFulfillment(): ?bool
    {
        return $this->isFulfillment;
    }

    /**
     * Indicates whether the shipping rates set is for One Fulfillment offers.
     */
    public function setIsFulfillment(?bool $isFulfillment): self
    {
        $this->initialized['isFulfillment'] = true;
        $this->isFulfillment = $isFulfillment;

        return $this;
    }
}
