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

class CpsConversionCommissionPublisher extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Commission amount.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * Currency code.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Commission amount.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Commission amount.
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Currency code.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
