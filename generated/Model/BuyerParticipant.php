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

class BuyerParticipant extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Login.
     *
     * @var string|null
     */
    protected $login;
    /**
     * First name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Address.
     *
     * @var OperationParticipantAddress|null
     */
    protected $address;
    /**
     * The buyers's ID.
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Company name.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Company name.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Login.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Login.
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * First name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * First name.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Last name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Last name.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Address.
     */
    public function getAddress(): ?OperationParticipantAddress
    {
        return $this->address;
    }

    /**
     * Address.
     */
    public function setAddress(?OperationParticipantAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * The buyers's ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The buyers's ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
