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

class SaleProductDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Product name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Category in which the product can be listed for sale.
     *
     * @var ProductCategoryWithPath|null
     */
    protected $category;
    /**
     * List of product images.
     *
     * @var list<ImageUrl>|null
     */
    protected $images;
    /**
     * List of product parameters.
     *
     * @var list<ProductParameterDto>|null
     */
    protected $parameters;
    /**
     * Conditions which an offer must meet to be assigned with the product, i.e. Condition parameter must be set to New.
     *
     * @var OfferRequirements|null
     */
    protected $offerRequirements;
    /**
     * Compatibility list assigned to this product, based on information from TecDoc database.
     *
     * @var SaleProductCompatibilityList|null
     */
    protected $compatibilityList;
    /**
     * Contains additional information describing products from automotive categories. Technical specification is created based on TecDoc database and can only be used while creating offer with assigned product to it. <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA" target="_blank">Read more</a>.
     *
     * @var TecdocSpecification|null
     */
    protected $tecdocSpecification;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription|null
     */
    protected $description;
    /**
     * @var ProductAiCoCreatedContent|null
     */
    protected $aiCoCreatedContent;
    /**
     * @var TrustedContent|null
     */
    protected $trustedContent;
    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     *
     * @var bool|null
     */
    protected $hasProtectedBrand;
    /**
     * @var SaleProductDtoPublication|null
     */
    protected $publication;
    /**
     * Suggested product safety data in accordance with GPSR. <br />**Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     *
     * @var SaleProductSafetyDto|null
     */
    protected $productSafety;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Product name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Product name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Category in which the product can be listed for sale.
     */
    public function getCategory(): ?ProductCategoryWithPath
    {
        return $this->category;
    }

    /**
     * Category in which the product can be listed for sale.
     */
    public function setCategory(?ProductCategoryWithPath $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * List of product images.
     *
     * @return list<ImageUrl>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of product images.
     *
     * @param list<ImageUrl>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * List of product parameters.
     *
     * @return list<ProductParameterDto>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of product parameters.
     *
     * @param list<ProductParameterDto>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Conditions which an offer must meet to be assigned with the product, i.e. Condition parameter must be set to New.
     */
    public function getOfferRequirements(): ?OfferRequirements
    {
        return $this->offerRequirements;
    }

    /**
     * Conditions which an offer must meet to be assigned with the product, i.e. Condition parameter must be set to New.
     */
    public function setOfferRequirements(?OfferRequirements $offerRequirements): self
    {
        $this->initialized['offerRequirements'] = true;
        $this->offerRequirements = $offerRequirements;

        return $this;
    }

    /**
     * Compatibility list assigned to this product, based on information from TecDoc database.
     */
    public function getCompatibilityList(): ?SaleProductCompatibilityList
    {
        return $this->compatibilityList;
    }

    /**
     * Compatibility list assigned to this product, based on information from TecDoc database.
     */
    public function setCompatibilityList(?SaleProductCompatibilityList $compatibilityList): self
    {
        $this->initialized['compatibilityList'] = true;
        $this->compatibilityList = $compatibilityList;

        return $this;
    }

    /**
     * Contains additional information describing products from automotive categories. Technical specification is created based on TecDoc database and can only be used while creating offer with assigned product to it. <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA" target="_blank">Read more</a>.
     */
    public function getTecdocSpecification(): ?TecdocSpecification
    {
        return $this->tecdocSpecification;
    }

    /**
     * Contains additional information describing products from automotive categories. Technical specification is created based on TecDoc database and can only be used while creating offer with assigned product to it. <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA" target="_blank">Read more</a>.
     */
    public function setTecdocSpecification(?TecdocSpecification $tecdocSpecification): self
    {
        $this->initialized['tecdocSpecification'] = true;
        $this->tecdocSpecification = $tecdocSpecification;

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

    public function getAiCoCreatedContent(): ?ProductAiCoCreatedContent
    {
        return $this->aiCoCreatedContent;
    }

    public function setAiCoCreatedContent(?ProductAiCoCreatedContent $aiCoCreatedContent): self
    {
        $this->initialized['aiCoCreatedContent'] = true;
        $this->aiCoCreatedContent = $aiCoCreatedContent;

        return $this;
    }

    public function getTrustedContent(): ?TrustedContent
    {
        return $this->trustedContent;
    }

    public function setTrustedContent(?TrustedContent $trustedContent): self
    {
        $this->initialized['trustedContent'] = true;
        $this->trustedContent = $trustedContent;

        return $this;
    }

    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     */
    public function getHasProtectedBrand(): ?bool
    {
        return $this->hasProtectedBrand;
    }

    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     */
    public function setHasProtectedBrand(?bool $hasProtectedBrand): self
    {
        $this->initialized['hasProtectedBrand'] = true;
        $this->hasProtectedBrand = $hasProtectedBrand;

        return $this;
    }

    public function getPublication(): ?SaleProductDtoPublication
    {
        return $this->publication;
    }

    public function setPublication(?SaleProductDtoPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Suggested product safety data in accordance with GPSR. <br />**Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     */
    public function getProductSafety(): ?SaleProductSafetyDto
    {
        return $this->productSafety;
    }

    /**
     * Suggested product safety data in accordance with GPSR. <br />**Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     */
    public function setProductSafety(?SaleProductSafetyDto $productSafety): self
    {
        $this->initialized['productSafety'] = true;
        $this->productSafety = $productSafety;

        return $this;
    }
}
