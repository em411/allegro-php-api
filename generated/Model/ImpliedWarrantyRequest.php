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

class ImpliedWarrantyRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Warranty name.
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
