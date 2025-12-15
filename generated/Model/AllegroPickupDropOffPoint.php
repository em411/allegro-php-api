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

class AllegroPickupDropOffPoint extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Point id. You can use it in Ship with Allegro.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Point name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Point type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Point services.
     *
     * @var list<AllegroPickupDropOffPointServicesItem>|null
     */
    protected $services;
    /**
     * Point restrictions.
     *
     * @var list<AllegroPickupDropOffPointRestrictionsItem>|null
     */
    protected $restrictions;
    /**
     * Point description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Point payment type.
     *
     * @var list<AllegroPickupDropOffPointPaymentsItem>|null
     */
    protected $payments;
    /**
     * @var AllegroPickupDropOffPointAddress|null
     */
    protected $address;
    /**
     * Point working hours information.
     *
     * @var list<AllegroPickupDropOffPointOpeningItem>|null
     */
    protected $opening;
    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @var list<string>|null
     */
    protected $carriers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Point id. You can use it in Ship with Allegro.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Point id. You can use it in Ship with Allegro.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Point name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Point name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Point type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Point type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Point services.
     *
     * @return list<AllegroPickupDropOffPointServicesItem>|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * Point services.
     *
     * @param list<AllegroPickupDropOffPointServicesItem>|null $services
     */
    public function setServices(?array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;

        return $this;
    }

    /**
     * Point restrictions.
     *
     * @return list<AllegroPickupDropOffPointRestrictionsItem>|null
     */
    public function getRestrictions(): ?array
    {
        return $this->restrictions;
    }

    /**
     * Point restrictions.
     *
     * @param list<AllegroPickupDropOffPointRestrictionsItem>|null $restrictions
     */
    public function setRestrictions(?array $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Point description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Point description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Point payment type.
     *
     * @return list<AllegroPickupDropOffPointPaymentsItem>|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * Point payment type.
     *
     * @param list<AllegroPickupDropOffPointPaymentsItem>|null $payments
     */
    public function setPayments(?array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    public function getAddress(): ?AllegroPickupDropOffPointAddress
    {
        return $this->address;
    }

    public function setAddress(?AllegroPickupDropOffPointAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Point working hours information.
     *
     * @return list<AllegroPickupDropOffPointOpeningItem>|null
     */
    public function getOpening(): ?array
    {
        return $this->opening;
    }

    /**
     * Point working hours information.
     *
     * @param list<AllegroPickupDropOffPointOpeningItem>|null $opening
     */
    public function setOpening(?array $opening): self
    {
        $this->initialized['opening'] = true;
        $this->opening = $opening;

        return $this;
    }

    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @return list<string>|null
     */
    public function getCarriers(): ?array
    {
        return $this->carriers;
    }

    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @param list<string>|null $carriers
     */
    public function setCarriers(?array $carriers): self
    {
        $this->initialized['carriers'] = true;
        $this->carriers = $carriers;

        return $this;
    }
}
