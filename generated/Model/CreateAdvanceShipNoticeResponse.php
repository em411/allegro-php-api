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

class CreateAdvanceShipNoticeResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * An UUID identifier of ASN.
     *
     * @var string|null
     */
    protected $id;
    /**
     * A human friendly identifier of ASN.
     *
     * @var string|null
     */
    protected $displayNumber;
    /**
     * The Advance Ship Notice Status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * A list of product items.
     *
     * @var list<ProductItem>|null
     */
    protected $items;
    /**
     * Represents information about handling unit.
     *
     * @var HandlingUnit|null
     */
    protected $handlingUnit;
    /**
     * Represents created labels.
     *
     * @var Labels|null
     */
    protected $labels;
    /**
     * Represents information about package shipment.
     * Constraints:
     *   * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     *   * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     *   * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     *   * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
     *
     * @var ShippingExtended|null
     */
    protected $shipping;
    /**
     * Total volume (in cubic centimeters) of all items, declared by the merchant or calculated based on product dimensions stored in the product catalog.
     *
     * @var float|null
     */
    protected $volumeInCc;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * An UUID identifier of ASN.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * An UUID identifier of ASN.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * A human friendly identifier of ASN.
     */
    public function getDisplayNumber(): ?string
    {
        return $this->displayNumber;
    }

    /**
     * A human friendly identifier of ASN.
     */
    public function setDisplayNumber(?string $displayNumber): self
    {
        $this->initialized['displayNumber'] = true;
        $this->displayNumber = $displayNumber;

        return $this;
    }

    /**
     * The Advance Ship Notice Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The Advance Ship Notice Status.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * A list of product items.
     *
     * @return list<ProductItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * A list of product items.
     *
     * @param list<ProductItem>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * Represents information about handling unit.
     */
    public function getHandlingUnit(): ?HandlingUnit
    {
        return $this->handlingUnit;
    }

    /**
     * Represents information about handling unit.
     */
    public function setHandlingUnit(?HandlingUnit $handlingUnit): self
    {
        $this->initialized['handlingUnit'] = true;
        $this->handlingUnit = $handlingUnit;

        return $this;
    }

    /**
     * Represents created labels.
     */
    public function getLabels(): ?Labels
    {
        return $this->labels;
    }

    /**
     * Represents created labels.
     */
    public function setLabels(?Labels $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;

        return $this;
    }

    /**
     * Represents information about package shipment.
     * Constraints:
     *   * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     *   * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     *   * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     *   * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
     */
    public function getShipping(): ?ShippingExtended
    {
        return $this->shipping;
    }

    /**
     * Represents information about package shipment.
     * Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     * for method ALREADY_IN_WAREHOUSE: estimatedTimeOfArrival and countryCode are required.
     */
    public function setShipping(?ShippingExtended $shipping): self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Total volume (in cubic centimeters) of all items, declared by the merchant or calculated based on product dimensions stored in the product catalog.
     */
    public function getVolumeInCc(): ?float
    {
        return $this->volumeInCc;
    }

    /**
     * Total volume (in cubic centimeters) of all items, declared by the merchant or calculated based on product dimensions stored in the product catalog.
     */
    public function setVolumeInCc(?float $volumeInCc): self
    {
        $this->initialized['volumeInCc'] = true;
        $this->volumeInCc = $volumeInCc;

        return $this;
    }
}
