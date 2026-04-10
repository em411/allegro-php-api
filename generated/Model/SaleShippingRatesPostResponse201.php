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

class SaleShippingRatesPostResponse201 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
     *
     * @var string|null
     */
    protected $id;
    /**
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var list<ShippingRate>|null
     */
    protected $rates;
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     *
     * @var string|null
     */
    protected $lastModified;
    /**
     * Whether the shipping rates set is physical or electronic.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The dispatch country code in ISO 3166-1 alfa-2 format.
     *
     * @var string|null
     */
    protected $dispatchCountry;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<ShippingRate>|null
     */
    public function getRates(): ?array
    {
        return $this->rates;
    }

    /**
     * @param list<ShippingRate>|null $rates
     */
    public function setRates(?array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }

    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     */
    public function getLastModified(): ?string
    {
        return $this->lastModified;
    }

    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     */
    public function setLastModified(?string $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Whether the shipping rates set is physical or electronic.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Whether the shipping rates set is physical or electronic.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The dispatch country code in ISO 3166-1 alfa-2 format.
     */
    public function getDispatchCountry(): ?string
    {
        return $this->dispatchCountry;
    }

    /**
     * The dispatch country code in ISO 3166-1 alfa-2 format.
     */
    public function setDispatchCountry(?string $dispatchCountry): self
    {
        $this->initialized['dispatchCountry'] = true;
        $this->dispatchCountry = $dispatchCountry;

        return $this;
    }
}
