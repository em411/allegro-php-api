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

class CategoryDefinitionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Id of additional service definition.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of additional service definition, that should be shown to the customer.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var CategoryDefinitionDescriptionResponse|null
     */
    protected $description;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $maxPrice;
    /**
     * @var list<AvailableConstraint>|null
     */
    protected $availableConstraints;
    /**
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Id of additional service definition.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Id of additional service definition.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of additional service definition, that should be shown to the customer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of additional service definition, that should be shown to the customer.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?CategoryDefinitionDescriptionResponse
    {
        return $this->description;
    }

    public function setDescription(?CategoryDefinitionDescriptionResponse $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The price data.
     */
    public function getMaxPrice(): ?Price
    {
        return $this->maxPrice;
    }

    /**
     * The price data.
     */
    public function setMaxPrice(?Price $maxPrice): self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * @return list<AvailableConstraint>|null
     */
    public function getAvailableConstraints(): ?array
    {
        return $this->availableConstraints;
    }

    /**
     * @param list<AvailableConstraint>|null $availableConstraints
     */
    public function setAvailableConstraints(?array $availableConstraints): self
    {
        $this->initialized['availableConstraints'] = true;
        $this->availableConstraints = $availableConstraints;

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
}
