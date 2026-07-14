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

class ProductProposalsResponse extends \ArrayObject
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
     * @var ProductProposalsResponseCategory|null
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
     * @var list<NewProductParameterDto>|null
     */
    protected $parameters;
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
     * Language of product data (name, description, parameters's values).
     *
     * @var string|null
     */
    protected $language;
    /**
     * @var ProductProposalsResponsePublication|null
     */
    protected $publication;

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

    public function getCategory(): ?ProductProposalsResponseCategory
    {
        return $this->category;
    }

    public function setCategory(?ProductProposalsResponseCategory $category): self
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
     * @return list<NewProductParameterDto>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of product parameters.
     *
     * @param list<NewProductParameterDto>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

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

    /**
     * Language of product data (name, description, parameters's values).
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of product data (name, description, parameters's values).
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getPublication(): ?ProductProposalsResponsePublication
    {
        return $this->publication;
    }

    public function setPublication(?ProductProposalsResponsePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }
}
