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

class PublicOfferPreviewRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Single offer data.
     *
     * @var PricingOffer|null
     */
    protected $offer;
    /**
     * @var ClassifiedsPackages|null
     */
    protected $classifiedsPackages;
    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     *
     * @var string|null
     */
    protected $marketplaceId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Single offer data.
     */
    public function getOffer(): ?PricingOffer
    {
        return $this->offer;
    }

    /**
     * Single offer data.
     */
    public function setOffer(?PricingOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getClassifiedsPackages(): ?ClassifiedsPackages
    {
        return $this->classifiedsPackages;
    }

    public function setClassifiedsPackages(?ClassifiedsPackages $classifiedsPackages): self
    {
        $this->initialized['classifiedsPackages'] = true;
        $this->classifiedsPackages = $classifiedsPackages;

        return $this;
    }

    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The marketplace on which the offer should be previewed. If omitted, it will default to the base marketplace.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }
}
