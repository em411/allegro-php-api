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

class Modification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AdditionalServicesGroup|null
     */
    protected $additionalServicesGroup;
    /**
     * Contains delivery details to change.
     *
     * @var ModificationDelivery|null
     */
    protected $delivery;
    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     *
     * @var ModificationDiscounts|null
     */
    protected $discounts;
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     *
     * @var Location|null
     */
    protected $location;
    /**
     * @var ModificationPayments|null
     */
    protected $payments;
    /**
     * @var SizeTable|null
     */
    protected $sizeTable;
    /**
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     *
     * @var ModificationPublication|null
     */
    protected $publication;
    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     *
     * @var ModificationResponsiblePerson|null
     */
    protected $responsiblePerson;
    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     *
     * @var ModificationResponsibleProducer|null
     */
    protected $responsibleProducer;
    /**
     * Allows you to set safety information in offers.
     *
     * @var ModificationSafetyInformation|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAdditionalServicesGroup(): ?AdditionalServicesGroup
    {
        return $this->additionalServicesGroup;
    }

    public function setAdditionalServicesGroup(?AdditionalServicesGroup $additionalServicesGroup): self
    {
        $this->initialized['additionalServicesGroup'] = true;
        $this->additionalServicesGroup = $additionalServicesGroup;

        return $this;
    }

    /**
     * Contains delivery details to change.
     */
    public function getDelivery(): ?ModificationDelivery
    {
        return $this->delivery;
    }

    /**
     * Contains delivery details to change.
     */
    public function setDelivery(?ModificationDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     */
    public function getDiscounts(): ?ModificationDiscounts
    {
        return $this->discounts;
    }

    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     */
    public function setDiscounts(?ModificationDiscounts $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>).
     */
    public function setLocation(?Location $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function getPayments(): ?ModificationPayments
    {
        return $this->payments;
    }

    public function setPayments(?ModificationPayments $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    public function getSizeTable(): ?SizeTable
    {
        return $this->sizeTable;
    }

    public function setSizeTable(?SizeTable $sizeTable): self
    {
        $this->initialized['sizeTable'] = true;
        $this->sizeTable = $sizeTable;

        return $this;
    }

    /**
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     */
    public function getPublication(): ?ModificationPublication
    {
        return $this->publication;
    }

    /**
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     */
    public function setPublication(?ModificationPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     */
    public function getResponsiblePerson(): ?ModificationResponsiblePerson
    {
        return $this->responsiblePerson;
    }

    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     */
    public function setResponsiblePerson(?ModificationResponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     */
    public function getResponsibleProducer(): ?ModificationResponsibleProducer
    {
        return $this->responsibleProducer;
    }

    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     */
    public function setResponsibleProducer(?ModificationResponsibleProducer $responsibleProducer): self
    {
        $this->initialized['responsibleProducer'] = true;
        $this->responsibleProducer = $responsibleProducer;

        return $this;
    }

    /**
     * Allows you to set safety information in offers.
     */
    public function getSafetyInformation(): ?ModificationSafetyInformation
    {
        return $this->safetyInformation;
    }

    /**
     * Allows you to set safety information in offers.
     */
    public function setSafetyInformation(?ModificationSafetyInformation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }
}
