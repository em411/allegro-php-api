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

class DeliverySettingsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace for which delivery settings were returned.
     *
     * @var DeliverySettingsResponseMarketplace|null
     */
    protected $marketplace;
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     *
     * @var DeliverySettingsResponseFreeDelivery|null
     */
    protected $freeDelivery;
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     *
     * @var DeliverySettingsResponseAbroadFreeDelivery|null
     */
    protected $abroadFreeDelivery;
    /**
     * Policy of calculating delivery costs.
     *
     * @var DeliverySettingsResponseJoinPolicy|null
     */
    protected $joinPolicy;
    /**
     * Feature is no longer supported, 'allowed' property is always false.
     *
     * @deprecated
     *
     * @var DeliverySettingsResponseCustomCost|null
     */
    protected $customCost;
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     *
     * @var string|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace for which delivery settings were returned.
     */
    public function getMarketplace(): ?DeliverySettingsResponseMarketplace
    {
        return $this->marketplace;
    }

    /**
     * Marketplace for which delivery settings were returned.
     */
    public function setMarketplace(?DeliverySettingsResponseMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     */
    public function getFreeDelivery(): ?DeliverySettingsResponseFreeDelivery
    {
        return $this->freeDelivery;
    }

    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     */
    public function setFreeDelivery(?DeliverySettingsResponseFreeDelivery $freeDelivery): self
    {
        $this->initialized['freeDelivery'] = true;
        $this->freeDelivery = $freeDelivery;

        return $this;
    }

    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     */
    public function getAbroadFreeDelivery(): ?DeliverySettingsResponseAbroadFreeDelivery
    {
        return $this->abroadFreeDelivery;
    }

    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     */
    public function setAbroadFreeDelivery(?DeliverySettingsResponseAbroadFreeDelivery $abroadFreeDelivery): self
    {
        $this->initialized['abroadFreeDelivery'] = true;
        $this->abroadFreeDelivery = $abroadFreeDelivery;

        return $this;
    }

    /**
     * Policy of calculating delivery costs.
     */
    public function getJoinPolicy(): ?DeliverySettingsResponseJoinPolicy
    {
        return $this->joinPolicy;
    }

    /**
     * Policy of calculating delivery costs.
     */
    public function setJoinPolicy(?DeliverySettingsResponseJoinPolicy $joinPolicy): self
    {
        $this->initialized['joinPolicy'] = true;
        $this->joinPolicy = $joinPolicy;

        return $this;
    }

    /**
     * Feature is no longer supported, 'allowed' property is always false.
     *
     * @deprecated
     */
    public function getCustomCost(): ?DeliverySettingsResponseCustomCost
    {
        return $this->customCost;
    }

    /**
     * Feature is no longer supported, 'allowed' property is always false.
     *
     * @deprecated
     */
    public function setCustomCost(?DeliverySettingsResponseCustomCost $customCost): self
    {
        $this->initialized['customCost'] = true;
        $this->customCost = $customCost;

        return $this;
    }

    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
