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

class ListingOffer extends \ArrayObject
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
     * Information about the seller.
     *
     * @var OfferSeller|null
     */
    protected $seller;
    /**
     * Information about promotion options for the item.
     *
     * @var OfferPromotion|null
     */
    protected $promotion;
    /**
     * Information about shipping options for the offer.
     *
     * @var OfferDelivery|null
     */
    protected $delivery;
    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @var list<OfferImages>|null
     */
    protected $images;
    /**
     * This section describes the selling format and prices.
     *
     * @var OfferSellingMode|null
     */
    protected $sellingMode;
    /**
     * Information about the stock.
     *
     * @var OfferStock|null
     */
    protected $stock;
    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     *
     * @var OfferVendor|null
     */
    protected $vendor;
    /**
     * The category to which the offer is listed for sale.
     *
     * @var array<string, mixed>|null
     */
    protected $category;
    /**
     * This section is available only for offers with a defined end of publication.
     *
     * @var OfferPublication|null
     */
    protected $publication;

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
     * Information about the seller.
     */
    public function getSeller(): ?OfferSeller
    {
        return $this->seller;
    }

    /**
     * Information about the seller.
     */
    public function setSeller(?OfferSeller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }

    /**
     * Information about promotion options for the item.
     */
    public function getPromotion(): ?OfferPromotion
    {
        return $this->promotion;
    }

    /**
     * Information about promotion options for the item.
     */
    public function setPromotion(?OfferPromotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Information about shipping options for the offer.
     */
    public function getDelivery(): ?OfferDelivery
    {
        return $this->delivery;
    }

    /**
     * Information about shipping options for the offer.
     */
    public function setDelivery(?OfferDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @return list<OfferImages>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @param list<OfferImages>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * This section describes the selling format and prices.
     */
    public function getSellingMode(): ?OfferSellingMode
    {
        return $this->sellingMode;
    }

    /**
     * This section describes the selling format and prices.
     */
    public function setSellingMode(?OfferSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * Information about the stock.
     */
    public function getStock(): ?OfferStock
    {
        return $this->stock;
    }

    /**
     * Information about the stock.
     */
    public function setStock(?OfferStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }

    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     */
    public function getVendor(): ?OfferVendor
    {
        return $this->vendor;
    }

    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     */
    public function setVendor(?OfferVendor $vendor): self
    {
        $this->initialized['vendor'] = true;
        $this->vendor = $vendor;

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
     * This section is available only for offers with a defined end of publication.
     */
    public function getPublication(): ?OfferPublication
    {
        return $this->publication;
    }

    /**
     * This section is available only for offers with a defined end of publication.
     */
    public function setPublication(?OfferPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }
}
