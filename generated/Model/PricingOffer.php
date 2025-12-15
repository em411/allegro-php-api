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

class PricingOffer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var JustId|null
     */
    protected $fundraisingCampaign;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var Category|null
     */
    protected $category;
    /**
     * @var list<Parameter>|null
     */
    protected $parameters;
    /**
     * Promo options on base marketplace.
     *
     * @var Promotion|null
     */
    protected $promotion;
    /**
     * @var PricingPublication|null
     */
    protected $publication;
    /**
     * Information on the offer's selling mode.
     *
     * @var SellingModeWithNetPrice|null
     */
    protected $sellingMode;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getFundraisingCampaign(): ?JustId
    {
        return $this->fundraisingCampaign;
    }

    public function setFundraisingCampaign(?JustId $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * @return list<Parameter>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param list<Parameter>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Promo options on base marketplace.
     */
    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    /**
     * Promo options on base marketplace.
     */
    public function setPromotion(?Promotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;

        return $this;
    }

    public function getPublication(): ?PricingPublication
    {
        return $this->publication;
    }

    public function setPublication(?PricingPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function getSellingMode(): ?SellingModeWithNetPrice
    {
        return $this->sellingMode;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function setSellingMode(?SellingModeWithNetPrice $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }
}
