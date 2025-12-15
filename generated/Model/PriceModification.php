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

class PriceModification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the modification.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     *
     * @var string|null
     */
    protected $marketplaceId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the modification.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the modification.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     */
    public function setMarketplaceId(?string $marketplaceId)
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
    }
}
