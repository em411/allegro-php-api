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

class OfferListingDtoV1AdditionalMarketplaceSellingMode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price of the offer on the given marketplace.
     *
     * @var mixed|null
     */
    protected $price;
    /**
     * The automatic pricing rule on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation|null
     */
    protected $priceAutomation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price of the offer on the given marketplace.
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * The price of the offer on the given marketplace.
     */
    public function setPrice($price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * The automatic pricing rule on the given marketplace.
     */
    public function getPriceAutomation(): ?OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation
    {
        return $this->priceAutomation;
    }

    /**
     * The automatic pricing rule on the given marketplace.
     */
    public function setPriceAutomation(?OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation $priceAutomation): self
    {
        $this->initialized['priceAutomation'] = true;
        $this->priceAutomation = $priceAutomation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['price' => ['price', 'getPrice', 'setPrice'], 'priceAutomation' => ['priceAutomation', 'getPriceAutomation', 'setPriceAutomation']];
    }
}
