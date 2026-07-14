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

class SaleProductOfferRequestV1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SaleProductOfferRequestV1productSetItem>|null
     */
    protected $productSet;
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @var B2b|null
     */
    protected $b2b;
    /**
     * An array of offer attachments.
     *
     * @var list<ProductOfferAttachmentItem>|null
     */
    protected $attachments;
    /**
     * @var ProductOfferFundraisingCampaignRequest|null
     */
    protected $fundraisingCampaign;
    /**
     * Offer additional services.
     *
     * @var ProductOfferAdditionalServicesRequest|null
     */
    protected $additionalServices;
    /**
     * @var SaleProductOffersRequestStock|null
     */
    protected $stock;
    /**
     * @var SaleProductOfferRequestBasedelivery|null
     */
    protected $delivery;
    /**
     * @var SaleProductOfferRequestBasepublication|null
     */
    protected $publication;
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @var array<string, AdditionalMarketplacesRequestItem>|null
     */
    protected $additionalMarketplaces;
    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     *
     * @var SaleProductOfferRequestV1compatibilityList|null
     */
    protected $compatibilityList;
    /**
     * Declared base language of the offer.
     *
     * @var string|null
     */
    protected $language;
    /**
     * Information about content declared as generated using AI.
     *
     * @var AiCoCreatedContent|null
     */
    protected $aiCoCreatedContent;
    /**
     * @var array<string, mixed>|null
     */
    protected $category;
    /**
     * Name (title) of an offer. Must contain between 12 and 75 characters (including spaces) and consist of at least 3 words. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>.
     *  /
     * <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var list<ParameterProductOfferRequest>|null
     */
    protected $parameters;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServicesProductOfferRequest|null
     */
    protected $afterSalesServices;
    /**
     * @var SaleProductOfferSizeTable|null
     */
    protected $sizeTable;
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     *
     * @var SaleProductOfferRequestBasecontact|null
     */
    protected $contact;
    /**
     * @var DiscountsProductOfferRequest|null
     */
    protected $discounts;
    /**
     * @var Payments|null
     */
    protected $payments;
    /**
     * Information on the offer's selling mode.
     *
     * @var SellingMode|null
     */
    protected $sellingMode;
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     *
     * @var Location|null
     */
    protected $location;
    /**
     * @var list<string>|null
     */
    protected $images;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription|null
     */
    protected $description;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId|null
     */
    protected $external;
    /**
     * @var SaleProductOfferTaxSettings|null
     */
    protected $taxSettings;
    /**
     * @var SaleProductOfferMessageToSellerSettings|null
     */
    protected $messageToSellerSettings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<SaleProductOfferRequestV1productSetItem>|null
     */
    public function getProductSet(): ?array
    {
        return $this->productSet;
    }

    /**
     * @param list<SaleProductOfferRequestV1productSetItem>|null $productSet
     */
    public function setProductSet(?array $productSet): self
    {
        $this->initialized['productSet'] = true;
        $this->productSet = $productSet;

        return $this;
    }

    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     */
    public function getB2b(): ?B2b
    {
        return $this->b2b;
    }

    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     */
    public function setB2b(?B2b $b2b): self
    {
        $this->initialized['b2b'] = true;
        $this->b2b = $b2b;

        return $this;
    }

    /**
     * An array of offer attachments.
     *
     * @return list<ProductOfferAttachmentItem>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * An array of offer attachments.
     *
     * @param list<ProductOfferAttachmentItem>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    public function getFundraisingCampaign(): ?ProductOfferFundraisingCampaignRequest
    {
        return $this->fundraisingCampaign;
    }

    public function setFundraisingCampaign(?ProductOfferFundraisingCampaignRequest $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;

        return $this;
    }

    /**
     * Offer additional services.
     */
    public function getAdditionalServices(): ?ProductOfferAdditionalServicesRequest
    {
        return $this->additionalServices;
    }

    /**
     * Offer additional services.
     */
    public function setAdditionalServices(?ProductOfferAdditionalServicesRequest $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    public function getStock(): ?SaleProductOffersRequestStock
    {
        return $this->stock;
    }

    public function setStock(?SaleProductOffersRequestStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }

    public function getDelivery(): ?SaleProductOfferRequestBasedelivery
    {
        return $this->delivery;
    }

    public function setDelivery(?SaleProductOfferRequestBasedelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    public function getPublication(): ?SaleProductOfferRequestBasepublication
    {
        return $this->publication;
    }

    public function setPublication(?SaleProductOfferRequestBasepublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @return array<string, AdditionalMarketplacesRequestItem>|null
     */
    public function getAdditionalMarketplaces(): ?iterable
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @param array<string, AdditionalMarketplacesRequestItem>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }

    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     */
    public function getCompatibilityList(): ?SaleProductOfferRequestV1compatibilityList
    {
        return $this->compatibilityList;
    }

    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     */
    public function setCompatibilityList(?SaleProductOfferRequestV1compatibilityList $compatibilityList): self
    {
        $this->initialized['compatibilityList'] = true;
        $this->compatibilityList = $compatibilityList;

        return $this;
    }

    /**
     * Declared base language of the offer.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Declared base language of the offer.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Information about content declared as generated using AI.
     */
    public function getAiCoCreatedContent(): ?AiCoCreatedContent
    {
        return $this->aiCoCreatedContent;
    }

    /**
     * Information about content declared as generated using AI.
     */
    public function setAiCoCreatedContent(?AiCoCreatedContent $aiCoCreatedContent): self
    {
        $this->initialized['aiCoCreatedContent'] = true;
        $this->aiCoCreatedContent = $aiCoCreatedContent;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getCategory(): ?iterable
    {
        return $this->category;
    }

    /**
     * @param array<string, mixed>|null $category
     */
    public function setCategory(?iterable $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * Name (title) of an offer. Must contain between 12 and 75 characters (including spaces) and consist of at least 3 words. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>.
     *  /
     * <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name (title) of an offer. Must contain between 12 and 75 characters (including spaces) and consist of at least 3 words. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>.
     * /
     * <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<ParameterProductOfferRequest>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param list<ParameterProductOfferRequest>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * The definitions of the different after sales services assigned to the offer.
     */
    public function getAfterSalesServices(): ?AfterSalesServicesProductOfferRequest
    {
        return $this->afterSalesServices;
    }

    /**
     * The definitions of the different after sales services assigned to the offer.
     */
    public function setAfterSalesServices(?AfterSalesServicesProductOfferRequest $afterSalesServices): self
    {
        $this->initialized['afterSalesServices'] = true;
        $this->afterSalesServices = $afterSalesServices;

        return $this;
    }

    public function getSizeTable(): ?SaleProductOfferSizeTable
    {
        return $this->sizeTable;
    }

    public function setSizeTable(?SaleProductOfferSizeTable $sizeTable): self
    {
        $this->initialized['sizeTable'] = true;
        $this->sizeTable = $sizeTable;

        return $this;
    }

    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     */
    public function getContact(): ?SaleProductOfferRequestBasecontact
    {
        return $this->contact;
    }

    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     */
    public function setContact(?SaleProductOfferRequestBasecontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    public function getDiscounts(): ?DiscountsProductOfferRequest
    {
        return $this->discounts;
    }

    public function setDiscounts(?DiscountsProductOfferRequest $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    public function getPayments(): ?Payments
    {
        return $this->payments;
    }

    public function setPayments(?Payments $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function getSellingMode(): ?SellingMode
    {
        return $this->sellingMode;
    }

    /**
     * Information on the offer's selling mode.
     */
    public function setSellingMode(?SellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;

        return $this;
    }

    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     */
    public function setLocation(?Location $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param list<string>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * The description section cannot have more than 40000 bytes in length.
     */
    public function getDescription(): ?StandardizedDescription
    {
        return $this->description;
    }

    /**
     * The description section cannot have more than 40000 bytes in length.
     */
    public function setDescription(?StandardizedDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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

    public function getTaxSettings(): ?SaleProductOfferTaxSettings
    {
        return $this->taxSettings;
    }

    public function setTaxSettings(?SaleProductOfferTaxSettings $taxSettings): self
    {
        $this->initialized['taxSettings'] = true;
        $this->taxSettings = $taxSettings;

        return $this;
    }

    public function getMessageToSellerSettings(): ?SaleProductOfferMessageToSellerSettings
    {
        return $this->messageToSellerSettings;
    }

    public function setMessageToSellerSettings(?SaleProductOfferMessageToSellerSettings $messageToSellerSettings): self
    {
        $this->initialized['messageToSellerSettings'] = true;
        $this->messageToSellerSettings = $messageToSellerSettings;

        return $this;
    }
}
