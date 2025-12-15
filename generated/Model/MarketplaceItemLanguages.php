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

class MarketplaceItemLanguages extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Languages in which you can create offer.
     *
     * @var list<MarketplaceItemLanguage>|null
     */
    protected $offerCreation;
    /**
     * Languages in which buyer can see the offer.
     *
     * @var list<MarketplaceItemLanguage>|null
     */
    protected $offerDisplay;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Languages in which you can create offer.
     *
     * @return list<MarketplaceItemLanguage>|null
     */
    public function getOfferCreation(): ?array
    {
        return $this->offerCreation;
    }

    /**
     * Languages in which you can create offer.
     *
     * @param list<MarketplaceItemLanguage>|null $offerCreation
     */
    public function setOfferCreation(?array $offerCreation): self
    {
        $this->initialized['offerCreation'] = true;
        $this->offerCreation = $offerCreation;

        return $this;
    }

    /**
     * Languages in which buyer can see the offer.
     *
     * @return list<MarketplaceItemLanguage>|null
     */
    public function getOfferDisplay(): ?array
    {
        return $this->offerDisplay;
    }

    /**
     * Languages in which buyer can see the offer.
     *
     * @param list<MarketplaceItemLanguage>|null $offerDisplay
     */
    public function setOfferDisplay(?array $offerDisplay): self
    {
        $this->initialized['offerDisplay'] = true;
        $this->offerDisplay = $offerDisplay;

        return $this;
    }
}
