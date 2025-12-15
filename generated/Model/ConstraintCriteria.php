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

class ConstraintCriteria extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $country;
    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     *
     * @var string|null
     */
    protected $type;
    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @var list<JustId>|null
     */
    protected $deliveryMethods;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @return list<JustId>|null
     */
    public function getDeliveryMethods(): ?array
    {
        return $this->deliveryMethods;
    }

    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @param list<JustId>|null $deliveryMethods
     */
    public function setDeliveryMethods(?array $deliveryMethods): self
    {
        $this->initialized['deliveryMethods'] = true;
        $this->deliveryMethods = $deliveryMethods;

        return $this;
    }
}
