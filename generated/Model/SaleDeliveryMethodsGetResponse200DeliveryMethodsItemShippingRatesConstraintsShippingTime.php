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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Default shipping time.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault|null
     */
    protected $default;
    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     *
     * @var bool|null
     */
    protected $customizable;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Default shipping time.
     */
    public function getDefault(): ?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault
    {
        return $this->default;
    }

    /**
     * Default shipping time.
     */
    public function setDefault(?SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }

    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     */
    public function getCustomizable(): ?bool
    {
        return $this->customizable;
    }

    /**
     * Indicates if custom shipping time can be set when adding or modifying shipping rates.
     */
    public function setCustomizable(?bool $customizable): self
    {
        $this->initialized['customizable'] = true;
        $this->customizable = $customizable;

        return $this;
    }
}
