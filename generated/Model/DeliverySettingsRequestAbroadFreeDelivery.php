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

class DeliverySettingsRequestAbroadFreeDelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The amount provided in a string format to avoid rounding errors.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * ISO 4217 currency code. The correct currency code for a given marketplace should be set, e.g. PLN for allegro-pl, CZK for allegro-cz.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The amount provided in a string format to avoid rounding errors.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * The amount provided in a string format to avoid rounding errors.
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * ISO 4217 currency code. The correct currency code for a given marketplace should be set, e.g. PLN for allegro-pl, CZK for allegro-cz.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * ISO 4217 currency code. The correct currency code for a given marketplace should be set, e.g. PLN for allegro-pl, CZK for allegro-cz.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
