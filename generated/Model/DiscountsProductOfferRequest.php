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

class DiscountsProductOfferRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var DiscountsProductOfferRequestWholesalePriceList|null
     */
    protected $wholesalePriceList;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getWholesalePriceList(): ?DiscountsProductOfferRequestWholesalePriceList
    {
        return $this->wholesalePriceList;
    }

    public function setWholesalePriceList(?DiscountsProductOfferRequestWholesalePriceList $wholesalePriceList): self
    {
        $this->initialized['wholesalePriceList'] = true;
        $this->wholesalePriceList = $wholesalePriceList;

        return $this;
    }
}
