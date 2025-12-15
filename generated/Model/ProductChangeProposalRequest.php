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

class ProductChangeProposalRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Proposed product name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Note about product changes proposal.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Product category.
     *
     * @var array<string, mixed>|null
     */
    protected $category;
    /**
     * List of product images. At least one image is required.
     *
     * @var list<ImageUrl>|null
     */
    protected $images;
    /**
     * List of product parameters.
     *
     * @var list<ProductParameter>|null
     */
    protected $parameters;
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @var bool|null
     */
    protected $notifyViaEmailAfterVerification;
    /**
     * Language of provided proposal data.
     *
     * @var string|null
     */
    protected $language = 'pl-PL';

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Proposed product name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Proposed product name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Note about product changes proposal.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Note about product changes proposal.
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * Product category.
     *
     * @return array<string, mixed>|null
     */
    public function getCategory(): ?iterable
    {
        return $this->category;
    }

    /**
     * Product category.
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
     * List of product images. At least one image is required.
     *
     * @return list<ImageUrl>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of product images. At least one image is required.
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
     * @return list<ProductParameter>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of product parameters.
     *
     * @param list<ProductParameter>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Receive an email notification after product changes proposal resolution.
     */
    public function getNotifyViaEmailAfterVerification(): ?bool
    {
        return $this->notifyViaEmailAfterVerification;
    }

    /**
     * Receive an email notification after product changes proposal resolution.
     */
    public function setNotifyViaEmailAfterVerification(?bool $notifyViaEmailAfterVerification): self
    {
        $this->initialized['notifyViaEmailAfterVerification'] = true;
        $this->notifyViaEmailAfterVerification = $notifyViaEmailAfterVerification;

        return $this;
    }

    /**
     * Language of provided proposal data.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of provided proposal data.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
