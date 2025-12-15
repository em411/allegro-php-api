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

class LimitWithCurrencyDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum value.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum value.
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }

    /**
     * Maximum value.
     */
    public function setLimit(?float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * ISO 4217 currency code. Currency code depends on marketplace, e.g. PLN for allegro-pl, CZK for allegro-cz.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
