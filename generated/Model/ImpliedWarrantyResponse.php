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

class ImpliedWarrantyResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the implied warranty definition.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var Seller|null
     */
    protected $seller;
    /**
     * Implied warranty name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var ImpliedWarrantyPeriod|null
     */
    protected $individual;
    /**
     * @var ImpliedWarrantyPeriod|null
     */
    protected $corporate;
    /**
     * @var AfterSalesServicesAddress|null
     */
    protected $address;
    /**
     * Implied warranty description.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the implied warranty definition.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the implied warranty definition.
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
     * Implied warranty name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Implied warranty name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getIndividual(): ?ImpliedWarrantyPeriod
    {
        return $this->individual;
    }

    public function setIndividual(?ImpliedWarrantyPeriod $individual): self
    {
        $this->initialized['individual'] = true;
        $this->individual = $individual;

        return $this;
    }

    public function getCorporate(): ?ImpliedWarrantyPeriod
    {
        return $this->corporate;
    }

    public function setCorporate(?ImpliedWarrantyPeriod $corporate): self
    {
        $this->initialized['corporate'] = true;
        $this->corporate = $corporate;

        return $this;
    }

    public function getAddress(): ?AfterSalesServicesAddress
    {
        return $this->address;
    }

    public function setAddress(?AfterSalesServicesAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Implied warranty description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Implied warranty description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
