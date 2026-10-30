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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class UpdateResponsibleProducerRequestProducerData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of company, first name and last name or trade name of company responsible for producing product.
     *
     * @var string|null
     */
    protected $tradeName;
    /**
     * Responsible producer address.
     *
     * @var ResponsibleProducerAddress|null
     */
    protected $address;
    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @var ResponsibleProducerContact|null
     */
    protected $contact;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of company, first name and last name or trade name of company responsible for producing product.
     */
    public function getTradeName(): ?string
    {
        return $this->tradeName;
    }

    /**
     * Name of company, first name and last name or trade name of company responsible for producing product.
     */
    public function setTradeName(?string $tradeName): self
    {
        $this->initialized['tradeName'] = true;
        $this->tradeName = $tradeName;

        return $this;
    }

    /**
     * Responsible producer address.
     */
    public function getAddress(): ?ResponsibleProducerAddress
    {
        return $this->address;
    }

    /**
     * Responsible producer address.
     */
    public function setAddress(?ResponsibleProducerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     */
    public function getContact(): ?ResponsibleProducerContact
    {
        return $this->contact;
    }

    /**
     * Contact to responsible producer. At least one of the following fields is required: `email` or `formUrl`.
     */
    public function setContact(?ResponsibleProducerContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['tradeName' => ['tradeName', 'getTradeName', 'setTradeName'], 'address' => ['address', 'getAddress', 'setAddress'], 'contact' => ['contact', 'getContact', 'setContact']];
    }
}
