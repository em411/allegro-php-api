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

class BaseSaleProductResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Name of the product.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription|null
     */
    protected $description;
    /**
     * Category in which the product can be listed for sale.
     *
     * @var ProductCategoryWithPath|null
     */
    protected $category;
    /**
     * @var list<ImageUrl>|null
     */
    protected $images;
    /**
     * @var list<ProductParameterDto>|null
     */
    protected $parameters;
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
     * Suggested product safety data in accordance with GPSR. <br />**Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     *
     * @var SaleProductSafetyDto|null
     */
    protected $productSafety;
    /**
     * @var BaseSaleProductResponseDtoPublication|null
     */
    protected $publication;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Name of the product.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the product.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
     * @return list<ImageUrl>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param list<ImageUrl>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * @return list<ProductParameterDto>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param list<ProductParameterDto>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

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

    public function getPublication(): ?BaseSaleProductResponseDtoPublication
    {
        return $this->publication;
    }

    public function setPublication(?BaseSaleProductResponseDtoPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }
}
