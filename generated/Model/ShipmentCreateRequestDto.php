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

class ShipmentCreateRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Id of delivery method, chosen by buyer in the order. This field will be removed in the future. Use the `carrier`, `cashOnDelivery`, and `packages.transportingInfo` fields instead.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $deliveryMethodId;
    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $credentialsId;
    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     *
     * @var SenderAddressDto|null
     */
    protected $sender;
    /**
     * Receiver address data with optional point ID.
     *
     * @var ReceiverAddressDto|null
     */
    protected $receiver;
    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     *
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * @var list<PackageRequestDto>|null
     */
    protected $packages;
    /**
     * @var InsuranceDto|null
     */
    protected $insurance;
    /**
     * @var CashOnDeliveryDto|null
     */
    protected $cashOnDelivery;
    /**
     * Label file format.
     *
     * @var string|null
     */
    protected $labelFormat;
    /**
     * List of additional services.
     *
     * @var list<string>|null
     */
    protected $additionalServices;
    /**
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @var array<string, string>|null
     */
    protected $additionalProperties;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Id of delivery method, chosen by buyer in the order. This field will be removed in the future. Use the `carrier`, `cashOnDelivery`, and `packages.transportingInfo` fields instead.
     *
     * @deprecated
     */
    public function getDeliveryMethodId(): ?string
    {
        return $this->deliveryMethodId;
    }

    /**
     * Id of delivery method, chosen by buyer in the order. This field will be removed in the future. Use the `carrier`, `cashOnDelivery`, and `packages.transportingInfo` fields instead.
     *
     * @deprecated
     */
    public function setDeliveryMethodId(?string $deliveryMethodId): self
    {
        $this->initialized['deliveryMethodId'] = true;
        $this->deliveryMethodId = $deliveryMethodId;

        return $this;
    }

    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @deprecated
     */
    public function getCredentialsId(): ?string
    {
        return $this->credentialsId;
    }

    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @deprecated
     */
    public function setCredentialsId(?string $credentialsId): self
    {
        $this->initialized['credentialsId'] = true;
        $this->credentialsId = $credentialsId;

        return $this;
    }

    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     */
    public function getSender(): ?SenderAddressDto
    {
        return $this->sender;
    }

    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     */
    public function setSender(?SenderAddressDto $sender): self
    {
        $this->initialized['sender'] = true;
        $this->sender = $sender;

        return $this;
    }

    /**
     * Receiver address data with optional point ID.
     */
    public function getReceiver(): ?ReceiverAddressDto
    {
        return $this->receiver;
    }

    /**
     * Receiver address data with optional point ID.
     */
    public function setReceiver(?ReceiverAddressDto $receiver): self
    {
        $this->initialized['receiver'] = true;
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * @return list<PackageRequestDto>|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * @param list<PackageRequestDto>|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }

    public function getInsurance(): ?InsuranceDto
    {
        return $this->insurance;
    }

    public function setInsurance(?InsuranceDto $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;

        return $this;
    }

    public function getCashOnDelivery(): ?CashOnDeliveryDto
    {
        return $this->cashOnDelivery;
    }

    public function setCashOnDelivery(?CashOnDeliveryDto $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    /**
     * Label file format.
     */
    public function getLabelFormat(): ?string
    {
        return $this->labelFormat;
    }

    /**
     * Label file format.
     */
    public function setLabelFormat(?string $labelFormat): self
    {
        $this->initialized['labelFormat'] = true;
        $this->labelFormat = $labelFormat;

        return $this;
    }

    /**
     * List of additional services.
     *
     * @return list<string>|null
     */
    public function getAdditionalServices(): ?array
    {
        return $this->additionalServices;
    }

    /**
     * List of additional services.
     *
     * @param list<string>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @return array<string, string>|null
     */
    public function getAdditionalProperties(): ?iterable
    {
        return $this->additionalProperties;
    }

    /**
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @param array<string, string>|null $additionalProperties
     */
    public function setAdditionalProperties(?iterable $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }
}
