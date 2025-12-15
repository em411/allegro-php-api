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

class DeliverySettingsRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     *
     * @var DeliverySettingsRequestMarketplace|null
     */
    protected $marketplace;
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     *
     * @var DeliverySettingsRequestFreeDelivery|null
     */
    protected $freeDelivery;
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     *
     * @var DeliverySettingsRequestAbroadFreeDelivery|null
     */
    protected $abroadFreeDelivery;
    /**
     * Policy of calculating delivery costs.
     *
     * @var DeliverySettingsRequestJoinPolicy|null
     */
    protected $joinPolicy;
    /**
     * Policy of custom delivery cost.
     *
     * @var DeliverySettingsRequestCustomCost|null
     */
    protected $customCost;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     */
    public function getMarketplace(): ?DeliverySettingsRequestMarketplace
    {
        return $this->marketplace;
    }

    /**
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     */
    public function setMarketplace(?DeliverySettingsRequestMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     */
    public function getFreeDelivery(): ?DeliverySettingsRequestFreeDelivery
    {
        return $this->freeDelivery;
    }

    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     */
    public function setFreeDelivery(?DeliverySettingsRequestFreeDelivery $freeDelivery): self
    {
        $this->initialized['freeDelivery'] = true;
        $this->freeDelivery = $freeDelivery;

        return $this;
    }

    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     */
    public function getAbroadFreeDelivery(): ?DeliverySettingsRequestAbroadFreeDelivery
    {
        return $this->abroadFreeDelivery;
    }

    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     */
    public function setAbroadFreeDelivery(?DeliverySettingsRequestAbroadFreeDelivery $abroadFreeDelivery): self
    {
        $this->initialized['abroadFreeDelivery'] = true;
        $this->abroadFreeDelivery = $abroadFreeDelivery;

        return $this;
    }

    /**
     * Policy of calculating delivery costs.
     */
    public function getJoinPolicy(): ?DeliverySettingsRequestJoinPolicy
    {
        return $this->joinPolicy;
    }

    /**
     * Policy of calculating delivery costs.
     */
    public function setJoinPolicy(?DeliverySettingsRequestJoinPolicy $joinPolicy): self
    {
        $this->initialized['joinPolicy'] = true;
        $this->joinPolicy = $joinPolicy;

        return $this;
    }

    /**
     * Policy of custom delivery cost.
     */
    public function getCustomCost(): ?DeliverySettingsRequestCustomCost
    {
        return $this->customCost;
    }

    /**
     * Policy of custom delivery cost.
     */
    public function setCustomCost(?DeliverySettingsRequestCustomCost $customCost): self
    {
        $this->initialized['customCost'] = true;
        $this->customCost = $customCost;

        return $this;
    }
}
