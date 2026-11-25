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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class SelectedOffer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var SelectedOfferIdentifier|null
     */
    protected $offer;
    /**
     * @var SelectedProductIdentifier|null
     */
    protected $product;
    /**
     * @var SelectedOfferConditions|null
     */
    protected $offerConditions;
    /**
     * @var SelectedOfferPrices|null
     */
    protected $prices;
    /**
     * @var SelectedOfferRestrictions|null
     */
    protected $restrictions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?SelectedOfferIdentifier
    {
        return $this->offer;
    }

    public function setOffer(?SelectedOfferIdentifier $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getProduct(): ?SelectedProductIdentifier
    {
        return $this->product;
    }

    public function setProduct(?SelectedProductIdentifier $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    public function getOfferConditions(): ?SelectedOfferConditions
    {
        return $this->offerConditions;
    }

    public function setOfferConditions(?SelectedOfferConditions $offerConditions): self
    {
        $this->initialized['offerConditions'] = true;
        $this->offerConditions = $offerConditions;

        return $this;
    }

    public function getPrices(): ?SelectedOfferPrices
    {
        return $this->prices;
    }

    public function setPrices(?SelectedOfferPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }

    public function getRestrictions(): ?SelectedOfferRestrictions
    {
        return $this->restrictions;
    }

    public function setRestrictions(?SelectedOfferRestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['offer' => ['offer', 'getOffer', 'setOffer'], 'product' => ['product', 'getProduct', 'setProduct'], 'offerConditions' => ['offerConditions', 'getOfferConditions', 'setOfferConditions'], 'prices' => ['prices', 'getPrices', 'setPrices'], 'restrictions' => ['restrictions', 'getRestrictions', 'setRestrictions']];
    }
}
