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

class ProductChangeProposalDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product change proposal id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name proposal status.
     *
     * @var ProductNameProposal|null
     */
    protected $name;
    /**
     * Name proposal status.
     *
     * @var ProductCategoryProposal|null
     */
    protected $category;
    /**
     * Note about product changes proposal.
     *
     * @var string|null
     */
    protected $note;
    /**
     * List of proposed image change statuses.
     *
     * @var list<ProductImageProposal>|null
     */
    protected $images;
    /**
     * List of proposed product parameter change statuses.
     *
     * @var list<ProductParameterProposal>|null
     */
    protected $parameters;
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @var bool|null
     */
    protected $notifyViaEmailAfterVerification;
    /**
     * Language of provided suggestion data.
     *
     * @var string|null
     */
    protected $language;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product change proposal id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product change proposal id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name proposal status.
     */
    public function getName(): ?ProductNameProposal
    {
        return $this->name;
    }

    /**
     * Name proposal status.
     */
    public function setName(?ProductNameProposal $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Name proposal status.
     */
    public function getCategory(): ?ProductCategoryProposal
    {
        return $this->category;
    }

    /**
     * Name proposal status.
     */
    public function setCategory(?ProductCategoryProposal $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

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
     * List of proposed image change statuses.
     *
     * @return list<ProductImageProposal>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of proposed image change statuses.
     *
     * @param list<ProductImageProposal>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * List of proposed product parameter change statuses.
     *
     * @return list<ProductParameterProposal>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of proposed product parameter change statuses.
     *
     * @param list<ProductParameterProposal>|null $parameters
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
     * Language of provided suggestion data.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of provided suggestion data.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
