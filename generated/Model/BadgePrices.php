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

class BadgePrices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Suggested market price. Calculated automatically based on the offer's price history.
     *
     * @var BadgeMarketPrice|null
     */
    protected $market;
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationBargainPrice|null
     */
    protected $bargain;
    /**
     * Prices that relate to the price reconciliation.
     *
     * @var BadgeSubsidyPrices|null
     */
    protected $subsidy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Suggested market price. Calculated automatically based on the offer's price history.
     */
    public function getMarket(): ?BadgeMarketPrice
    {
        return $this->market;
    }

    /**
     * Suggested market price. Calculated automatically based on the offer's price history.
     */
    public function setMarket(?BadgeMarketPrice $market): self
    {
        $this->initialized['market'] = true;
        $this->market = $market;

        return $this;
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function getBargain(): ?BadgeApplicationBargainPrice
    {
        return $this->bargain;
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function setBargain(?BadgeApplicationBargainPrice $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;

        return $this;
    }

    /**
     * Prices that relate to the price reconciliation.
     */
    public function getSubsidy(): ?BadgeSubsidyPrices
    {
        return $this->subsidy;
    }

    /**
     * Prices that relate to the price reconciliation.
     */
    public function setSubsidy(?BadgeSubsidyPrices $subsidy): self
    {
        $this->initialized['subsidy'] = true;
        $this->subsidy = $subsidy;

        return $this;
    }
}
