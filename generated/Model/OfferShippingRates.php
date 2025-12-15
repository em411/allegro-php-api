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

class OfferShippingRates extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @var list<ShippingRate>|null
     */
    protected $rates;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @return list<ShippingRate>|null
     */
    public function getRates(): ?array
    {
        return $this->rates;
    }

    /**
     * If empty there is the shipping rates set attached to offer. You should use the GET /sale/offers/{offerId} resource to retrieve the shipping rates set ID.
     *
     * @param list<ShippingRate>|null $rates
     */
    public function setRates(?array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }
}
