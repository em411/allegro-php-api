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

class CreateResponsiblePersonRequestPersonalData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of responsible person. Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Responsible person address.
     *
     * @var ResponsiblePersonAddress|null
     */
    protected $address;
    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     *
     * @var ResponsiblePersonContact|null
     */
    protected $contact;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of responsible person. Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of responsible person. Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Responsible person address.
     */
    public function getAddress(): ?ResponsiblePersonAddress
    {
        return $this->address;
    }

    /**
     * Responsible person address.
     */
    public function setAddress(?ResponsiblePersonAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     */
    public function getContact(): ?ResponsiblePersonContact
    {
        return $this->contact;
    }

    /**
     * Contact to responsible person. At least one of the following fields is required: `email` or `formUrl`.
     */
    public function setContact(?ResponsiblePersonContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }
}
