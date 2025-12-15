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

class ListingResponseOffers extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of promoted offers.
     *
     * @var list<ListingOffer>|null
     */
    protected $promoted;
    /**
     * List of regular (non-promoted) offers.
     *
     * @var list<ListingOffer>|null
     */
    protected $regular;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of promoted offers.
     *
     * @return list<ListingOffer>|null
     */
    public function getPromoted(): ?array
    {
        return $this->promoted;
    }

    /**
     * List of promoted offers.
     *
     * @param list<ListingOffer>|null $promoted
     */
    public function setPromoted(?array $promoted): self
    {
        $this->initialized['promoted'] = true;
        $this->promoted = $promoted;

        return $this;
    }

    /**
     * List of regular (non-promoted) offers.
     *
     * @return list<ListingOffer>|null
     */
    public function getRegular(): ?array
    {
        return $this->regular;
    }

    /**
     * List of regular (non-promoted) offers.
     *
     * @param list<ListingOffer>|null $regular
     */
    public function setRegular(?array $regular): self
    {
        $this->initialized['regular'] = true;
        $this->regular = $regular;

        return $this;
    }
}
