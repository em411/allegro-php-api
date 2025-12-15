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

class TaxRate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A country code for which given VAT setting is defined.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Values of tax rates for given country code.
     *
     * @var list<TaxRateValue>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A country code for which given VAT setting is defined.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * A country code for which given VAT setting is defined.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Values of tax rates for given country code.
     *
     * @return list<TaxRateValue>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * Values of tax rates for given country code.
     *
     * @param list<TaxRateValue>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
