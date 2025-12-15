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

class SaleProductOfferRequestBase extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * @var SaleProductOfferRequestBasepublication|null
     */
    protected $publication;
    /**
     * @var SaleProductOfferRequestBasedelivery|null
     */
    protected $delivery;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServicesProductOfferRequest|null
     */
    protected $afterSalesServices;
    /**
     * @var SizeTable|null
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
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     *
     * @var OfferTaxSettings|null
     */
    protected $taxSettings;
    /**
     * Defines message to the seller settings options.
     *
     * @var MessageToSellerSettings|null
     */
    protected $messageToSellerSettings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getSizeTable(): ?SizeTable
    {
        return $this->sizeTable;
    }

    public function setSizeTable(?SizeTable $sizeTable): self
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

    /**
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     */
    public function getTaxSettings(): ?OfferTaxSettings
    {
        return $this->taxSettings;
    }

    /**
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     */
    public function setTaxSettings(?OfferTaxSettings $taxSettings): self
    {
        $this->initialized['taxSettings'] = true;
        $this->taxSettings = $taxSettings;

        return $this;
    }

    /**
     * Defines message to the seller settings options.
     */
    public function getMessageToSellerSettings(): ?MessageToSellerSettings
    {
        return $this->messageToSellerSettings;
    }

    /**
     * Defines message to the seller settings options.
     */
    public function setMessageToSellerSettings(?MessageToSellerSettings $messageToSellerSettings): self
    {
        $this->initialized['messageToSellerSettings'] = true;
        $this->messageToSellerSettings = $messageToSellerSettings;

        return $this;
    }
}
