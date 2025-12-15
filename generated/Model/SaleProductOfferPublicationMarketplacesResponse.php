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

class SaleProductOfferPublicationMarketplacesResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     *
     * @var SaleProductOfferPublicationMarketplacesResponseBase|null
     */
    protected $base;
    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @var list<JustId>|null
     */
    protected $additional;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     */
    public function getBase(): ?SaleProductOfferPublicationMarketplacesResponseBase
    {
        return $this->base;
    }

    /**
     * <small>[read-only]</small> Specifies the offer’s base service. We assign the value in the field automatically when the offer is created and it is read-only, it will never change.
     */
    public function setBase(?SaleProductOfferPublicationMarketplacesResponseBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @return list<JustId>|null
     */
    public function getAdditional(): ?array
    {
        return $this->additional;
    }

    /**
     * Specifies whether an offer is visible in the additional marketplace.
     *
     * @param list<JustId>|null $additional
     */
    public function setAdditional(?array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;

        return $this;
    }
}
