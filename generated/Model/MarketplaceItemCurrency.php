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

class MarketplaceItemCurrency extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO 4217 currency code.
     *
     * @var string|null
     */
    protected $code;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO 4217 currency code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * ISO 4217 currency code.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }
}
