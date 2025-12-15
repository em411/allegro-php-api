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

class BlockedDelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * List of countries where shipping is not allowed.
     *
     * @var list<string>|null
     */
    protected $shippingTo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * List of countries where shipping is not allowed.
     *
     * @return list<string>|null
     */
    public function getShippingTo(): ?array
    {
        return $this->shippingTo;
    }

    /**
     * List of countries where shipping is not allowed.
     *
     * @param list<string>|null $shippingTo
     */
    public function setShippingTo(?array $shippingTo): self
    {
        $this->initialized['shippingTo'] = true;
        $this->shippingTo = $shippingTo;

        return $this;
    }
}
