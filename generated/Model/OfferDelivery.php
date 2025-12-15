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

class OfferDelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the offer has free shipping option.
     *
     * @var bool|null
     */
    protected $availableForFree;
    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     *
     * @var OfferLowestPrice|null
     */
    protected $lowestPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the offer has free shipping option.
     */
    public function getAvailableForFree(): ?bool
    {
        return $this->availableForFree;
    }

    /**
     * Indicates whether the offer has free shipping option.
     */
    public function setAvailableForFree(?bool $availableForFree): self
    {
        $this->initialized['availableForFree'] = true;
        $this->availableForFree = $availableForFree;

        return $this;
    }

    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     */
    public function getLowestPrice(): ?OfferLowestPrice
    {
        return $this->lowestPrice;
    }

    /**
     * The lowest shipping cost available. Lack of this entity means that the offer has no shipping options (i.e. it is an advertisement or an offer with electronic delivery only).
     */
    public function setLowestPrice(?OfferLowestPrice $lowestPrice): self
    {
        $this->initialized['lowestPrice'] = true;
        $this->lowestPrice = $lowestPrice;

        return $this;
    }
}
