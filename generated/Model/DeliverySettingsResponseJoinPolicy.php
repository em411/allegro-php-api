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

class DeliverySettingsResponseJoinPolicy extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Strategy used to calculate delivery cost for items from offers with different delivery costs.
     * The possible values:
     *   * `MAX` - The buyer will pay for the most expensive delivery
     *   * `MIN` - The buyer will pay for the cheapest delivery
     *   * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
     *
     * @var string|null
     */
    protected $strategy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Strategy used to calculate delivery cost for items from offers with different delivery costs.
     * The possible values:
     *   * `MAX` - The buyer will pay for the most expensive delivery
     *   * `MIN` - The buyer will pay for the cheapest delivery
     *   * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
     */
    public function getStrategy(): ?string
    {
        return $this->strategy;
    }

    /**
     * Strategy used to calculate delivery cost for items from offers with different delivery costs.
     * The possible values:
     * `MAX` - The buyer will pay for the most expensive delivery
     * `MIN` - The buyer will pay for the cheapest delivery
     * `SUM` - Items will be sent in separate parcels and delivery costs will be sum of delivery costs for each item.
     */
    public function setStrategy(?string $strategy): self
    {
        $this->initialized['strategy'] = true;
        $this->strategy = $strategy;

        return $this;
    }
}
