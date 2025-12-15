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

class WarrantyResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the warranty definition.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var Seller|null
     */
    protected $seller;
    /**
     * Warranty name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Defines who is warrantor.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var WarrantyPeriod|null
     */
    protected $individual;
    /**
     * @var WarrantyPeriod|null
     */
    protected $corporate;
    /**
     * @var AfterSalesServicesAttachment|null
     */
    protected $attachment;
    /**
     * Warranty description.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the warranty definition.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the warranty definition.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getSeller(): ?Seller
    {
        return $this->seller;
    }

    public function setSeller(?Seller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;

        return $this;
    }

    /**
     * Warranty name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Warranty name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Defines who is warrantor.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Defines who is warrantor.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getIndividual(): ?WarrantyPeriod
    {
        return $this->individual;
    }

    public function setIndividual(?WarrantyPeriod $individual): self
    {
        $this->initialized['individual'] = true;
        $this->individual = $individual;

        return $this;
    }

    public function getCorporate(): ?WarrantyPeriod
    {
        return $this->corporate;
    }

    public function setCorporate(?WarrantyPeriod $corporate): self
    {
        $this->initialized['corporate'] = true;
        $this->corporate = $corporate;

        return $this;
    }

    public function getAttachment(): ?AfterSalesServicesAttachment
    {
        return $this->attachment;
    }

    public function setAttachment(?AfterSalesServicesAttachment $attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Warranty description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Warranty description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
