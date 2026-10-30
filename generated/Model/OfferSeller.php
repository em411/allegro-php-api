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

class OfferSeller implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The seller ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The seller login.
     *
     * @var string|null
     */
    protected $login;
    /**
     * Indicates whether the seller represents a registered business.
     *
     * @var bool|null
     */
    protected $company;
    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     *
     * @var bool|null
     */
    protected $superSeller;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The seller ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The seller ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The seller login.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * The seller login.
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * Indicates whether the seller represents a registered business.
     */
    public function getCompany(): ?bool
    {
        return $this->company;
    }

    /**
     * Indicates whether the seller represents a registered business.
     */
    public function setCompany(?bool $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     */
    public function getSuperSeller(): ?bool
    {
        return $this->superSeller;
    }

    /**
     * Indicates whether the seller has the "Super Sprzedawca" status.
     */
    public function setSuperSeller(?bool $superSeller): self
    {
        $this->initialized['superSeller'] = true;
        $this->superSeller = $superSeller;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'login' => ['login', 'getLogin', 'setLogin'], 'company' => ['company', 'getCompany', 'setCompany'], 'superSeller' => ['superSeller', 'getSuperSeller', 'setSuperSeller']];
    }
}
