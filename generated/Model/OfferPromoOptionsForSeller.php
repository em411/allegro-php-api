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

class OfferPromoOptionsForSeller extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Promo options for seller offers.
     *
     * @var list<OfferPromoOptions>|null
     */
    protected $promoOptions;
    /**
     * Number of returned elements.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of available elements.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Promo options for seller offers.
     *
     * @return list<OfferPromoOptions>|null
     */
    public function getPromoOptions(): ?array
    {
        return $this->promoOptions;
    }

    /**
     * Promo options for seller offers.
     *
     * @param list<OfferPromoOptions>|null $promoOptions
     */
    public function setPromoOptions(?array $promoOptions): self
    {
        $this->initialized['promoOptions'] = true;
        $this->promoOptions = $promoOptions;

        return $this;
    }

    /**
     * Number of returned elements.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of returned elements.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of available elements.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of available elements.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
