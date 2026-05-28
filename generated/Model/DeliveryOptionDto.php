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

class DeliveryOptionDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Representation of possible delivery types.
     *
     * @var string|null
     */
    protected $deliveryType;
    /**
     * Representation of possible payment types for a delivery.
     *
     * @var string|null
     */
    protected $paymentType;
    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     *
     * @var string|null
     */
    protected $packageType;
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     *
     * @var string|null
     */
    protected $destinationCountry;
    /**
     * @var DeliveryOptionDtoLimits|null
     */
    protected $limits;
    /**
     * @var list<AdditionalServiceDto>|null
     */
    protected $additionalServices;
    /**
     * @var list<AdditionalPropertyDto>|null
     */
    protected $additionalProperties;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Representation of possible delivery types.
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * Representation of possible delivery types.
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->initialized['deliveryType'] = true;
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * Representation of possible payment types for a delivery.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Representation of possible payment types for a delivery.
     */
    public function setPaymentType(?string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     */
    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER.
     */
    public function setPackageType(?string $packageType): self
    {
        $this->initialized['packageType'] = true;
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function setOriginCountry(?string $originCountry): self
    {
        $this->initialized['originCountry'] = true;
        $this->originCountry = $originCountry;

        return $this;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function getDestinationCountry(): ?string
    {
        return $this->destinationCountry;
    }

    /**
     * Country code in ISO 3166-1 alfa-2 format (two-letter code).
     */
    public function setDestinationCountry(?string $destinationCountry): self
    {
        $this->initialized['destinationCountry'] = true;
        $this->destinationCountry = $destinationCountry;

        return $this;
    }

    public function getLimits(): ?DeliveryOptionDtoLimits
    {
        return $this->limits;
    }

    public function setLimits(?DeliveryOptionDtoLimits $limits): self
    {
        $this->initialized['limits'] = true;
        $this->limits = $limits;

        return $this;
    }

    /**
     * @return list<AdditionalServiceDto>|null
     */
    public function getAdditionalServices(): ?array
    {
        return $this->additionalServices;
    }

    /**
     * @param list<AdditionalServiceDto>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * @return list<AdditionalPropertyDto>|null
     */
    public function getAdditionalProperties(): ?array
    {
        return $this->additionalProperties;
    }

    /**
     * @param list<AdditionalPropertyDto>|null $additionalProperties
     */
    public function setAdditionalProperties(?array $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }
}
