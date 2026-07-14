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

class SaleProductOfferResponseV1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SaleProductOfferResponseV1productSetItem>|null
     */
    protected $productSet;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Name (title) of an offer. Must contain between 12 and 75 characters (including spaces) and consist of at least 3 words. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>.
     *  /
     * <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
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
     * An array of offer attachments.
     *
     * @var list<ProductOfferAttachmentItem>|null
     */
    protected $attachments;
    /**
     * @var SaleProductOfferResponseV1fundraisingCampaign|null
     */
    protected $fundraisingCampaign;
    /**
     * @var SaleProductOfferResponseV1additionalServices|null
     */
    protected $additionalServices;
    /**
     * @var DeliveryProductOfferResponse|null
     */
    protected $delivery;
    /**
     * @var SaleProductOfferPublicationResponse|null
     */
    protected $publication;
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @var array<string, AdditionalMarketplacesResponseItem>|null
     */
    protected $additionalMarketplaces;
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @var B2b|null
     */
    protected $b2b;
    /**
     * @var array<string, mixed>|null
     */
    protected $compatibilityList;
    /**
     * Declared base language of the offer.
     *
     * @var string|null
     */
    protected $language;
    /**
     * @var Validation|null
     */
    protected $validation;
    /**
     * @var list<Error>|null
     */
    protected $warnings;
    /**
     * @var SaleProductOfferResponseV1afterSalesServices|null
     */
    protected $afterSalesServices;
    /**
     * @var DiscountsProductOfferResponse|null
     */
    protected $discounts;
    /**
     * @var SaleProductOfferResponseV1stock|null
     */
    protected $stock;
    /**
     * List of offer parameters.
     *
     * @var list<ParameterProductOfferResponse>|null
     */
    protected $parameters;
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     *
     * @var SaleProductOfferResponseV1contact|null
     */
    protected $contact;
    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Information about content declared as generated using AI.
     *
     * @var AiCoCreatedContent|null
     */
    protected $aiCoCreatedContent;
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
     * @var SaleProductOfferSizeTable|null
     */
    protected $sizeTable;
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
     * @return list<SaleProductOfferResponseV1productSetItem>|null
     */
    public function getProductSet(): ?array
    {
        return $this->productSet;
    }

    /**
     * @param list<SaleProductOfferResponseV1productSetItem>|null $productSet
     */
    public function setProductSet(?array $productSet): self
    {
        $this->initialized['productSet'] = true;
        $this->productSet = $productSet;

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

    public function getFundraisingCampaign(): ?SaleProductOfferResponseV1fundraisingCampaign
    {
        return $this->fundraisingCampaign;
    }

    public function setFundraisingCampaign(?SaleProductOfferResponseV1fundraisingCampaign $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;

        return $this;
    }

    public function getAdditionalServices(): ?SaleProductOfferResponseV1additionalServices
    {
        return $this->additionalServices;
    }

    public function setAdditionalServices(?SaleProductOfferResponseV1additionalServices $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    public function getDelivery(): ?DeliveryProductOfferResponse
    {
        return $this->delivery;
    }

    public function setDelivery(?DeliveryProductOfferResponse $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    public function getPublication(): ?SaleProductOfferPublicationResponse
    {
        return $this->publication;
    }

    public function setPublication(?SaleProductOfferPublicationResponse $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @return array<string, AdditionalMarketplacesResponseItem>|null
     */
    public function getAdditionalMarketplaces(): ?iterable
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @param array<string, AdditionalMarketplacesResponseItem>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

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
     * @return array<string, mixed>|null
     */
    public function getCompatibilityList(): ?iterable
    {
        return $this->compatibilityList;
    }

    /**
     * @param array<string, mixed>|null $compatibilityList
     */
    public function setCompatibilityList(?iterable $compatibilityList): self
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

    public function getValidation(): ?Validation
    {
        return $this->validation;
    }

    public function setValidation(?Validation $validation): self
    {
        $this->initialized['validation'] = true;
        $this->validation = $validation;

        return $this;
    }

    /**
     * @return list<Error>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<Error>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }

    public function getAfterSalesServices(): ?SaleProductOfferResponseV1afterSalesServices
    {
        return $this->afterSalesServices;
    }

    public function setAfterSalesServices(?SaleProductOfferResponseV1afterSalesServices $afterSalesServices): self
    {
        $this->initialized['afterSalesServices'] = true;
        $this->afterSalesServices = $afterSalesServices;

        return $this;
    }

    public function getDiscounts(): ?DiscountsProductOfferResponse
    {
        return $this->discounts;
    }

    public function setDiscounts(?DiscountsProductOfferResponse $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    public function getStock(): ?SaleProductOfferResponseV1stock
    {
        return $this->stock;
    }

    public function setStock(?SaleProductOfferResponseV1stock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;

        return $this;
    }

    /**
     * List of offer parameters.
     *
     * @return list<ParameterProductOfferResponse>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of offer parameters.
     *
     * @param list<ParameterProductOfferResponse>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     */
    public function getContact(): ?SaleProductOfferResponseV1contact
    {
        return $this->contact;
    }

    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     */
    public function setContact(?SaleProductOfferResponseV1contact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

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
