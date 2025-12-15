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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Lower limit for the rate.
     *
     * @var string|null
     */
    protected $min;
    /**
     * Upper limit for the rate.
     *
     * @var string|null
     */
    protected $max;
    /**
     * ISO 4217 currency code.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Lower limit for the rate.
     */
    public function getMin(): ?string
    {
        return $this->min;
    }

    /**
     * Lower limit for the rate.
     */
    public function setMin(?string $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    /**
     * Upper limit for the rate.
     */
    public function getMax(): ?string
    {
        return $this->max;
    }

    /**
     * Upper limit for the rate.
     */
    public function setMax(?string $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }

    /**
     * ISO 4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * ISO 4217 currency code.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
