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

class BadgeApplicationSubsidyTargetPrice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Value must be greater than minimal, decimal places aligned with market rules.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Value must be greater than minimal, decimal places aligned with market rules.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Value must be greater than minimal, decimal places aligned with market rules.
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency provided as a 3-letter code in accordance with ISO 4217 standard (https://en.wikipedia.org/wiki/ISO_4217). Only base currency for a given marketplace is supported, example: PLN for allegro-pl, CZK for allegro-cz, EUR for allegro-sk.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
