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

class AdvanceShipNotice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * Represents information about package shipment.
     * Constraints:
     *   * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     *   * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     *   * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     *
     * @var Shipping|null
     */
    protected $shipping;
    /**
     * Total volume of all items declared by the merchant for delivery to the warehouse as part of the advance shipment notice, in cubic centimeters.
     *
     * @var float|null
     */
    protected $declaredVolumeInCc;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Represents information about package shipment.
     * Constraints:
     *   * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     *   * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     *   * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     */
    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    /**
     * Represents information about package shipment.
     * Constraints:
     * for method OWN_TRANSPORT: truckLicencePlate, estimatedTimeOfArrival and countryCode are required.
     * for method COURIER_BY_SELLER: courier, estimatedTimeOfArrival and countryCode are required.
     * for method THIRD_PARTY_DELIVERY: thirdParty, estimatedTimeOfArrival and countryCode are required.
     */
    public function setShipping(?Shipping $shipping): self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Total volume of all items declared by the merchant for delivery to the warehouse as part of the advance shipment notice, in cubic centimeters.
     */
    public function getDeclaredVolumeInCc(): ?float
    {
        return $this->declaredVolumeInCc;
    }

    /**
     * Total volume of all items declared by the merchant for delivery to the warehouse as part of the advance shipment notice, in cubic centimeters.
     */
    public function setDeclaredVolumeInCc(?float $declaredVolumeInCc): self
    {
        $this->initialized['declaredVolumeInCc'] = true;
        $this->declaredVolumeInCc = $declaredVolumeInCc;

        return $this;
    }
}
