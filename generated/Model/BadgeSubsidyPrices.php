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

class BadgeSubsidyPrices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price visible as the Buy Now price.
     *
     * @var BadgeApplicationSubsidyTargetPrice|null
     */
    protected $targetPrice;
    /**
     * The price requested by partner.
     *
     * @var BadgeApplicationSubsidySellerPrice|null
     */
    protected $sellerPrice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price visible as the Buy Now price.
     */
    public function getTargetPrice(): ?BadgeApplicationSubsidyTargetPrice
    {
        return $this->targetPrice;
    }

    /**
     * The price visible as the Buy Now price.
     */
    public function setTargetPrice(?BadgeApplicationSubsidyTargetPrice $targetPrice): self
    {
        $this->initialized['targetPrice'] = true;
        $this->targetPrice = $targetPrice;

        return $this;
    }

    /**
     * The price requested by partner.
     */
    public function getSellerPrice(): ?BadgeApplicationSubsidySellerPrice
    {
        return $this->sellerPrice;
    }

    /**
     * The price requested by partner.
     */
    public function setSellerPrice(?BadgeApplicationSubsidySellerPrice $sellerPrice): self
    {
        $this->initialized['sellerPrice'] = true;
        $this->sellerPrice = $sellerPrice;

        return $this;
    }
}
