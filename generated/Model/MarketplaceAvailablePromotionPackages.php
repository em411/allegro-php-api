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

class MarketplaceAvailablePromotionPackages extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @var list<AvailablePromotionPackage>|null
     */
    protected $basePackages;
    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @var list<AvailablePromotionPackage>|null
     */
    protected $extraPackages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @return list<AvailablePromotionPackage>|null
     */
    public function getBasePackages(): ?array
    {
        return $this->basePackages;
    }

    /**
     * Available base promotion packages. Only one base package can be set on an offer.
     *
     * @param list<AvailablePromotionPackage>|null $basePackages
     */
    public function setBasePackages(?array $basePackages): self
    {
        $this->initialized['basePackages'] = true;
        $this->basePackages = $basePackages;

        return $this;
    }

    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @return list<AvailablePromotionPackage>|null
     */
    public function getExtraPackages(): ?array
    {
        return $this->extraPackages;
    }

    /**
     * Available extra promotion packages. Multiple different extra packages can be set on an offer.
     *
     * @param list<AvailablePromotionPackage>|null $extraPackages
     */
    public function setExtraPackages(?array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;

        return $this;
    }
}
