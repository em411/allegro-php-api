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

class OfferListingDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The offer ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The title of the offer.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The category to which the offer is listed for sale.
     *
     * @var array<string, mixed>|null
     */
    protected $category;
    /**
     * The image used as a thumbnail on the listings.
     *
     * @var OfferListingDtoImage|null
     */
    protected $primaryImage;
    /**
     * Information on the offer's selling mode.
     *
     * @var OfferListingDtoV1SellingMode|null
     */
    protected $sellingMode;
    /**
     * Additional information about offers in auction format.
     *
     * @var OfferListingDtoV1SaleInfo|null
     */
    protected $saleInfo;
    /**
     * Information on the offer's stock.
     *
     * @var OfferListingDtoV1Stock|null
     */
    protected $stock;
    /**
     * The offer's statistics on the base marketplace.
     *
     * @var OfferListingDtoV1Stats|null
     */
    protected $stats;
    /**
     * Information on the offer's publication status and dates.
     *
     * @var OfferListingDtoV1Publication|null
     */
    protected $publication;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServices|null
     */
    protected $afterSalesServices;
    /**
     * The definition of the additional services assigned to the offer.
     *
     * @var OfferAdditionalServices|null
     */
    protected $additionalServices;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId|null
     */
    protected $external;
    /**
     * Delivery information.
     *
     * @var OfferListingDtoV1Delivery|null
     */
    protected $delivery;
    /**
     * Information about offer's business properties.
     *
     * @var OfferListingDtoV1B2b|null
     */
    protected $b2b;
    /**
     * @var JustId|null
     */
    protected $fundraisingCampaign;
    /**
     * Properties of the offer for each additional marketplace.
     *
     * @var array<string, OfferListingDtoV1AdditionalMarketplace>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The offer ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The offer ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The title of the offer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The title of the offer.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The category to which the offer is listed for sale.
     *
     * @return array<string, mixed>|null
     */
    public function getCategory(): ?iterable
    {
        return $this->category;
    }

    /**
     * The category to which the offer is listed for sale.
     *
     * @param array<string, mixed>|null $category
     */
    public function setCategory(?iterable $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * The image used as a thumbnail on the listings.
     */
    public function getPrimaryImage(): ?OfferListingDtoImage
    {
        return $this->primaryImage;
    }

    /**
     * The image used as a thumbnail on the listings.
     */
    public function setPrimaryImage(?OfferListingDtoImage $primaryImage): self
    {
        $this->initialized['primaryImage'] = true;
        $this->primaryImage = $primaryImage;

        return $this;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function getSellingMode(): ?OfferListingDtoV1SellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function setSellingMode(?OfferListingDtoV1SellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * Additional information about offers in auction format.
     */
    public function getSaleInfo(): ?OfferListingDtoV1SaleInfo
    {
        return $this->saleInfo;
    }

    /**
     * Additional information about offers in auction format.
     */
    public function setSaleInfo(?OfferListingDtoV1SaleInfo $saleInfo): self
    {
        $this->initialized['saleInfo'] = true;
        $this->saleInfo = $saleInfo;

        return $this;
    }

    /**
     * Information on the offer's stock.
     */
    public function getStock(): ?OfferListingDtoV1Stock
    {
        return $this->stock;
    }

    /**
     * Information on the offer's stock.
     */
    public function setStock(?OfferListingDtoV1Stock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }

    /**
     * The offer's statistics on the base marketplace.
     */
    public function getStats(): ?OfferListingDtoV1Stats
    {
        return $this->stats;
    }

    /**
     * The offer's statistics on the base marketplace.
     */
    public function setStats(?OfferListingDtoV1Stats $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;

        return $this;
    }

    /**
     * Information on the offer's publication status and dates.
     */
    public function getPublication(): ?OfferListingDtoV1Publication
    {
        return $this->publication;
    }

    /**
     * Information on the offer's publication status and dates.
     */
    public function setPublication(?OfferListingDtoV1Publication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * The definitions of the different after sales services assigned to the offer.
     */
    public function getAfterSalesServices(): ?AfterSalesServices
    {
        return $this->afterSalesServices;
    }

    /**
     * The definitions of the different after sales services assigned to the offer.
     */
    public function setAfterSalesServices(?AfterSalesServices $afterSalesServices): self
    {
        $this->initialized['afterSalesServices'] = true;
        $this->afterSalesServices = $afterSalesServices;

        return $this;
    }

    /**
     * The definition of the additional services assigned to the offer.
     */
    public function getAdditionalServices(): ?OfferAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * The definition of the additional services assigned to the offer.
     */
    public function setAdditionalServices(?OfferAdditionalServices $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * The information on the offer in an external system.
     */
    public function getExternal(): ?ExternalId
    {
        return $this->external;
    }

    /**
     * The information on the offer in an external system.
     */
    public function setExternal(?ExternalId $external): self
    {
        $this->initialized['external'] = true;
        $this->external = $external;

        return $this;
    }

    /**
     * Delivery information.
     */
    public function getDelivery(): ?OfferListingDtoV1Delivery
    {
        return $this->delivery;
    }

    /**
     * Delivery information.
     */
    public function setDelivery(?OfferListingDtoV1Delivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Information about offer's business properties.
     */
    public function getB2b(): ?OfferListingDtoV1B2b
    {
        return $this->b2b;
    }

    /**
     * Information about offer's business properties.
     */
    public function setB2b(?OfferListingDtoV1B2b $b2b): self
    {
        $this->initialized['b2b'] = true;
        $this->b2b = $b2b;

        return $this;
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

    /**
     * Properties of the offer for each additional marketplace.
     *
     * @return array<string, OfferListingDtoV1AdditionalMarketplace>|null
     */
    public function getAdditionalMarketplaces(): ?iterable
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Properties of the offer for each additional marketplace.
     *
     * @param array<string, OfferListingDtoV1AdditionalMarketplace>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
