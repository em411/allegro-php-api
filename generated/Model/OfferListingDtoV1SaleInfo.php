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

class OfferListingDtoV1SaleInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The current highest bid in auction format.
     *
     * @var CurrentPrice|null
     */
    protected $currentPrice;
    /**
     * The number of bidders.
     *
     * @var int|null
     */
    protected $biddersCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The current highest bid in auction format.
     */
    public function getCurrentPrice(): ?CurrentPrice
    {
        return $this->currentPrice;
    }

    /**
     * The current highest bid in auction format.
     */
    public function setCurrentPrice(?CurrentPrice $currentPrice): self
    {
        $this->initialized['currentPrice'] = true;
        $this->currentPrice = $currentPrice;

        return $this;
    }

    /**
     * The number of bidders.
     */
    public function getBiddersCount(): ?int
    {
        return $this->biddersCount;
    }

    /**
     * The number of bidders.
     */
    public function setBiddersCount(?int $biddersCount): self
    {
        $this->initialized['biddersCount'] = true;
        $this->biddersCount = $biddersCount;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['currentPrice' => ['currentPrice', 'getCurrentPrice', 'setCurrentPrice'], 'biddersCount' => ['biddersCount', 'getBiddersCount', 'setBiddersCount']];
    }
}
