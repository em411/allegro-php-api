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

class MeResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * User Id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * User login.
     *
     * @var string|null
     */
    protected $login;
    /**
     * User's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * User's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * User's email.
     *
     * @var string|null
     */
    protected $email;
    /**
     * @var MeResponseBaseMarketplace|null
     */
    protected $baseMarketplace;
    /**
     * @var Company|null
     */
    protected $company;
    /**
     * User's features list:
     *  - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
     *  - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
     *
     * @var list<string>|null
     */
    protected $features;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * User Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * User Id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * User login.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * User login.
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * User's first name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * User's first name.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * User's last name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * User's last name.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * User's email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * User's email.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getBaseMarketplace(): ?MeResponseBaseMarketplace
    {
        return $this->baseMarketplace;
    }

    public function setBaseMarketplace(?MeResponseBaseMarketplace $baseMarketplace): self
    {
        $this->initialized['baseMarketplace'] = true;
        $this->baseMarketplace = $baseMarketplace;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    /**
     * User's features list:
     *  - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
     *  - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
     *
     * @return list<string>|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * User's features list:
     * - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
     * - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
     *
     * @param list<string>|null $features
     */
    public function setFeatures(?array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }
}
