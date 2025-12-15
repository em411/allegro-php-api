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

class Pos extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
     *
     * @var string|null
     */
    protected $id;
    /**
     * ID from external client system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var Seller|null
     */
    protected $seller;
    /**
     * Indicates point type. The only valid value so far is PICKUP_POINT.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var Address|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var list<PosLocation>|null
     */
    protected $locations;
    /**
     * Possible empty list of opening hours.
     *
     * @var list<OpenHour>|null
     */
    protected $openHours;
    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'.
     *
     * @var string|null
     */
    protected $serviceTime;
    /**
     * An empty list of payment types is available.
     *
     * @var list<Payment>|null
     */
    protected $payments;
    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     *
     * @var string|null
     */
    protected $confirmationType;
    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var string|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * ID from external client system.
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * ID from external client system.
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
     * Indicates point type. The only valid value so far is PICKUP_POINT.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Indicates point type. The only valid value so far is PICKUP_POINT.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return list<PosLocation>|null
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @param list<PosLocation>|null $locations
     */
    public function setLocations(?array $locations): self
    {
        $this->initialized['locations'] = true;
        $this->locations = $locations;

        return $this;
    }

    /**
     * Possible empty list of opening hours.
     *
     * @return list<OpenHour>|null
     */
    public function getOpenHours(): ?array
    {
        return $this->openHours;
    }

    /**
     * Possible empty list of opening hours.
     *
     * @param list<OpenHour>|null $openHours
     */
    public function setOpenHours(?array $openHours): self
    {
        $this->initialized['openHours'] = true;
        $this->openHours = $openHours;

        return $this;
    }

    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'.
     */
    public function getServiceTime(): ?string
    {
        return $this->serviceTime;
    }

    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'.
     */
    public function setServiceTime(?string $serviceTime): self
    {
        $this->initialized['serviceTime'] = true;
        $this->serviceTime = $serviceTime;

        return $this;
    }

    /**
     * An empty list of payment types is available.
     *
     * @return list<Payment>|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * An empty list of payment types is available.
     *
     * @param list<Payment>|null $payments
     */
    public function setPayments(?array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;

        return $this;
    }

    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     */
    public function getConfirmationType(): ?string
    {
        return $this->confirmationType;
    }

    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     */
    public function setConfirmationType(?string $confirmationType): self
    {
        $this->initialized['confirmationType'] = true;
        $this->confirmationType = $confirmationType;

        return $this;
    }

    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
