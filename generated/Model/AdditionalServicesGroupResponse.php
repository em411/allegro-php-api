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

class AdditionalServicesGroupResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<AdditionalServiceResponse>|null
     */
    protected $additionalServices;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var Reference|null
     */
    protected $seller;
    /**
     * IETF language tag.
     *
     * @var string|null
     */
    protected $language;
    /**
     * Information whether the group is automatically created and managed by Allegro.
     *
     * @var bool|null
     */
    protected $managedByAllegro;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<AdditionalServiceResponse>|null
     */
    public function getAdditionalServices(): ?array
    {
        return $this->additionalServices;
    }

    /**
     * @param list<AdditionalServiceResponse>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Name of the group provided by merchant, invisible for buyers.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the group provided by merchant, invisible for buyers.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSeller(): ?Reference
    {
        return $this->seller;
    }

    public function setSeller(?Reference $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }

    /**
     * IETF language tag.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * IETF language tag.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Information whether the group is automatically created and managed by Allegro.
     */
    public function getManagedByAllegro(): ?bool
    {
        return $this->managedByAllegro;
    }

    /**
     * Information whether the group is automatically created and managed by Allegro.
     */
    public function setManagedByAllegro(?bool $managedByAllegro): self
    {
        $this->initialized['managedByAllegro'] = true;
        $this->managedByAllegro = $managedByAllegro;

        return $this;
    }
}
